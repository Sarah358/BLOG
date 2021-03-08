@extends('layouts.app')
@section('content')

<h1>POSTS</h1>
    @foreach ($posts as $post)
      <div class="well mt-md-2">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img style="width: 100% " src="/storage/cover_images/{{$post->cover_image}}">
          </div>
          <div class="col-md-8 col-sm-8">
            <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
            <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
          </div>
        </div>
    
      </div>
      
    
@endforeach
{{-- pagination --}}
{{-- {{$posts->links()}} --}}
@endsection

