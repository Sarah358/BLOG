@extends('layouts.app')
@section('content')

<h1>CREATE POST</h1>
{!! Form::open(['action'=>'PostsController@store','method'=>'POST','class'=>'col-md-10']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control border-dark','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control border-dark','placeholder'=>'body here'])}}
        </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
   
@endsection

