@extends('layouts.template')

@section('content')
<div class="row mt-3">
  <div class="col-md-8 offset-2">
    <div class="section-header">
      <div class="section-heading">
        <h3 class="text-custom-black fw-700">{{$vehicle->name}} <span class="text-custom-red">Information</span></h3>
        <div class="heading-after">
          <div class="line bg-custom-red"></div>
          <div class="circle"></div>
          <div class="line bg-custom-red"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <p>{{$vehicle->description}}</p>
      </div>
      <div class="col-md-6 offset-1">
        <img src="{{asset('img/')}}/{{$vehicle->photo->name}}" alt="{{$vehicle->title}}'s Photo" class="img-thumbnail">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <h3>Info</h3>
        <table class="table">
          <tr>
            <td>Name: {{$vehicle->name}}</td>
          </tr>
          <tr>
            <td>License Plate No.: {{$vehicle->license_plate_no}}</td>
          </tr>
          <tr>
            <td>Type: {{$vehicle->type}}</td>
          </tr>
          <tr>
            <td>No. of seats: {{$vehicle->no_of_seats}}</td>
          </tr>
          <tr>
            <td>Condition: {{ucfirst($vehicle->vehicle_conditions)}}</td>
          </tr>
          <tr>
            <td>AC Status:
              @if($vehicle->ac_status == 1)
              <span class="text-success">Available</span>
              @else
              <span class="text-danger">Not Available</span>
              @endif
            </td>
          </tr>
          <tr>
            <td>Owner Name: {{$vehicle->owner_name}}</td>
          </tr>
          <tr>
            <td>Status
              @if($vehicle->status == 1)
              <span class="text-success">Available</span>
              @elseif($vehicle->status == 2)
              <span class="text-warning">On Hire</span>
              @else
              <span class="text-danger">Not Available</span>
              @endif
            </td>
          </tr>
          <tr>
            <td>Hiring Cost: Rs.{{number_format($vehicle->hiring_cost,2)}}</td>
          </tr>
          <tr>
            <td class="text-right">
              @if($vehicle->status == 1)
              <a href="{{route('booking.create')}}" class="btn btn-success btn-sm">Book</a>
              @endif
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection