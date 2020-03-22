@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-1">
      <h2 class="text-center m-3">Customer Information</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
            <th>Joined at</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>rims_{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
            <td>${{number_format($user->balance,2)}}</td>
            <td>{{Carbon\Carbon::parse($user->created_at)->toFormattedDateString()}}</td>
            <td>
              @if($user->status == 1)
                <span class="text-success">Active</span>
              @else
                <span class="text-warning">In-active</span>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection