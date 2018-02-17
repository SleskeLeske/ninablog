@extends('admin.layout.admin')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        @foreach($posts as $post)
        <div>
          <h1>{{$post->title}}</h1>
          <p>{{$post->body}}</p>
          @if($post->image)
          <img src="{{url('img', $post->image)}}">
          @endif
        </div>
        <hr>
        @endforeach
      </div>
    </div>
  </div>

@endsection
