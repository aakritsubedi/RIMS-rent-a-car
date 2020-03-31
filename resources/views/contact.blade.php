@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row mt-5">
    <div class="col-lg-4 col-sm-6">
      <div class="btn-first red-btn contact-info-box mb-md-40">
        <i class="h3 fa fa-map-marker"></i>
        <h6 class="text-custom-black fw-600">Kamal Marg, Kathmandu<br> Nepal 44600</h6>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="btn-first red-btn contact-info-box mb-md-40">
        <i class="h3 fa fa-phone"></i>
        <h6 class="text-custom-black fw-600"><a href="#" class="text-custom-black">(+977) 441-2929, 980-1022446</a><br> Sun-Fri 8:00am-4:00pm</h6>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="btn-first red-btn contact-info-box">
        <i class="h3 fa fa-envelope"></i>
        <h6 class="text-custom-black fw-600"><a href="#" class="text-custom-black">info@dairental.com</a><br> 24 X 7 online support</h6>
      </div>
    </div>
  </div>
</div>
<hr>
<section class="section-padding contact-form">
  <div class="container">
    <div class="section-header">
      <div class="section-heading">
        <h3 class="text-custom-black fw-700">Get In <span class="text-custom-red">Touch</span></h3>
        <div class="heading-after">
          <div class="line bg-custom-red"></div>
          <div class="circle"></div>
          <div class="line bg-custom-red"></div>
        </div>
        <p class="text-light-white">we are here to help and answer any question you might have. We look forward to hearing from you.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        {!! Form::open(['method'=>'POST', 'action'=>['FeedbackController@store'], 'files'=>true]) !!}
        <div class="row clearfix">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::text('name', Auth::user()->name, ['class' => 'form-control form-control-custom','readOnly'=>true]) !!}
            </div>
            <div class="form-group">
              {!! Form::text('email', Auth::user()->email, ['class' => 'form-control form-control-custom','readOnly'=>true]) !!}
            </div>
            <div class="form-group">
              {!! Form::text('subject', null, ['class' => 'form-control form-control-custom','placeholder'=>'Subject: Please write subject']) !!}
            </div>
            <div class="form-group">
              <input type="text" name="Phone" class="form-control form-control-custom" placeholder="Phone">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::textarea('complain', null, ['class' => 'form-control form-control-custom','placeholder'=>'Complain: Please send your feedback.','rows'=>6]) !!}
            </div>
          </div>
          <div class="col-md-12">
            {!! Form::submit('Send', ['class'=>'btn-success btn-lg float-right']) !!}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
@endsection