 @extends('layouts.app')
 @section('title', $title)
 @section('content')
 @section('About')
 BLOG
     
 @endsection
 {{-- <div class="row"> --}}
     <div class="col-md-12">
    <!-- Card -->
<div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20%2847%29.jpg');">

    <!-- Content -->
    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
        <div>
            <h5 class="pink-text"><i class="fas fa-chart-pie"></i> BLOG</h5>
            <h3 class="card-title pt-2"><strong>About this blog page</strong></h3>
            <p>This is a blog site where users can log in or register and write,update and delete posts.
                The framework used for the site is laravel. The languages used are Html, css and js. i have 
                also used bootstrap framework.

            </p>
            {{-- <a class="btn btn-secondary"><i class="far fa-clone left"></i> View project</a> --}}
        </div>
    </div>
    <!-- Content -->
</div>
<!-- Card -->
 </div>
{{-- </div> --}}
    @endsection

