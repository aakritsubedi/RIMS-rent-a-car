@extends('layouts.template')

@section('content')
<div class="row">
  <div class="col-md-10 offset-1 mt-3">
    <h2 class="text-center">Available Vehicles</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Type</th>
          <th>No. of Seats</th>
          <th>Vehicle Condition</th>
          <th>AC Status</th>
          <th>Owner Name</th>
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
          <td title="{{$vehicle->no_of_seats}} Seater">{{$vehicle->no_of_seats}}</td>
          <td>{{ucfirst($vehicle->vehicle_conditions)}}</td>
          <td>
            @if($vehicle->ac_status == 1)
            <span class="text-success">Available</span>
            @else
            <span class="text-danger">Not Available</span>
            @endif
          </td>
          <td>{{$vehicle->owner_name}}</td>
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
            <a href='{{route('vehicle.show',$vehicle->id)}}'class="btn btn-success btn-sm">Info</a>
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

<!-- 'name','license_plate_no','no_of_seats','vehicle_conditions','ac_status','owner_name','photo_id','hiring_cost','description','status' -->