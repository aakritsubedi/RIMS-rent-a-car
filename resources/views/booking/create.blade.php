@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-md-8 offset-2">
      <div class="section-header">
        <div class="section-heading">
          <h3 class="text-custom-black fw-700">Book your <span class="text-custom-red">Vehicles</span></h3>
          <div class="heading-after">
            <div class="line bg-custom-red"></div>
            <div class="circle"></div>
            <div class="line bg-custom-red"></div>
          </div>
          <p class="text-light-white">rent your dream car.</p>
        </div>
      </div>
      {!! Form::open(['method'=>'POST', 'action'=>['BookingController@store'], 'files'=>true]) !!}
      <div class="form-group">
        {!! Form::label('user_id', 'Booking for:') !!}
        {!! Form::text('user_id', Auth::user()->id, ['class' => 'form-control','hidden'=>true]) !!}
        {!! Form::text('name', Auth::user()->name, ['class' => 'form-control','readOnly'=>true]) !!}
      </div>
      <div class="form-group">
        {!! Form::label('user_id', 'Available Vehicles:') !!}
        {{ Form::select('vehicle_id', $option, null, ['class'=>'form-control']) }}
      </div>
      <div class="form-group">
        {!! Form::label('drive_name', 'Available Driver:') !!}
        {{ Form::select('drive_name', $driverOption, null, ['class'=>'form-control']) }}
        {!! Form::text('drive_contact_no', '9862364697', ['class' => 'form-control','hidden'=>true]) !!}
        {!! Form::text('driver_license_no', '965742-65357', ['class' => 'form-control','hidden'=>true]) !!}
      </div>
      <div class="form-group">
        {!! Form::label('travel_date', 'Travel Date:') !!}
        {!! Form::date('travel_date', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Book', ['class'=>'btn-success btn-lg float-right']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection