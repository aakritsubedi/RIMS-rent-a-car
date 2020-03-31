@extends('layouts.template')

@section('content')
<div class="container">
  <div class="section-header mt-3">
    <div class="section-heading">
      <h3 class="text-custom-black fw-700">Your <span class="text-custom-red">Information</span></h3>
      <div class="heading-after">
        <div class="line bg-custom-red"></div>
        <div class="circle"></div>
        <div class="line bg-custom-red"></div>
      </div>
      <p class="text-light-white">All about you {{$name}}.</p>
      <hr>
      <h4>Personal Info: </h4>
      <ul style="list-style: none;">
        <li><b>Name: </b> {{$name}}</li>
        <li><b>Email: </b> {{Auth::user()->email}}</li>
        <li><b>Balance: </b> Rs.{{number_format(Auth::user()->balance,2)}}</li>
      </ul>
      <br>
      <h4>Vehicle Owned: </h4>
      @if(count($owned) == 0)
      <span>No vehicle owned.</span><br>
      <a href="{{ url('/vehicle/create') }}" class='btn btn-success'>Add Your Car</a>
      @else
      <table class="table table-hover">
        @foreach($owned as $vehicle)
        <tr>
          <td>{{$vehicle->id}}</td>
          <td>{{$vehicle->name}}</td>
          <td>{{$vehicle->type}}</td>
          <td title="{{$vehicle->no_of_seats}} Seater">{{$vehicle->no_of_seats}}</td>
          <td>{{ucfirst($vehicle->vehicle_conditions)}}</td>
          <td>
            <b>AC: </b>
            @if($vehicle->ac_status == 1)
            <span class="text-success">Available</span>
            @else
            <span class="text-danger">Not Available</span>
            @endif
          </td>
          <td>Rs. {{number_format($vehicle->hiring_cost,2)}}</td>
          <td>
            <b>Status: </b>
            @if($vehicle->status == 1)
            <span class="text-success">Available</span>
            @elseif($vehicle->status == 2)
            <span class="text-warning">On Hire</span>
            @else
            <span class="text-danger">Not Available</span>
            @endif
          </td>
        </tr>
        @endforeach
      </table>
      @endif
      <br>
      <h4>Hiring History: </h4>
      @if(count($booked) == 0)
      <span>-No vehicle hired-</span><br>
      <a href="{{ url('/booking/create') }}" class='btn btn-success'>Book Now</a>
      @else
      <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
        @foreach($booked as $hire)
        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
          <div>
            <span class="vertical-timeline-element-icon bounce-in"></span>
            <div class="vertical-timeline-element-content bounce-in">
              <h4 class="timeline-title">
                {{$hire->vehicle->name}}
                <small>({{ $hire->vehicle->license_plate_no}})</small>
                <br>
                <b>Driver Info: </b>
                <ul style="list-style: none;">
                  <li><b>Name: </b> {{$hire->drive_name}}</li>
                  <li><b>Contact No.: </b> {{$hire->drive_contact_no}}</li>
                  <li><b>License No.: </b> {{$hire->driver_license_no}}</li>
                </ul>
                <b>Payment Status: </b> {{ $hire->payment_status}}<br>
                <b>Travel Date: </b> {{Carbon\Carbon::parse($hire->travel_date)->toFormattedDateString()}}
              </h4>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
  <div class="row">

    <div class="col-md-10 offset-1">

    </div>
  </div>
</div>
@endsection