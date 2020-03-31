<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Dai Car Rental</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <link href="{{ asset('css/main.87c0748b313a1dda75f5.css') }}" rel="stylesheet">
  <link href="{{ asset('css/stickyKey.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
      <div class="app-header__logo">
        Dai Car Rental Service
        <div class="header__pane ml-auto">
          <div>
            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class="app-header__mobile-menu">
        <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="app-header__menu">
        <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
              <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
          </button>
        </span>
      </div>
      <div class="app-header__content">
        @include('includes/topNav')
        @include('includes/topNav-right')
      </div>
    </div>
    <div class="app-main">
      <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
            <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        @include('includes/sidebar')
      </div>
      <div class="app-main__outer">
        <div class="app-main__inner">
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="pe-7s-car icon-gradient bg-mean-fruit">
                  </i>
                </div>
                <div>Analytics Dashboard
                  <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                  </div>
                </div>
              </div>
              <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                  <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link">
                          <i class="nav-link-icon lnr-inbox"></i>
                          <span>
                            Inbox
                          </span>
                          <div class="ml-auto badge badge-pill badge-secondary">86</div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link">
                          <i class="nav-link-icon lnr-book"></i>
                          <span>
                            Book
                          </span>
                          <div class="ml-auto badge badge-pill badge-danger">5</div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link">
                          <i class="nav-link-icon lnr-picture"></i>
                          <span>
                            Picture
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a disabled class="nav-link disabled">
                          <i class="nav-link-icon lnr-file-empty"></i>
                          <span>
                            File Disabled
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  <div class="app-drawer-overlay d-none animated fadeIn"></div>
  <script type="text/javascript" src="{{ asset('scripts/main.87c0748b313a1dda75f5.js') }}"></script>
</body>

</html>