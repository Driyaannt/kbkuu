{{-- <header class="app-header">
    <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="nav-item d-none d-xl-block">
          <a href="index.html" class="text-nowrap nav-link">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
          </a>
        </li>
      </ul>
      <!-- <ul class="navbar-nav quick-links d-none d-xl-flex">
        <li class="nav-item dropdown-hover d-none d-xl-block">
          <a class="nav-link">Chat</a>
        </li>
        <li class="nav-item dropdown-hover d-none d-xl-block">
          <a class="nav-link" href="app-calendar.html">Calendar</a>
        </li>
        <li class="nav-item dropdown-hover d-none d-xl-block">
          <a class="nav-link" href="app-email.html">Email</a>
        </li>
      </ul> -->
      <div class="d-block d-xl-none">
        <a href="index.html" class="text-nowrap nav-link">
          <img src="../../dist/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
      </div>
      <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="p-2">
          <i class="ti ti-dots fs-7"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
            <button
            type="button"
            onclick="window.location='{{ route('dashboard') }}';"
            class="btn me-3 mb-1 waves-effect waves-light btn-outline-secondary {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            Dashboard
        </button>
          <button
    type="button"
    onclick="window.location='{{ route('home') }}';"
    class="btn mb-1 waves-effect waves-light btn-outline-success {{ request()->routeIs('home') ? 'active' : '' }}">
    Home
</button>


          <!-- <button type="button" class="btn ms-2 bg-success-subtle text-success">
            Home
          </button> -->
          </div>
      </div>
    </nav>
  </header> --}}


  {{-- ================================================ --}}
<header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                  <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                    {{-- <i class="ti ti-menu-2"></i> --}}
                  </a>
                </li>
                <li class="nav-item d-none d-xl-block">
                    <a href="{{ request()->routeIs('kuisioner') ? route('homepage') : route('home') }}" class="text-nowrap nav-link">
                        <img src="{{ asset('assets/icons/Kbkuu.png') }}" class="dark-logo" width="180" alt="" />
                        <img src="{{ asset('assets/icons/Kbkuu.png') }}" class="light-logo" width="180" alt="" />
                    </a>
                </li>
              </ul>
            {{-- <ul class="navbar-nav quick-links d-none d-lg-flex">
              <li class="nav-item dropdown hover-dd d-none d-lg-block">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Apps<span class="mt-1"><i class="ti ti-chevron-down"></i></span></a>
                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                  <div class="row">
                    <div class="col-8">
                      <div class=" ps-7 pt-7">
                        <div class="border-bottom">
                          <div class="row">
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="app-chat.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Chat Application</h6>
                                    <span class="fs-2 d-block text-dark">New messages arrived</span>
                                  </div>
                                </a>
                                <a href="app-invoice.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Invoice App</h6>
                                    <span class="fs-2 d-block text-dark">Get latest invoice</span>
                                  </div>
                                </a>
                                <a href="app-contact2.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Contact Application</h6>
                                    <span class="fs-2 d-block text-dark">2 Unsaved Contacts</span>
                                  </div>
                                </a>
                                <a href="app-email.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Email App</h6>
                                    <span class="fs-2 d-block text-dark">Get new emails</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="page-user-profile.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">User Profile</h6>
                                    <span class="fs-2 d-block text-dark">learn more information</span>
                                  </div>
                                </a>
                                <a href="app-calendar.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Calendar App</h6>
                                    <span class="fs-2 d-block text-dark">Get dates</span>
                                  </div>
                                </a>
                                <a href="app-contact.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Contact List Table</h6>
                                    <span class="fs-2 d-block text-dark">Add new contact</span>
                                  </div>
                                </a>
                                <a href="app-notes.html" class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-1 fw-semibold bg-hover-primary">Notes Application</h6>
                                    <span class="fs-2 d-block text-dark">To-do and Daily tasks</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center py-3">
                          <div class="col-8">
                            <a class="fw-semibold text-dark d-flex align-items-center lh-1 text-decoration-none" href="#"><i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-end pe-4">
                              <button class="btn btn-primary">Check</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 ms-n4">
                      <div class="position-relative p-7 border-start h-100">
                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                        <ul class="">
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="page-pricing.html">Pricing Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="authentication-login.html">Authentication Design</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="authentication-register.html">Register Now</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="authentication-error.html">404 Error Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="app-notes.html">Notes App</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="page-user-profile.html">User Application</a>
                          </li>
                          <li class="mb-3">
                            <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none" href="page-account-settings.html">Account Settings</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-chat.html">Chat</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-calendar.html">Calendar</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-email.html">Email</a>
              </li>
            </ul> --}}
            <div class="d-block d-lg-none">
              <img src="{{ asset('assets/icons/Kbkuu.png') }}" class="dark-logo" width="180" alt="" />
              <img src="{{ asset('assets/icons/Kbkuu.png') }}" class="light-logo"  width="180" alt="" />
            </div>
            <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="p-2">
                  <i class="ti ti-align-justified fs-7"></i>
                </span>
            </button>
            <div class="navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">
                  <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                    <i class="ti ti-dashboard fs-10"></i>
                  <div class="col-md-5">
                  </div>
                </a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                    @unless(request()->routeIs('kuisioner'))
                    <li class="nav-item px-2 py-2">
                        <button
                            type="button"
                            onclick="window.location='{{ route('home') }}';"
                            class="btn mb-1 waves-effect waves-light btn-outline-success {{ request()->routeIs('home') ? 'active' : '' }}">
                            Home
                        </button>
                    </li>
                    <li class="nav-item">
                        <button
                            type="button"
                            onclick="window.location='{{ route('dashboard') }}';"
                            class="btn me-3 mb-1 waves-effect waves-light btn-outline-secondary {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            Dashboard
                        </button>
                    </li>
                @endunless
                </ul>
              </div>
            </div>
          </nav>
        </header>
