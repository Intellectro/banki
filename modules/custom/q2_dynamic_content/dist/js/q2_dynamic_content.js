"use strict";

function _defineProperty(obj, key, value) {
    if (key in obj) {
        Object.defineProperty(obj, key, {
            value: value,
            enumerable: true,
            configurable: true,
            writable: true,
        });
    } else {
        obj[key] = value;
    }
    return obj;
}

// App for dynamic content - more details comments to be added upon completion
jQuery(function ($) {
    $(document).ready(function () {
        // Set user site visit history in local storage
        var browseHistory = JSON.parse(
            localStorage.getItem("Q2.dynamic_content.history")
        );
        if (typeof nodeID !== "undefined") {
            var currentTime = Number(new Date());
            if (browseHistory !== null) {
                if (nodeID in browseHistory) {
                    browseHistory[nodeID].time = currentTime;
                    browseHistory[nodeID].hits = browseHistory[nodeID].hits + 1;
                    localStorage.setItem(
                        "Q2.dynamic_content.history",
                        JSON.stringify(browseHistory)
                    );
                } else {
                    browseHistory[nodeID] = {
                        time: currentTime,
                        hits: 1,
                    };
                    localStorage.setItem(
                        "Q2.dynamic_content.history",
                        JSON.stringify(browseHistory)
                    );
                }
            } else {
                var currentPage = _defineProperty({}, nodeID, {
                    time: currentTime,
                    hits: 1,
                });
                localStorage.setItem(
                    "Q2.dynamic_content.history",
                    JSON.stringify(currentPage)
                );
            }
        }

        // Function to score dynamic banners
        var scoreBanners = function scoreBanners(data) {
            var scores = [];
            $.each(data, function (key) {
                if (key !== "status") {
                    var relevanceScore = 0;
                    var recencyScore = 0;
                    var scoreTotal = 0;
                    $.each(this.related_pages, function () {
                        if (browseHistory !== null && this in browseHistory) {
                            var _currentTime = Number(new Date());

                            // Set relevance score
                            // - scoring is based on 1 point for a unique related page view and 0.75 points per additional hit per related page.
                            relevanceScore =
                                relevanceScore +
                                1 +
                                browseHistory[this].hits * 0.75;

                            // Set recency score
                            // - score is based on the addition of 1 point with its value decreased by the amount of time that has passed since the last page hit
                            // - only the highest recency score will be used per set of related pages
                            recencyScore =
                                1 -
                                    (_currentTime - browseHistory[this].time) *
                                        0.0000001 >=
                                    0 &&
                                1 -
                                    (_currentTime - browseHistory[this].time) *
                                        0.0000001 >
                                    recencyScore
                                    ? 1 -
                                      (_currentTime -
                                          browseHistory[this].time) *
                                          0.0000001
                                    : recencyScore;
                        }
                        scoreTotal = scoreTotal + relevanceScore + recencyScore;
                    });
                    scores[this.nid] = scoreTotal;
                }
            });

            // Get the max value from the array
            var highestNID = null;
            var highestScore = 0;
            $.each(scores, function (key, value) {
                if (value > highestScore) {
                    highestScore = value;
                    highestNID = key;
                }
            });

            return highestNID;
        };

        // Function to update the banner section html as needed
        var updateBanner = function updateBanner(data, nid) {
            if (!$.isEmptyObject(data[nid])) {
                if (data[nid].override == true) {
                    $("#landing-banner .orbit-slide").remove();
                }
                $("#landing-banner .orbit .orbit-container").prepend(
                    data[nid].html
                );
                var numSlides = $("#landing-banner .orbit-slide").length;
                var playButton = $("#landing-banner .orbit-bullets button.play")
                    .length
                    ? $("#landing-banner .orbit-bullets button.play").clone()
                    : null;
                var pauseButton = $(
                    "#landing-banner .orbit-bullets button.pause"
                ).length
                    ? $("#landing-banner .orbit-bullets button.pause").clone()
                    : null;
                $("#landing-banner .orbit-bullets button.play").remove();
                $("#landing-banner .orbit-bullets button.pause").remove();
                var numbBullets = $(
                    "#landing-banner .orbit-bullets button"
                ).length;
                var i = void 0;
                if (numSlides > numbBullets) {
                    for (i = numbBullets; i < numSlides; i++) {
                        $("#landing-banner .orbit-bullets").append(
                            '<button class="bullet" data-slide="' +
                                i +
                                '"><span class="show-for-sr">Details for slide number ' +
                                i +
                                "</span></button>"
                        );
                    }
                } else if (numSlides < numbBullets) {
                    $(
                        $("#landing-banner .orbit-bullets button")
                            .get()
                            .reverse()
                    ).each(function () {
                        if (
                            $("#landing-banner .orbit-slide").length <
                            $("#landing-banner .orbit-bullets button").length
                        ) {
                            $(this).remove();
                        }
                    });
                }
                if (playButton !== null && pauseButton !== null) {
                    $("#landing-banner .orbit-bullets").append(pauseButton);
                    $("#landing-banner .orbit-bullets").append(playButton);
                }
            }

            // Ignore the random banner setting  - we want to ensure that the dynamic banner is served
            window.q2.orbit.setupOrbitList = function () {
                $("#landing-banner .orbit-slide").removeClass("is-active");
                var activeSpan = $(
                    ".orbit-bullets [data-slide-active-label]"
                ).clone();
                $("#landing-banner .orbit-bullets .bullet").removeClass(
                    "is-active"
                );
                $(
                    "#landing-banner .orbit-bullets [data-slide-active-label]"
                ).remove();
                $("#landing-banner .orbit-bullets .bullet:eq(0)").addClass(
                    "is-active"
                );
                $("#landing-banner .orbit-bullets .bullet:eq(0)").append(
                    activeSpan
                );
                $("#landing-banner .orbit-slide:eq(0)").addClass("is-active");
            };
        };

        // Function to process the data, including scoring and updating the banner dom
        var processsData = function processsData(data) {
            if (data != null) {
                var nid = scoreBanners(data);
                if (nid != null) {
                    updateBanner(data, nid);
                }
            }
        };

        // Get data from API and save it off to session storage to help performance
        if ($("#landing-banner .orbit").length) {
            var jsonEndpoint = "/q2_dynamic_content/ajax/get-dynamic-banners";
            var contentData = JSON.parse(
                sessionStorage.getItem("Q2.dynamic_content.content")
            );
            if (contentData != null && !$.isEmptyObject(contentData)) {
                if (contentData.status == true) {
                    processsData(contentData);
                }
            } else {
                $.get(jsonEndpoint, function (data) {
                    sessionStorage.setItem(
                        "Q2.dynamic_content.content",
                        JSON.stringify(data)
                    );
                }).done(function () {
                    contentData = JSON.parse(
                        sessionStorage.getItem("Q2.dynamic_content.content")
                    );
                    if (contentData.status == true) {
                        processsData(contentData);
                    }
                });
            }
        }
    }); // End document ready
});
