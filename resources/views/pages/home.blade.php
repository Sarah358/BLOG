 @extends('layouts.app')
 @section('title', $title)

 {{-- content section --}}
 @section('content')
 

 {{-- about section --}}
 @section('About')
 BLOG
 @endsection

 {{-- class container-fluid --}}



 <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://technext.github.io/food-funday/images/banner.jpg');
       background-size: cover;
       height: 100vh;
      
       background-attachment:fixed;
      background-repeat:no-repeat;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);
    width:500px;
    height:300px
    margin-top:200px;
    margin-left:150px
    ">
      <div class="d-flex justify-content-center align-items-center h-200">
        <div class="text-white p-4">
          <h1 class="mb-3 text-danger font-weight-italic">FOODY</h1>
          <h4 class="mb-3">experience delicacies</h4>
          <a class="btn btn-success btn-lg" href="/about" role="button"
            >Read More</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
  {{-- cards container-fluid --}}
  <div class="container-fluid p-1 bg-dark ">
    {{-- heading row --}}
    <div class="row">
      <div class="col-md-6  offset-md-4 mb-1">
      <h1 style="color: #e75b1e;
    font-weight: bold;">RECENT RECIPES<h1>
      </div>
    </div>
    {{-- cards row --}}
    <div class="row">
      {{--  col card1 --}}
      <div class=" col-md-3 ">
        <div class="card" style="width: 18rem; border-color: white;background-color: white">
          <a href="#">
      <img class="card-img-top" src="https://pinchofyum.com/wp-content/uploads/Cauliflower-Fried-Rice-1-2-400x400.jpg" alt="Card image cap">      
      <div class="card-body">
        <h5 class="card-title text-dark font-weight-bold">CAULIFLOWER FRIED RICE</h5>
      </a>
      <a href="#" class="btn btn-danger ml-5">View Recipe</a>
      </div>
      </div>
     </div>
     {{-- end of col card1 --}}
     {{-- col card2 --}}
     <div class=" offset-md-1 col-md-3 ">
      <div class="card" style="width: 18rem; border-color: white;background-color: white">
        <a href="#">
        <img class="card-img-top" style="height: 290px" src="http://androthemes.com/themes/angular/cookiteer/assets/img/ig/5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-bold">SPINACH IN SPAGHETTI</h5>
    </a>
    <a href="#" class="btn btn-danger ml-5">View Recipe</a>
    </div>
    </div>
   </div>
   {{-- end col card2 --}}
     {{--  col card3 --}}
     <div class=" offset-md-1 col-md-3 ">
      <div class="card" style="width: 18rem; border-color: white;background-color: white">
    <a href="#">
        <img class="card-img-top" src="https://pinchofyum.com/wp-content/uploads/5-Minute-Chickpea-Salad-1-400x400.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-dark font-weight-bold">SPICY CHICKEN SALAD</h5>
    </a>
    <a href="#" class="btn btn-danger ml-5">View Recipe</a>
    </div>
    </div>
   </div>
   {{-- end of col card3 --}}
    </div>
  </div>
  {{-- end cards container-fluid --}}
  
  {{-- div container --}}
  <div class="container-fluid bg-white p-1">
    <div class="row mt-4">
      {{-- col1 --}}
      <div class=" offset-md-1 col-md-5 ">
        <img   style="width:500px; height: 350px; border-radius:8px"
        src="http://androthemes.com/themes/angular/cookiteer/assets/img/blog/1.jpg" alt="pancakes recipe">
      </div>
      {{-- end col 1 --}}
      {{-- col2 --}}
      <div class=" offset-md-1 col-md-4">
        <h3 class="font-weight-bold">RECENT POSTS</h3>
        {{-- container small  --}}
        <div class="container-fluid p-1">
          {{-- row --}}
          <div class="row">
            {{-- col1 --}}
            <div class="col-md-6">
              <a href="#" class="post">
                {{-- div card --}}
             <div class="card-img-top">
             <img class="posts"src="http://androthemes.com/themes/angular/cookiteer/assets/img/blog/10.jpg" alt="pic">
             {{--end div card  --}}
            </div>
             {{-- end col1 --}}
            </div>
            {{-- col2 --}}
            <div class="col-md-6">
            <h5 class="font-weight-bold text-dark">Grilled Lamb Coated With Butter</h5>
            </a>
            {{-- footer --}}
            <div class="row">
              <footer class="text-muted ml-2">february 22,2021</footer>
            </div>
            {{-- end footer --}}
          
              {{-- end col2 --}}
            </div>
            {{-- end row --}}
          </div>

           {{-- row --}}
           <div class="row mt-2">
            {{-- col1 --}}
            <div class="col-md-6">
              <a href="#" class="post">
                {{-- div card --}}
             <div class="card-img-top">
             <img class="posts"src="http://androthemes.com/themes/angular/cookiteer/assets/img/blog/7.jpg" alt="pic">
             {{--end div card  --}}
            </div>
             {{-- end col1 --}}
            </div>
            {{-- col2 --}}
            <div class="col-md-6">
            <h5 class="font-weight-bold text-dark">Fluffy Pancakes Dressed With raspberries</h5>
            </a>
            {{-- footer --}}
            <div class="row">
              <footer class="text-muted ml-2">february 23,2021</footer>
            </div>
            {{-- end footer --}}
          
              {{-- end col2 --}}
            </div>
            {{-- end row --}}
          </div>

              {{-- row --}}
              <div class="row mt-2">
                {{-- col1 --}}
                <div class="col-md-6">
                  <a href="#" class="post">
                    {{-- div card --}}
                 <div class="card-img-top">
                 <img class="posts"src="http://androthemes.com/themes/angular/cookiteer/assets/img/ig/1.jpg" alt="pic">
                 {{--end div card  --}}
                </div>
                 {{-- end col1 --}}
                </div>
                {{-- col2 --}}
                <div class="col-md-6">
                <h5 class="font-weight-bold text-dark">Milkshake Topped With Strawberries</h5>
                </a>
                {{-- footer --}}
                <div class="row">
                  <footer class="text-muted ml-2">february 22,2021</footer>
                </div>
                {{-- end footer --}}
              
                  {{-- end col2 --}}
                </div>
                {{-- end row --}}
              </div>

          {{-- end small container --}}
        </div>

      </div>
      {{-- end col2 --}}
    </div>
  </div>

    @endsection

