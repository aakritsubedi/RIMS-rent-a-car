<section class="section-padding recent-listing bg-light-white">
  <div class="container">
    <div class="section-header">
      <div class="section-heading">
        <h3 class="text-custom-black fw-700">Recently Listed <span class="text-custom-red">Vehicles</span></h3>
        <div class="heading-after">
          <div class="line bg-custom-red"></div>
          <div class="circle"></div>
          <div class="line bg-custom-red"></div>
        </div>
        <p class="text-light-white">Recently Added Vehicles List</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="swiper-container recent-listing-slider">
          <div class="swiper-wrapper">
            @foreach($vehicles as $vehicle)
            <div class="swiper-slide">
              <div class="car-grid-box">
                <div class="car-grid-wrapper padding-20">
                  <div class="car-heading-wrapper">
                    <h5><a href="inventory-detail.html" class="text-custom-black fw-600">{{$vehicle->name}}</a></h5>
                    <h6 class="text-custom-red">Rs. {{ number_format($vehicle->hiring_cost,2)}}</h6>
                    <div class="car-type-tag">
                      <a href="inventory-detail.html" class="bg-custom-black type-tag">{{$vehicle->type}}</a>
                    </div>
                  </div>
                  <div class="car-img">
                    <a href="inventory-detail.html">
                      <img src="{{asset('img/')}}/{{$vehicle->photo->name}}" class="img-fluid full-width" alt="#" style="height: 175px;">
                    </a>
                  </div>
                  <div class="car-desc">
                    <ul>
                      <li class="text-light-white fs-14"><i class="fas fa-car text-custom-red"></i> {{$vehicle->type}}</li>
                      <li class="text-light-white fs-14"><i class="fas fa fa-cogs text-custom-red"></i> Automatic</li>
                      <li class="text-light-white fs-14"><i class="fas fa-tachometer-alt text-custom-red"></i>
                        @if($vehicle->status == 1)
                        <span class="text-success">Available</span>
                        @elseif($vehicle->status == 2)
                        <span class="text-warning">On Hire</span>
                        @else
                        <span class="text-danger">Not Available</span>
                        @endif
                      </li>
                    </ul>
                  </div>
                  <div class="car-btns">
                    <a href="{{route('vehicle.show',$vehicle->id)}}" class="compare-btn">Info</a>
                    <a href="{{route('booking.create')}}" class="detail-btn">Book</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>