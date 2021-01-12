@extends('layouts.app')
@section('content')

<h1>POSTS</h1>
    @foreach ($posts as $post)
      <div class="well mt-md-2">
      <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
      <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
      </div>
      
    
@endforeach
@endsection

