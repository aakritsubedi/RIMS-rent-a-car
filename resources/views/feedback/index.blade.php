@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-md-10 offset-1">
      <h2 class="text-center">Feedbacks</h2>
      <h4 class="h4 text-center">what our customer say...</h4>
      <div id="board">
        @foreach($feedbacks as $feedback)
        <div class="note ui-draggable ui-draggable-handle clearfix">
          <span class="float-right">{{Carbon\Carbon::parse($feedback->created_at)->toFormattedDateString()}}</span>
          <br>
          <h5>{{$feedback->subject}}</h5>
          <p style="text-align: center;">
            {{substr($feedback->complain,0,300)}}
            ...<a href="{{route('feedback.show',$feedback->id)}}">readmore</a>
          </p>
          <ul style='list-style: none;'>
            <li>{{$feedback->name}}</li>
            <li>{{$feedback->email}}</li>
          </ul>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection