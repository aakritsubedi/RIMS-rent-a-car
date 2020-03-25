<header class="menu-style bg-custom-black">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="header">
          <div class="header-left">
            <div class="cat-box bg-custom-red p-relative">
              <span class="seprator"></span>
              <button class="text-custom-white full-width bg-transparent fw-600 cat-button" id="cat-box-accordion">
                <i class="flaticon-supercar"></i>
                Dai Rental
              </button>
            </div>
          </div>
          <div class="main-navigation collapse" id="navigation">
            <nav>
              <ul>
                <li class="menu-item active">
                  <a href="{{ url('/')}}" class="text-custom-white">Home</a>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="{{ url('/vehicle')}}" class="text-custom-white">Vehicles</a>
                  <ul class="sub-menu">
                    <li class="menu-item">
                      <a href="{{ url('/vehicle')}}">Vehicles Inventory</a>
                    </li>
                    @if(Auth::user()->user_type == 'admin')
                    <li class="menu-item">
                      <a href="{{ url('/vehicle/create')}}">Add Vehicles</a>
                    </li>
                    @endif
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="{{ url('/booking')}}" class="text-custom-white">Bookings</a>
                  <ul class="sub-menu">
                    <li class="menu-item">
                      <a href="{{ url('/booking/create')}}">New Booking</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{ url('/booking')}}">Booking record</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="#" class="text-custom-white">Feedback</a>
                  <ul class="sub-menu">
                    @if(Auth::user()->user_type == 'customer')
                    <li class="menu-item">
                      <a href="{{ url('/feedback/create')}}">Write Feedback</a>
                    </li>
                    @endif
                    <li class="menu-item">
                      <a href="{{ url('/feedback')}}">Read Feedback</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="contact.html" class="text-custom-white">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-right">
            <ul>
              <li class="user_login">
                @if(Auth::user())
                <a href="#" class="text-custom-white fw-700" title="{{Auth::user()->email}}"><i class="fas fa-user-circle"></i> {{Auth::user()->name}} </a>
                @else
                <a href="#"><i class="fas fa-user-circle"></i> Login</a>
                @endif
              </li>
              <li class="hamburger-menu collapsed" data-toggle="collapse" data-target="#navigation">
                <span></span>
                <span></span>
                <span></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>