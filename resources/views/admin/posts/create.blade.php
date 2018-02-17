@extends('admin.layout.admin')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">


  {!! Form::open(['route' => 'post.store', 'method' => 'post', 'files' => true]) !!}

  <div class="form-group">
    {{ Form::label('title', 'title')}}
    {{ Form::text('title', null, array('class' => 'form-control'))}}
  </div>

  <div class="form-group">
    {{ Form::label('body', 'body')}}
    {{ Form::text('body', null, array('class' => 'form-control'))}}
  </div>


  <div class="form-group">
    {{ Form::label('image', 'Image')}}
    {{ Form::file('image',array('class' => 'form-control'))}}
  </div>

  <div class="form-group">
    {{ Form::label('quote', 'quote')}}
    {{ Form::text('quote', null, array('class' => 'form-control'))}}
  </div>

  <div class="form-group">
    {{ Form::label('author', 'author')}}
    {{ Form::text('author', null, array('class' => 'form-control'))}}
  </div>

  {{ Form::submit('Create', array('class' => 'btn btn-default'))}}
  {!! Form::close() !!}
      </div>
</div>
@endsection
