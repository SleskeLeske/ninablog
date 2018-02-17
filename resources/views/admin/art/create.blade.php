@extends('admin.layout.admin')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">


  {!! Form::open(['route' => 'art.store', 'method' => 'post', 'files' => true]) !!}

  <div class="form-group">
    {{ Form::label('title', 'title')}}
    {{ Form::text('title', null, array('class' => 'form-control'))}}
  </div>

  <div class="form-group">
    {{ Form::label('image', 'Image')}}
    {{ Form::file('image',array('class' => 'form-control'))}}
  </div>

  <div class="form-group">
    {{ Form::label('forSale', 'For salg')}}
    {{ Form::checkbox('forSale', '1', array('class' => 'form-control'))}}
  </div>

  {{ Form::submit('Create', array('class' => 'btn btn-default'))}}
  {!! Form::close() !!}
      </div>
</div>
@endsection
