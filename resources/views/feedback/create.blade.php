@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-md-8 offset-2">
      <div class="section-header">
        <div class="section-heading">
          <h3 class="text-custom-black fw-700">Send your <span class="text-custom-red">Feedback</span></h3>
          <div class="heading-after">
            <div class="line bg-custom-red"></div>
            <div class="circle"></div>
            <div class="line bg-custom-red"></div>
          </div>
          <p class="text-light-white">we are here to help and answer any question you might have. We look forward to hearing from you.</p>
        </div>
      </div>
      {!! Form::open(['method'=>'POST', 'action'=>['FeedbackController@store'], 'files'=>true]) !!}
      <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', Auth::user()->name, ['class' => 'form-control','readOnly'=>true]) !!}
      </div>
      <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', Auth::user()->email, ['class' => 'form-control','readOnly'=>true]) !!}
      </div>
      <div class="form-group">
        {!! Form::label('subject', 'Subject:') !!}
        {!! Form::text('subject', null, ['class' => 'form-control','placeholder'=>'Subject: Please write subject']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('Complain', 'Feedback:') !!}
        {!! Form::textarea('complain', null, ['class' => 'form-control','placeholder'=>'Complain: Please send your feedback.','rows'=>6]) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Send', ['class'=>'btn-success btn-lg float-right']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection