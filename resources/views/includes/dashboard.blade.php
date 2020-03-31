<div class="tabs-animation">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-xl-4">
      <div class="card mb-3 widget-chart">
        <div class="widget-chart-content">
          <div class="icon-wrapper rounded">
            <div class="icon-wrapper-bg bg-warning"></div>
            <i class="fa fa-car"></i>
          </div>
          <div class="widget-numbers">
            <span>{{ $vehicleCount }}</span>
          </div>
          <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">Total Vehicles</div>
          <div class="widget-description opacity-8">
            all our inventory
          </div>
        </div>
        <div class="widget-chart-wrapper">
          <div id="dashboard-sparklines-simple-1"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-xl-4">
      <div class="card mb-3 widget-chart">
        <div class="widget-chart-content">
          <div class="icon-wrapper rounded">
            <div class="icon-wrapper-bg bg-danger"></div>
            <i class="fa fa-users"></i>
          </div>
          <div class="widget-numbers">
            <span>{{ $userCount }}</span>
          </div>
          <div class="widget-subheading fsize-1 pt-2 opacity-10 text-danger font-weight-bold">
            Registered User
          </div>
          <div class="widget-description opacity-8">
            our customer
          </div>
        </div>
        <div class="widget-chart-wrapper">
          <div id="dashboard-sparklines-simple-2"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-xl-4">
      <div class="card mb-3 widget-chart">
        <div class="widget-chart-content">
          <div class="icon-wrapper rounded">
            <div class="icon-wrapper-bg bg-info"></div>
            <i class="fa fa-book"></i>
          </div>
          <div class="widget-numbers text-danger">
            <span>{{ $bookingCount }}</span>
          </div>
          <div class="widget-subheading fsize-1 pt-2 opacity-10 text-info font-weight-bold">Total Bookings</div>
          <div class="widget-description opacity-8">
            Our bookings
          </div>
        </div>
        <div class="widget-chart-wrapper">
          <div id="dashboard-sparklines-simple-3"></div>
        </div>
      </div>
    </div>
  </div>
</div>