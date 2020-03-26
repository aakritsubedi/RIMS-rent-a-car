@extends('layouts.template')

@section('content')
<!-- start Inventory Grid -->
<div class="section-padding inventory-grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="inventory-heading mb-xl-20 p-3">
          <h5 class="no-margin text-custom-black">Showing <b>{{count($vehicles)}}</b> Results</h5>
        </div>
        <div class="row">
          @foreach($vehicles as $vehicle)
          <div class="col-lg-4 col-md-6">
            <div class="car-grid-box mb-xl-20">
              <div class="car-grid-wrapper padding-20">
                <div class="car-heading-wrapper">
                  <h5><a href="inventory-detail.html" class="text-custom-black fw-600">{{$vehicle->name}}</a></h5>
                  <h6 class="text-custom-red">Rs. {{ number_format($vehicle->hiring_cost,2)}}</h6>
                  <div class="car-type-tag">
                    <a href="inventory-detail.html" class="bg-custom-red type-tag">{{$vehicle->type}}</a>
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
                    <li class="text-light-white fs-14">
                      <div class="ratings">
                        @if($vehicle->vehicle_conditions == 'good')
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-dark-white"><i class="fas fa-star"></i></span>
                        @elseif($vehicle->vehicle_conditions == 'medium')
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-dark-white"><i class="fas fa-star"></i></span>
                        <span class="text-dark-white"><i class="fas fa-star"></i></span>
                        @else
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-dark-white"><i class="fas fa-star"></i></span>
                        <span class="text-dark-white"><i class="fas fa-star"></i></span>
                        <span class="text-dark-white"><i class="fas fa-star"></i></span>
                        @endif
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="car-btns">
                  <a href="{{route('vehicle.show',$vehicle->id)}}" class="compare-btn">Info</a>
                  @if($vehicle->status == 1)
                  <a href="{{route('booking.create')}}" class="detail-btn">Book</a>
                  @elseif($vehicle->status == 2)
                  <a href="{{route('booking.index')}}" class="detail-btn">On Hire</a>
                  @else
                  <a href="{{route('booking.index')}}" class="detail-btn">Not Available</a>
                  @endif

                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Inventory Grid -->
@endsection