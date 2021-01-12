@extends('layouts.app')
 @section('title', $title)
 @section('content')
 <div class=" offset-md-4 col-md-3 mt-2 mr-2"  id="jumbotron">
    @section('About')
    About us
        
    @endsection

 </div>
    <blockquote class="blockquote text-center  offset-md-3 col-md-4" >
      <p class="mb-0">My name is sarah njeri njuguna and am a website developer and i love using the laravel
         framework for development.
      </p>
      <footer class="blockquote-footer">student <cite title="Source Title">jkuat</cite></footer>
    </blockquote>
    @endsection  


    <style>
       #jumbotron{
    background-image: url('https://www.google.com/imgres?imgurl=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F1591447%2Fpexels-photo-1591447.jpeg%3Fauto%3Dcompress%26cs%3Dtinysrgb%26dpr%3D1%26w%3D500&imgrefurl=https%3A%2F%2Fwww.pexels.com%2Fsearch%2Fhd%2520background%2F&tbnid=dJN9--jdT2Wv0M&vet=12ahUKEwjkrYPPwJToAhVDjxoKHa07CdEQMygBegUIARCNAg..i&docid=0YhkbdsB8sWdIM&w=500&h=625&q=background%20images&ved=2ahUKEwjkrYPPwJToAhVDjxoKHa07CdEQMygBegUIARCNAg');
}
    </style>
