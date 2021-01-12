<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>@yield('title')</title>
</head>
<body>
 @include('inc.navbar')
{{-- @include('inc.background') --}}
    <div class="container mt-md-2">
 {{-- @include('inc.messages') --}}

   @yield('content')
    </div>


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>