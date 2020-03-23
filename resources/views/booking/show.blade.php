@extends('layouts.template')

@section('content')
<div class="row mt-3">
  <div class="col-md-10 offset-1">
    <h2 class="text-center">Booking Info</h2>
    <div class="row">
      <div class="card col-md-6 offset-3">
        <img class="card-img-top" style='height:175px;' src="{{asset('img/')}}/{{$hire->vehicle->photo->name}}" alt="Card image cap">
        <div class="card-body">
          <span class="h5 card-title">{{substr($hire->user->name,0,strpos($hire->user->name,' '))}}'s Booking</span><br>
          <b>Travel Date: </b> {{Carbon\Carbon::parse($hire->travel_date)->toFormattedDateString()}}<br />
          <b>Booked By: </b>
          <ul style='list-style:none;'>
            <li>Name: {{$hire->user->name}}</li>
            <li>Email Id: {{$hire->user->email}}</li>
          </ul>
          <b>Driver Info: </b>
          <ul style='list-style:none;'>
            <li>Name: {{$hire->drive_name}}</li>
            <li>License No.: {{$hire->driver_license_no}}</li>
            <li>Contact No.: {{$hire->drive_contact_no}}</li>
          </ul>
          <b>Car Info: </b>
          <ul style='list-style:none;'>
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
          <b>Payment Status: </b> {{$hire->payment_status}}
          <br>
          <a href="#" class="btn btn-sm btn-primary float-right">Go</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-5">
  <div class="col-md-10 offset-1 mt-3">
    <h2 class="text-center">Available Vehicles</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Type</th>
          <th>Hiring Cost</th>
          <th>Status</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>
        @foreach($vehicles as $vehicle)
        <tr>
          <td>{{$vehicle->id}}</td>
          <td>{{$vehicle->name}} (<small><b>{{$vehicle->license_plate_no}}</b></small>)</td>
          <td>{{$vehicle->type}}</td>
          <td>Rs. {{number_format($vehicle->hiring_cost,2)}}</td>
          <td>
            @if($vehicle->status == 1)
            <span class="text-success">Available</span>
            @elseif($vehicle->status == 2)
            <span class="text-warning">On Hire</span>
            @else
            <span class="text-danger">Not Available</span>
            @endif
          </td>
          @if(Auth::user()->user_type == 'customer')
          <td>
            <a href='{{route('vehicle.show',$vehicle->id)}}' class="btn btn-success btn-sm">Info</a>
            @if($vehicle->status == 1)
            <button class="btn btn-success btn-sm">Book Now</button>
            @endif
          </td>
          @else
          <td>
            <a href='{{route('vehicle.show',$vehicle->id)}}' class="btn-sm btn-link text-success">Info</a>
            <a href='{{route('vehicle.edit',$vehicle->id)}}' class="btn-sm btn-link text-warning">Edit</a>
            <a href='{{route('vehicle.destroy',$vehicle->id)}}' class="btn-sm btn-link text-danger">Delete</a>
          </td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection