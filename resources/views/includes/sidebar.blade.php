<div class="scrollbar-sidebar">
  <div class="app-sidebar__inner">
    <ul class="vertical-nav-menu">
      <li class="app-sidebar__heading">Menu: <u>Dai Car Rental</u></li>
      <li class="mm-active">
        <a href="#">
          Vehicles
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
        <a href="{{ url('/faq') }}" class="text-custom-white">FAQ</a>
      </li>
      <li class="mm-active">
        <a href="{{ url('/about') }}" class="text-custom-white">About Us</a>
      </li>
      <li class="mm-active">
        <a href="{{ url('/contact') }}" class="text-custom-white">Contact</a>
      </li>
    </ul>
  </div>
</div>