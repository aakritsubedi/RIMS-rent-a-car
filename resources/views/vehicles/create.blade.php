@extends('layouts.template')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-md-4">
      <img src="{{asset('images/homepage-1/about.jpg')}}" class="img-responsive" alt="Rent a car">
    </div>
    <div class="col-md-8">
      <div class="section-header">
        <div class="section-heading">
          <h3 class="text-custom-black fw-700">Add <span class="text-custom-red">Vehicles</span></h3>
          <div class="heading-after">
            <div class="line bg-custom-red"></div>
            <div class="circle"></div>
            <div class="line bg-custom-red"></div>
          </div>
        </div>
      </div>
      {!! Form::open(['method'=>'POST', 'action'=>['VehicleController@store'], 'files'=>true]) !!}
      <div class="form-group">
        {!! Form::text('license_plate_no', null, ['class' => 'form-control','placeholder'=>'License Plate No.']) !!}
      </div>
      <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Car Brand/Name.']) !!}
      </div>
      <div class="form-group">
        {!! Form::text('type', null, ['class' => 'form-control','placeholder'=>'Vehicle Category']) !!}
      </div>
      <div class="form-group">
        {!! Form::text('no_of_seats', null, ['class' => 'form-control','placeholder'=>'No. of seats in vehicle']) !!}
      </div>
      <div class="form-group">
        {{ Form::select('vehicle_conditions', ['not stated'=>'Select vehicle condition','good' => 'Good', 'medium' => 'Medium','bad'=>'Bad'], null, ['class'=>'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::select('ac_status', ['n/a'=>'AC Status',true => 'Available', false => 'Not available'], null, ['class'=>'form-control']) }}
      </div>
      <div class="form-group">
        {!! Form::text('owner_name', null, ['class' => 'form-control','placeholder'=>'Vehicle owner name']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::text('hiring_cost', null, ['class' => 'form-control','placeholder'=>'Hiring Cost']) !!}
      </div>
      <div class="form-group">
        {!! Form::textarea('description', null, ['class' => 'form-control','placeholder'=>'Description','rows'=>4]) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Rent', ['class'=>'btn-success btn-lg float-right']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection