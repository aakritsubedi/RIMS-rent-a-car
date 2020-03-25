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
      <table class="table-hover">
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
      <table class="table-hover">
        @foreach($booked as $hire)
        <tr>
          <td>
            <b>Vehicle Info:</b>
            <ul style="list-style: none;">
              <li>License No.: {{$hire->vehicle->license_plate_no}}</li>
              <li>Hiring Cost: Rs. {{number_format($hire->vehicle->hiring_cost,2)}}</li>
              <li>No. of seat: {{$hire->vehicle->no_of_seats}}</li>
              <li>AC Status:
                @if($hire->vehicle->ac_status == 1)
                <span class="text-success">Available</span>
                @else
                <span class="text-danger">Not Available</span>
                @endif
              </li>
            </ul>
          </td>
          <td>
            <b>Driver's Info: </b>
            <ul style='list-style:none;'>
              <li>Name: {{$hire->drive_name}}</li>
              <li>License No.: {{$hire->driver_license_no}}</li>
              <li>Contact No.: {{$hire->drive_contact_no}}</li>
            </ul>
          </td>
          <td>
            <b>Payment Status: </b> {{$hire->payment_status}}
          </td>
          <td>
            <b>Travel Date: </b> {{Carbon\Carbon::parse($hire->travel_date)->toFormattedDateString()}}
          </td>
        </tr>
        @endforeach
      </table>
      @endif
    </div>
  </div>
  <div class="row">

    <div class="col-md-10 offset-1">

    </div>
  </div>
</div>
@endsection