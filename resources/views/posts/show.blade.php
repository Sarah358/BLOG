@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-secondary">GO BACK</a>
<h1>{{$post->title}}</h1>
<div >
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-left mt-md-2'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
    
@endsection
