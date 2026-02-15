<!doctype html>

<html
  lang="en"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-skin="default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template"
  data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Calendar - SwiftDesk</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="/assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="/assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="/assets/vendor/libs/pickr/pickr-themes.css" />

    <link rel="stylesheet" href="/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->

    <link rel="stylesheet" href="/assets/vendor/libs/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="/assets/vendor/css/pages/app-calendar.css" />

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/assets/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu">
          <div class="app-brand demo">
            <a href="/" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="currentColor" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="currentColor" />
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-3">SwiftDesk</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
              <i class="icon-base ti tabler-x d-block d-xl-none"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
              </a>
            </li>

            <!-- Apps & Pages -->
            <li class="menu-header small">
              <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
            </li>
            <li class="menu-item active">
              <a href="/calendar" class="menu-link">
                <i class="menu-icon icon-base ti tabler-calendar"></i>
                <div data-i18n="Calendar">Calendar</div>
              </a>
            </li>
          </ul>
        </aside>

        <div class="menu-mobile-toggler d-xl-none rounded-1">
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
            <i class="ti tabler-menu icon-base"></i>
            <i class="ti tabler-chevron-right icon-base"></i>
          </a>
        </div>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="icon-base ti tabler-menu-2 icon-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="/assets/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                        <a class="btn btn-sm btn-danger d-flex" href="/login">
                          <small class="align-middle">Logout</small>
                          <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card app-calendar-wrapper">
                <div class="row g-0">
                  <!-- Calendar Sidebar -->
                  <div class="col app-calendar-sidebar border-end" id="app-calendar-sidebar">
                    <div class="border-bottom p-6 my-sm-0 mb-4">
                      <button
                        class="btn btn-primary btn-toggle-sidebar w-100"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#addEventSidebar"
                        aria-controls="addEventSidebar">
                        <i class="icon-base ti tabler-plus icon-16px me-2"></i>
                        <span class="align-middle">Add Event</span>
                      </button>
                    </div>
                    <div class="px-3 pt-2">
                      <!-- inline calendar (flatpicker) -->
                      <div class="inline-calendar"></div>
                    </div>
                    <hr class="mb-6 mx-n4 mt-3" />
                    <div class="px-6 pb-2">
                      <!-- Filter -->
                      <div>
                        <h5>Event Filters</h5>
                      </div>

                      <div class="form-check form-check-secondary mb-5 ms-2">
                        <input
                          class="form-check-input select-all"
                          type="checkbox"
                          id="selectAll"
                          data-value="all"
                          checked />
                        <label class="form-check-label" for="selectAll">View All</label>
                      </div>

                      <div class="app-calendar-events-filter text-heading">
                        <div class="form-check form-check-danger mb-5 ms-2">
                          <input
                            class="form-check-input input-filter"
                            type="checkbox"
                            id="select-personal"
                            data-value="personal"
                            checked />
                          <label class="form-check-label" for="select-personal">Personal</label>
                        </div>
                        <div class="form-check mb-5 ms-2">
                          <input
                            class="form-check-input input-filter"
                            type="checkbox"
                            id="select-business"
                            data-value="business"
                            checked />
                          <label class="form-check-label" for="select-business">Business</label>
                        </div>
                        <div class="form-check form-check-warning mb-5 ms-2">
                          <input
                            class="form-check-input input-filter"
                            type="checkbox"
                            id="select-family"
                            data-value="family"
                            checked />
                          <label class="form-check-label" for="select-family">Family</label>
                        </div>
                        <div class="form-check form-check-success mb-5 ms-2">
                          <input
                            class="form-check-input input-filter"
                            type="checkbox"
                            id="select-holiday"
                            data-value="holiday"
                            checked />
                          <label class="form-check-label" for="select-holiday">Holiday</label>
                        </div>
                        <div class="form-check form-check-info ms-2">
                          <input
                            class="form-check-input input-filter"
                            type="checkbox"
                            id="select-etc"
                            data-value="etc"
                            checked />
                          <label class="form-check-label" for="select-etc">ETC</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Calendar Sidebar -->

                  <!-- Calendar & Modal -->
                  <div class="col app-calendar-content">
                    <div class="card shadow-none border-0">
                      <div class="card-body pb-0">
                        <!-- FullCalendar -->
                        <div id="calendar"></div>
                      </div>
                    </div>
                    <div class="app-overlay"></div>
                    <!-- FullCalendar Offcanvas -->
                    <div
                      class="offcanvas offcanvas-end event-sidebar"
                      tabindex="-1"
                      id="addEventSidebar"
                      aria-labelledby="addEventSidebarLabel">
                      <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="addEventSidebarLabel">Add Event</h5>
                        <button
                          type="button"
                          class="btn-close text-reset"
                          data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <form class="event-form pt-0" id="eventForm" onsubmit="return false">
                          <div class="mb-5 form-control-validation">
                            <label class="form-label" for="eventTitle">Title</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventTitle"
                              name="eventTitle"
                              placeholder="Event Title" />
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="eventLabel">Label</label>
                            <select class="select2 select-event-label form-select" id="eventLabel" name="eventLabel">
                              <option data-label="primary" value="Business" selected>Business</option>
                              <option data-label="danger" value="Personal">Personal</option>
                              <option data-label="warning" value="Family">Family</option>
                              <option data-label="success" value="Holiday">Holiday</option>
                              <option data-label="info" value="ETC">ETC</option>
                            </select>
                          </div>
                          <div class="mb-5 form-control-validation">
                            <label class="form-label" for="eventStartDate">Start Date</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventStartDate"
                              name="eventStartDate"
                              placeholder="Start Date" />
                          </div>
                          <div class="mb-5 form-control-validation">
                            <label class="form-label" for="eventEndDate">End Date</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventEndDate"
                              name="eventEndDate"
                              placeholder="End Date" />
                          </div>
                          <div class="mb-5">
                            <div class="form-check form-switch">
                              <input type="checkbox" class="form-check-input allDay-switch" id="allDaySwitch" />
                              <label class="form-check-label" for="allDaySwitch">All Day</label>
                            </div>
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="eventURL">Event URL</label>
                            <input
                              type="url"
                              class="form-control"
                              id="eventURL"
                              name="eventURL"
                              placeholder="https://www.google.com" />
                          </div>
                          <div class="mb-4 select2-primary">
                            <label class="form-label" for="eventGuests">Add Guests</label>
                            <select
                              class="select2 select-event-guests form-select"
                              id="eventGuests"
                              name="eventGuests"
                              multiple>
                              <option data-avatar="1.png" value="Jane Foster">Jane Foster</option>
                              <option data-avatar="3.png" value="Donna Frank">Donna Frank</option>
                              <option data-avatar="5.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                              <option data-avatar="7.png" value="Lori Spears">Lori Spears</option>
                              <option data-avatar="9.png" value="Sandy Vega">Sandy Vega</option>
                              <option data-avatar="11.png" value="Cheryl May">Cheryl May</option>
                            </select>
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="eventLocation">Location</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventLocation"
                              name="eventLocation"
                              placeholder="Enter Location" />
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="eventDescription">Description</label>
                            <textarea class="form-control" name="eventDescription" id="eventDescription"></textarea>
                          </div>
                          <div class="d-flex justify-content-sm-between justify-content-start mt-6 gap-2">
                            <div class="d-flex">
                              <button type="submit" id="addEventBtn" class="btn btn-primary btn-add-event me-4">
                                Add
                              </button>
                              <button
                                type="reset"
                                class="btn btn-label-secondary btn-cancel me-sm-0 me-1"
                                data-bs-dismiss="offcanvas">
                                Cancel
                              </button>
                            </div>
                            <button class="btn btn-label-danger btn-delete-event d-none">Delete</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- /Calendar & Modal -->
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    © 2026, SwiftDesk Calendar
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="/assets/vendor/libs/jquery/jquery.js"></script>

    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="/assets/vendor/libs/@algolia/autocomplete-js.js"></script>

    <script src="/assets/vendor/libs/pickr/pickr.js"></script>

    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/libs/hammer/hammer.js"></script>

    <script src="/assets/vendor/libs/i18n/i18n.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/fullcalendar/fullcalendar.js"></script>
    <script src="/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="/assets/vendor/libs/@form-validation/auto-focus.js"></script>
    <script src="/assets/vendor/libs/select2/select2.js"></script>
    <script src="/assets/vendor/libs/moment/moment.js"></script>
    <script src="/assets/vendor/libs/flatpickr/flatpickr.js"></script>

    <!-- Main JS -->

    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/app-calendar-events.js"></script>
    <script src="/assets/js/app-calendar.js"></script>
  </body>
</html>
