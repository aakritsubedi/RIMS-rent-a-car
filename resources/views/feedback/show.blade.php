@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-md-10 offset-1">
      <h2 class="text-center">Feedback from {{$feedback->name}}</h2>
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