@extends('admin.layout.admin')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        @foreach($art as $art)
        <div>
          <h1>{{$art->title}}</h1>
          <p>{{$art->body}}</p>
          @if($art->image)
          <img src="{{url('img', $art->image)}}">
          @endif
          @if($art->forSale == 1)
          <p>Til salgs</p>
          @else
          <p>Ikke til salgs</p>
          @endif
        </div>
        <hr>
        @endforeach
      </div>
    </div>
  </div>

@endsection
