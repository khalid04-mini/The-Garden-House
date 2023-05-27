@extends('layouts.app')

@section('title')
    The Garden House
@endsection

@section('style')
<link rel="stylesheet" href="/styles/style.css">

@endsection


@section('content')
<div class="home">
    <div class="slider" id="main-slider"><!-- outermost container element -->
      <div class="slider-wrapper"><!-- innermost wrapper element -->
        <img src="images/img1.jpeg" alt="First" class="slide" /><!-- slides -->
        <img src="images/img2.jpeg" alt="Second" class="slide" />
        <img src="images/img3.jpeg" alt="Third" class="slide" />
      </div>
    </div>	

</div>

<!-- start welcome div -->
<section class="welc-img">
<div class="welcome">
<div class="welcome-img">
<div class="welcome-content">
  <h1>We Produce Beauty<br>
    Inspired by Flora </h1>  
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Voluptas, distinctio officia quidem mollitia ducimus quibusdam aspernatur voluptate nemo nulla
      voluptates nesciunt fugit dolores laborum praesentium vero, dolor placeat suscipit officiis!</p>
    <h6>Khalid Lamhal, Owner of The Garden House</h6>
</div>
</div>
<div class="image">
<img src="images/main-home-img-1.jpg" alt="">
</div>
</div>

</section>

<!-- end welcome div -->

<!--start flowers plants gallery cards  -->

<div class="discover">
<div class="container">
<div class="row cards">
<div class="col-md-4 my-card">
  <div class="inside-card" id="flower">
    <a href="">
      <img src="images/main-home-img-4.jpg" alt="">
    <div class="cardi">
      <div>
        <h5>Perfect gifts</h5>
        <h6>On sale</h6>
      </div>
    </div>
    </a>
  </div>
</div>
<div class="col-md-4 my-card">
  <div class="inside-card" id="pot" >
   <a href="">
    <img src="images/dmain-home-img-5.jpg" alt="">
    <div class="cardi">
      <div>
        <h5>House Plants</h5>
        <h6>20% discount</h6>
      </div>
    </div>
   </a>
  </div>
</div>
<div class="col-md-4 my-card" >
  <div class="inside-card" id="delivery">
    <a href="">
      <img src="images/main-home-img-6.jpg" alt="">
      <div class="cardi">
        <div>
          <h5>Flower Decoration</h5>
          <h6>free delivery</h6>
        </div>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</div>

<!--end  flowers plants gallery cards -->
<!-- start our store and image -->
<div class="ourstore">
<div class="container">
<div class="row">
  <div class="col-md-6 image">
    <div class="cont">
      
  </div>
</div>
  <div class="col-md-6 store">
    <div class="cont container">
      <h1>Our Store</h1>
      <div class="row">
        <div class="col-md-6 address">
          <p>
          Goddard Hall 80
          Washington Square E,<br>
          New York, NY 10003, USA
          </p>
        </div>
        <div class="col-md-6 time">
          <p>+44 (0) 207 739 1521
            info@fiore.com
          </p>
        </div>
      </div>
      <hr>
      <div class="row second">
        <div class="col-md-6 address">
          <p>
            Monday – Friday: <br>
            7am – 7pm
          </p>
        </div>
        <div class="col-md-6 time">
          <p>
            Saturday – Sunday: <br>
            8am – 7pm
          </p>
        </div>
      </div>
      <div class="map">
        <span> 
         <a href="https://www.google.com/maps/@33.5874258,-7.6356326,280m/data=!3m1!1e3?hl=en-US" style="all:unset;"> VIEW ON MAP</a></span>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- end our store and image -->

@endsection

@section('script')
{{-- <script src="scripts/script.js"></script> --}}
@endsection



