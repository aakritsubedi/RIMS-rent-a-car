@extends('layouts.template')

@section('content')
<!-- start Inventory Grid -->
<h2>All Vehicles</h2>
@foreach($vehicles as $vehicle)
<div class="card-hover-shadow-2x mb-3 card">
  <div class="card-header">
    <i class="fa fa-car"></i> &nbsp;
    {{ $vehicle->name }}
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <img src="{{asset('img/')}}/{{$vehicle->photo->name}}" alt="Car" class="img-thumbnail">
      </div>
      <div class="col-md-8">
        <p style="text-indent: 25px;">
          {{ $vehicle->description }}
        </p>
        <hr>
        <ul class="inline-list">
          <li><i class="fa fa-car"></i> {{$vehicle->type}}</li>
          <li><i class="fa fa fa-cogs"></i> Automatic</li>
          <li><i class="fa fa-tachometer"></i>
            @if($vehicle->status == 1)
            <span class="text-success">Available</span>
            @elseif($vehicle->status == 2)
            <span class="text-warning">On Hire</span>
            @else
            <span class="text-danger">Not Available</span>
            @endif
          </li>
        </ul>
        <div class="text-right">
          <i class="fa fa-money"></i>
          &nbsp;Rs. {{ number_format($vehicle->hiring_cost,2)}}
        </div>
        <hr>
        <div>
          <ul class="inline-list">
            <li><i class="fa fa-car"></i> {{$vehicle->license_plate_no}}</li>
            <li><i class="fa fa fa-road"></i> {{ $vehicle->no_of_seats}} seater</li>
            <li>
              <b>AC Status </b>
              @if($vehicle->ac_status == 1)
              <span class="text-success">Available</span>
              @else
              <span class="text-danger">Not Available</span>
              @endif
            </li>
            <li class="text-right">
              <i class="fa fa-users"></i>
              {{ $vehicle->owner_name }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="d-block text-right card-footer">
    <a href="{{route('vehicle.show',$vehicle->id)}}" class="btn btn-success">Info</a>
    <a href="{{route('booking.create')}}" class="btn btn-primary">Book</a>
  </div>
</div>
@endforeach

<!-- end Inventory Grid -->
@endsection