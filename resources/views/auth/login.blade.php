@extends('layouts.default')
@section('title')
  Digg På Døren
@endsection
@section('content')
<div class="container">
  <h1 class="text-center register-title">Admin login</h1>


  <div class="register-container">
    <h1 class="signup-title text-center">LOGG INN</h1>
    <form class="signup" action="/login" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="password">
      </div>

      <div class="text-center form-group">
        <button type="submit" class="standard-button">
          SUBMIT
          </button>
      </div>

        @include('includes.errors')

    </form>

  </div>

</div>
@endsection
