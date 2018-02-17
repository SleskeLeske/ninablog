@extends('layouts.default')
@section('title')
  Digg På Døren
@endsection
@section('content')
<div class="container">
  <h1 class="text-center register-title">DIGG PÅ DØREN</h1>

    <div class="user-container col-sm-8 col-sm-offset-2">
      <div class="text-center user-title">
        <h1>{{$user->firstName}} {{$user->lastName}}</h1>
      </div>
      <div class="user-info">
        
      </div>
    </div>

</div>
@endsection
