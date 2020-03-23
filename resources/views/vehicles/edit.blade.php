@extends('layouts.template')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-md-4">
      <img src="{{asset('images/homepage-1/about.jpg')}}" class="img-responsive" alt="Rent a car">
    </div>
    <div class="col-md-8">
      <h2 class="text-center">Update Vehicle Info </h2>
      {!! Form::model($vehicle,['method'=>'PATCH', 'action'=>['VehicleController@update',$vehicle->id], 'files'=>true]) !!}
      <div class="form-group">
        {!! Form::label('license_plate_no', 'License Plate No.:') !!}
        {!! Form::text('license_plate_no', $vehicle->license_plate_no, ['class' => 'form-control','placeholder'=>'License Plate No.']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('name', 'Vehicle Name:') !!}
        {!! Form::text('name', $vehicle->name, ['class' => 'form-control','placeholder'=>'Car Brand/Name.']) !!}
      </div>
      <div class="form-group">
      {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', $vehicle->type, ['class' => 'form-control','placeholder'=>'Vehicle Category']) !!}
      </div>
      <div class="form-group">
      {!! Form::label('no_of_seats', 'No. of Seats:') !!}
        {!! Form::text('no_of_seats', $vehicle->no_of_seats, ['class' => 'form-control','placeholder'=>'No. of seats in vehicle']) !!}
      </div>
      <div class="form-group">
      {!! Form::label('vehicle_conditions', 'Vehicle Condition:') !!}
        {{ Form::select('vehicle_conditions', ['not stated'=>'Select vehicle condition','good' => 'Good', 'medium' => 'Medium','bad'=>'Bad'], $vehicle->vehicle_conditions, ['class'=>'form-control']) }}
      </div>
      <div class="form-group">
      {!! Form::label('ac_status', 'AC Status:') !!}
        {{ Form::select('ac_status', ['n/a'=>'AC Status',true => 'Available', false => 'Not available'], $vehicle->ac_status, ['class'=>'form-control']) }}
      </div>
      <div class="form-group">
      {!! Form::label('owner_name', 'Owner Name:') !!}
        {!! Form::text('owner_name', $vehicle->owner_name, ['class' => 'form-control','placeholder'=>'Vehicle owner name']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
      {!! Form::label('hiring_cost', 'Hiring Cost: Rs.') !!}
        {!! Form::text('hiring_cost', $vehicle->hiring_cost, ['class' => 'form-control','placeholder'=>'Hiring Cost']) !!}
      </div>
      <div class="form-group">
      {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', $vehicle->description, ['class' => 'form-control','placeholder'=>'Description','rows'=>4]) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Edit', ['class'=>'btn-warning btn-lg float-right']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection