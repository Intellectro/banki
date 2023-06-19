"use strict";

jQuery(function ($) {
    $(document).ready(function () {
        if (
            typeof drupalSettings.q2_add_logins != "undefined" &&
            drupalSettings.q2_add_logins.admin === false
        ) {
            if (
                drupalSettings.q2_add_logins.enable === true &&
                drupalSettings.q2_add_logins.logins.length
            ) {
                // Add functionality to the Q2 object on window
                window.q2.logins = {
                    addOLB: function addOLB() {
                        var temp_array = [];
                        temp_array["name"] =
                            drupalSettings.q2_add_logins.default_name;
                        temp_array["type"] = "form";
                        temp_array["url"] = null;
                        temp_array["form_action"] = $(
                            'form[name="Q2OnlineLogin"]'
                        ).attr("action");
                        temp_array["user_name"] = $(
                            'form[name="Q2OnlineLogin"] input[type="text"]'
                        ).attr("name");
                        temp_array["pass_name"] = $(
                            'form[name="Q2OnlineLogin"] input[type="password"]'
                        ).attr("name");
                        drupalSettings.q2_add_logins.logins.unshift(temp_array);
                    },

                    updateLoginForm: function updateLoginForm() {
                        var i = 0;
                        $('form[name="Q2OnlineLogin"]').each(function () {
                            i++;
                            var form = $(this);
                            form.before(
                                '\n                <div class="input-group q2-login-selector-container">\n                  <label for="login-select-' +
                                    i +
                                    '" class="sr-only">Select which system to login to</label>\n                  <select id="login-select-' +
                                    i +
                                    '" class="js-additional-login-selector q2-login-selector"></select>\n                </div>\n              '
                            );
                            $.each(
                                drupalSettings.q2_add_logins.logins,
                                function () {
                                    $("#login-select-" + i).append(
                                        "<option>" + this.name + "</option>"
                                    );
                                }
                            );
                        });
                    },

                    watchForm: function watchForm() {
                        $("select.js-additional-login-selector").on(
                            "change",
                            function () {
                                var form = $(this)
                                    .closest(".input-group")
                                    .next("form");
                                var loginName = this.value;
                                $.each(
                                    drupalSettings.q2_add_logins.logins,
                                    function () {
                                        if (this.name === loginName) {
                                            if (this.type == "form") {
                                                $(
                                                    ".js-login-link-button"
                                                ).remove();
                                                form.attr(
                                                    "action",
                                                    this.form_action
                                                );
                                                if (this.name !== null) {
                                                    form.find(
                                                        'input[type="text"]'
                                                    ).attr(
                                                        "name",
                                                        this.user_name
                                                    );
                                                } else {
                                                    form.find(
                                                        'input[type="text"]'
                                                    ).attr(
                                                        "name",
                                                        drupalSettings
                                                            .q2_add_logins
                                                            .logins[0].user_name
                                                    );
                                                }
                                                if (this.pass_name !== null) {
                                                    form.find(
                                                        'input[type="password"]'
                                                    ).attr(
                                                        "name",
                                                        this.pass_name
                                                    );
                                                } else {
                                                    form.find(
                                                        'input[type="password"]'
                                                    ).attr(
                                                        "name",
                                                        drupalSettings
                                                            .q2_add_logins
                                                            .logins[0].pass_name
                                                    );
                                                }
                                                form.show();
                                                if (
                                                    this.name !==
                                                    drupalSettings.q2_add_logins
                                                        .default_name
                                                ) {
                                                    form.find("ul").hide();
                                                } else {
                                                    form.find("ul").show();
                                                }
                                            } else {
                                                form.hide();
                                                $(
                                                    ".js-login-link-button"
                                                ).remove();
                                                var buttonClasses = "button";
                                                var buttonText = "Login";
                                                if (
                                                    form.find(
                                                        'button[type="submit"]'
                                                    ).length
                                                ) {
                                                    if (
                                                        typeof form
                                                            .find(
                                                                'button[type="submit"]'
                                                            )
                                                            .attr("class") !=
                                                        "undefined"
                                                    ) {
                                                        buttonClasses = form
                                                            .find(
                                                                'button[type="submit"]'
                                                            )
                                                            .attr("class");
                                                    }
                                                    if (
                                                        typeof form
                                                            .find(
                                                                'button[type="submit"]'
                                                            )
                                                            .text() !=
                                                        "undefined"
                                                    ) {
                                                        buttonText = form
                                                            .find(
                                                                'button[type="submit"]'
                                                            )
                                                            .text();
                                                    }
                                                } else {
                                                    if (
                                                        typeof form
                                                            .find(
                                                                'input[type="submit"]'
                                                            )
                                                            .attr("class") !=
                                                        "undefined"
                                                    ) {
                                                        buttonClasses = form
                                                            .find(
                                                                'input[type="submit"]'
                                                            )
                                                            .attr("class");
                                                    }
                                                    if (
                                                        typeof form
                                                            .find(
                                                                'input[type="submit"]'
                                                            )
                                                            .attr("value") !=
                                                        "undefined"
                                                    ) {
                                                        buttonText = form
                                                            .find(
                                                                'input[type="submit"]'
                                                            )
                                                            .attr("value");
                                                    }
                                                }
                                                form.after(
                                                    '<a href="' +
                                                        this.url +
                                                        '" class="js-login-link-button ' +
                                                        buttonClasses +
                                                        '">' +
                                                        buttonText +
                                                        "</a>"
                                                );
                                                if (
                                                    typeof window.q2
                                                        .externalLinks !=
                                                    "undefined"
                                                ) {
                                                    window.q2.externalLinks.checkLink(
                                                        $(
                                                            ".js-login-link-button "
                                                        )
                                                    );
                                                }
                                            }
                                            return false;
                                        }
                                    }
                                );
                            }
                        );
                    },

                    // Function to initialize the additional login scripts
                    init: function init() {
                        this.addOLB();
                        this.updateLoginForm();
                        this.watchForm();
                    },

                    // Use seeTimeout to allow for overrides on the theme level as needed
                };
                setTimeout(function () {
                    window.q2.logins.init();
                }, 50);
            }
        } else {
            $(".field--name-field-q2-login-type select").each(function () {
                if (this.value == "form") {
                    $(this)
                        .closest("td")
                        .find(".field--name-field-q2-login-url")
                        .hide();
                    $(this)
                        .closest("td")
                        .find(
                            ".field--name-field-q2-login-form-action, .field--name-field-q2-user-id-name, .field--name-field-q2-password-name"
                        )
                        .show();
                } else {
                    $(this)
                        .closest("td")
                        .find(".field--name-field-q2-login-url")
                        .show();
                    $(this)
                        .closest("td")
                        .find(
                            ".field--name-field-q2-login-form-action, .field--name-field-q2-user-id-name, .field--name-field-q2-password-name"
                        )
                        .hide();
                }
            });
            $(".field--name-field-q2-login-type select").on(
                "change",
                function () {
                    if (this.value == "form") {
                        $(this)
                            .closest("td")
                            .find(".field--name-field-q2-login-url")
                            .hide();
                        $(this)
                            .closest("td")
                            .find(
                                ".field--name-field-q2-login-form-action, .field--name-field-q2-user-id-name, .field--name-field-q2-password-name"
                            )
                            .show();
                    } else {
                        $(this)
                            .closest("td")
                            .find(".field--name-field-q2-login-url")
                            .show();
                        $(this)
                            .closest("td")
                            .find(
                                ".field--name-field-q2-login-form-action, .field--name-field-q2-user-id-name, .field--name-field-q2-password-name"
                            )
                            .hide();
                    }
                }
            );
            Drupal.behaviors.q2conditionalFields = {
                attach: function attach() {
                    $(".field--name-field-q2-login-type select").on(
                        "change",
                        function () {
                            if (this.value == "form") {
                                $(this)
                                    .closest("td")
                                    .find(".field--name-field-q2-login-url")
                                    .hide();
                                $(this)
                                    .closest("td")
                                    .find(
                                        ".field--name-field-q2-login-form-action, .field--name-field-q2-user-id-name, .field--name-field-q2-password-name"
                                    )
                                    .show();
                            } else {
                                $(this)
                                    .closest("td")
                                    .find(".field--name-field-q2-login-url")
                                    .show();
                                $(this)
                                    .closest("td")
                                    .find(
                                        ".field--name-field-q2-login-form-action, .field--name-field-q2-user-id-name, .field--name-field-q2-password-name"
                                    )
                                    .hide();
                            }
                        }
                    );
                },
            };
        }
    }); // End document ready
});
