@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-md-10 offset-1">
    <div class="section-header">
        <div class="section-heading">
          <h3 class="text-custom-black fw-700">Feedback from <span class="text-custom-red">{{$feedback->name}}</span></h3>
          <div class="heading-after">
            <div class="line bg-custom-red"></div>
            <div class="circle"></div>
            <div class="line bg-custom-red"></div>
          </div>
        </div>
      </div>
      <hr>
      <h3>Subject: {{$feedback->subject}}</h3>
      <p style="text-align: justify; text-indent: 50px;">
        {{$feedback->complain}}
      </p>
      <span>Regards,</span><br>
      <b>Name: </b> {{$feedback->name}}<br>
      <b>Email: </b> <a href="mailto:{{$feedback->email}}">{{$feedback->email}}</a>
    </div>
  </div>
</div>
@endsection