@extends('layouts.app')
@section('content')

<h1>EDIT POST</h1>
{!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data','class'=>'col-md-10']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control border-dark','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control border-dark','placeholder'=>'body here'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
   
@endsection

