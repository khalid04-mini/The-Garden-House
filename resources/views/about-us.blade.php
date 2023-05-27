@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('style')

    {{-- <link rel="stylesheet" href="/styles/contact-us.css"> --}}
    <style>
       
       .about-img{
            position: relative;
       }

        .about-img img{
            width: 100%;
            /* position: absolute */
        }

        .about-img .text{
            position: absolute;
            color: white;
            right: 5%;
            top: 40%;
            width: 40%;
        }
         .about-img .text h2{
            font-family: "Italiana";
            visibility: visible;
            text-align: left;
            line-height: 64px;
            letter-spacing: 0px;
            /* font-weight: 300; */
            font-size: 60px;
        }
    </style>

@endsection

@section('content')


<section class="about-s ">
    <div class="about-img">
        <img src="images/about-us.jpeg" alt="">
        <div class="text">
            <h2>Hi , I am Lena Caillat<br> Floral Designer</h2>
            <br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil minima, corporis quam et, id accusamus tempora quos fuga dignissimos beatae optio omnis eius, consequatur debitis quisquam corrupti in incidunt aspernatur!</p>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection



