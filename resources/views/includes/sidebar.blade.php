<div class="scrollbar-sidebar">
  <div class="app-sidebar__inner">
    <ul class="vertical-nav-menu">
      <li class="app-sidebar__heading">Menu: <u>Dai Car Rental</u></li>
      <li class="mm-active">
        <a href="#">
          Vehicles
          <i class="fa fa-car"></i>
        </a>
        <ul>
          <li>
            <a href="{{ url('/vehicle')}}">Vehicles Inventory</a>
          </li>
          <li>
            <a href="{{ url('/vehicle/all')}}">All Vechicles</a>
          </li>
          @if(Auth::user() && Auth::user()->user_type == 'admin')
          <li>
            <a href="{{ url('/vehicle/create')}}">Add Vehicles</a>
          </li>
          @endif
        </ul>
      </li>
      <li class="mm-active">
        <a href="#">
          Bookings
          <i class="fa fa-book"></i>
        </a>
        <ul>
          <li class="mm-active">
            <a href="{{ url('/booking/create')}}">New Booking</a>
          </li>
          <li class="mm-active">
            <a href="{{ url('/booking')}}">Booking record</a>
          </li>
        </ul>
      </li>
      <li class="mm-active">
        <a href="#">
          Feedback
          <i class="fa fa-envelope-open"></i>
        </a>
        <ul>
          @if(Auth::user() && Auth::user()->user_type == 'customer')
          <li class="mm-active">
            <a href="{{ url('/feedback/create')}}">Write Feedback</a>
          </li>
          @endif
          <li class="mm-active">
            <a href="{{ url('/feedback')}}">Read Feedback</a>
          </li>
        </ul>
      </li>
      <li class="mm-active">
        <a href="{{ url('/faq') }}" class="text-custom-white">
          FAQ
          <i class="fa fa-question-circle"></i>
        </a>
      </li>
      <li class="mm-active">
        <a href="{{ url('/about') }}" class="text-custom-white">
          About Us
          <i class="fa fa-user-circle"></i>
        </a>
      </li>
      <li class="mm-active">
        <a href="{{ url('/contact') }}" class="text-custom-white">
          Contact
          <i class="fa fa-phone-square"></i>
        </a>
      </li>
    </ul>
  </div>
</div>