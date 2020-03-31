<div class="app-header-right">
  <div class="header-btn-lg pr-0">
    <div class="widget-content p-0">
      <div class="widget-content-wrapper">
        <div class="widget-content-left  ml-3 header-user-info">
          <div class="widget-heading">
            <a href="{{ url('/profile') }}">
              {{ Auth::user()->name}}
            </a>
          </div>
          <div class="widget-subheading">
            {{ strtoupper(Auth::user()->user_type) }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-btn-lg">
    <a href="{{url('/logout') }}" class="mm-active">
      Logout
    </a>
  </div>
</div>