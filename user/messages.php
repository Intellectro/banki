<?php
require_once '../admin/inc/functions/config.php';
$title = "Message";
require_once 'inc/header.php';


?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">
  <div class="content">
    <div class="row">
      <div class="col-md-5 col-xl-3">
        <!-- Toggle Inbox Side Navigation -->
        <div class="d-md-none push">
          <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
          <button type="button" class="btn w-100 btn-primary" data-toggle="class-toggle" data-target="#one-inbox-side-nav" data-class="d-none">
            Inbox Menu
          </button>
        </div>
        <!-- END Toggle Inbox Side Navigation -->

        <!-- Inbox Side Navigation -->
        <div id="one-inbox-side-nav" class="d-none d-md-block push">
          
          <!-- Friends -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Friends</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option">
                  <i class="si si-settings"></i>
                </button>
              </div>
            </div>
            <div class="block-content">
              <ul class="nav-items fs-sm">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Carol White</div>
                      <div class="fw-normal text-muted">Web Designer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Jesse Fisher</div>
                      <div class="fw-normal text-muted">Graphic Designer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Amber Harvey</div>
                      <div class="fw-normal text-muted">Photographer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Brian Cruz</div>
                      <div class="fw-normal text-muted">Copywriter</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">David Fuller</div>
                      <div class="fw-normal text-muted">UI designer</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END Friends -->
        </div>
        <!-- END Inbox Side Navigation -->
        
      </div>
      <div class="col-md-7 col-xl-9">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <a href="" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-arrow-left"></i>
            </a>
            <div class="block-options">
              <a class="btn-block-option me-2" href="#forum-reply-form">
                <i class="fa fa-reply me-1"></i> Reply
              </a>
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
              <a href="" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </a>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-borderless">
              <tbody>
                <tr class="bg-body-light">
                  <td class="d-none d-sm-table-cell"></td>
                  <td class="fs-sm text-muted">
                    <a class="fw-semibold" href="be_pages_generic_profile.html">Laura Carr</a> on <span class="text-muted">July 1, 2019 16:15</span>
                  </td>
                </tr>
                <tr>
                  <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                    <p>
                      <a href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="assets/media/avatars/avatar3.jpg" alt="">
                      </a>
                    </p>
                    <p class="fs-sm fw-medium">267 Posts<br>Level 1</p>
                  </td>
                  <td>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <hr>
                    <p class="fs-sm text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
                  </td>
                </tr>
                <tr class="bg-body-light">
                  <td class="d-none d-sm-table-cell"></td>
                  <td class="fs-sm text-muted">
                    <a class="fw-semibold" href="be_pages_generic_profile.html">Brian Cruz</a> on <span class="text-muted">July 10, 2019 10:09</span>
                  </td>
                </tr>
                <tr>
                  <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                    <p>
                      <a href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
                      </a>
                    </p>
                    <p class="fs-sm fw-medium">157 Posts<br>Level 9</p>
                  </td>
                  <td>
                    <p>Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere habitasse sollicitudin, libero sit potenti leo ultricies etiam blandit id platea augue, erat habitant fermentum lorem commodo taciti tristique etiam curabitur suscipit lacinia habitasse amet mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis proin duis fringilla praesent ornare lorem eros malesuada vitae nullam diam velit potenti consectetur, vehicula accumsan risus lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi class praesent duis ligula, vel ornare faucibus potenti nibh turpis, at id semper nunc dui blandit. Enim et nec habitasse ultricies id tortor curabitur, consectetur eu inceptos ante conubia tempor platea odio, sed sem integer lacinia cras non risus euismod turpis platea erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing dapibus habitant sodales gravida pulvinar, elementum mi tempus ut commodo congue ipsum justo nec dui cursus scelerisque elementum volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu integer vulputate etiam ligula lobortis nunc, interdum commodo libero aliquam suscipit phasellus sollicitudin arcu varius venenatis erat ornare tempor nullam donec vitae etiam tellus.</p>
                    <hr>
                    <p class="fs-sm text-muted">Be yourself; everyone else is already taken.</p>
                  </td>
                </tr>
                <tr class="bg-body-light">
                  <td class="d-none d-sm-table-cell"></td>
                  <td class="fs-sm text-muted">
                    <a class="fw-semibold" href="be_pages_generic_profile.html">Henry Harrison</a> on <span class="text-muted">July 15, 2019 20:17</span>
                  </td>
                </tr>
                <tr>
                  <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                    <p>
                      <a href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="assets/media/avatars/avatar14.jpg" alt="">
                      </a>
                    </p>
                    <p class="fs-sm fw-medium">290 Posts<br>Level 8</p>
                  </td>
                  <td>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <hr>
                    <p class="fs-sm text-muted">Don't cry because it's over, smile because it happened.</p>
                  </td>
                </tr>
                <tr class="bg-body-light">
                  <td class="d-none d-sm-table-cell"></td>
                  <td class="fs-sm text-muted">
                    <a class="fw-semibold" href="be_pages_generic_profile.html">Laura Carr</a> on <span class="text-muted">July 20, 2019 20:29</span>
                  </td>
                </tr>
                <tr>
                  <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                    <p>
                      <a href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="assets/media/avatars/avatar7.jpg" alt="">
                      </a>
                    </p>
                    <p class="fs-sm fw-medium">367 Posts<br>Level 4</p>
                  </td>
                  <td>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <hr>
                    <p class="fs-sm text-muted">Strive not to be a success, but rather to be of value.</p>
                  </td>
                </tr>
                <tr class="table-active" id="forum-reply-form">
                  <td class="d-none d-sm-table-cell"></td>
                  <td class="fs-sm text-muted">
                    <a class="fw-semibold" href="be_pages_generic_profile.html">Carl Wells</a> Just now
                  </td>
                </tr>
                <tr>
                  <td class="d-none d-sm-table-cell text-center">
                    <p>
                      <a href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                      </a>
                    </p>
                    <p class="fs-sm fw-medium">303 Posts<br>Level 5</p>
                  </td>
                  <td>
                    <form action="be_pages_forum_discussion.html" method="POST" onsubmit="return false;">
                      <div class="mb-4">
                        <!-- CKEditor 5 Classic (js-ckeditor5-classic in Helpers.jsCkeditor5()) -->
                        <!-- For more info and examples you can check out http://ckeditor.com -->
                        <div id="js-ckeditor5-classic"></div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn btn-alt-primary">
                          <i class="fa fa-reply me-1 opacity-50"></i> Reply
                        </button>
                      </div>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
<!-- END Main Container -->
<script src="../admin/assets/js/oneui.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="../admin/assets/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
<script>One.helpersOnLoad(['js-ckeditor5']);</script>
<!-- Footer -->
<?php require_once 'inc/footer.php';     ?>
<script src="js/get_recipent.js"></script>