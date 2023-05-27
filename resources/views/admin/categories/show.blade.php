

@extends('layouts.admin')

@section('style')
    <style>
        img{
        max-height: 500px;
        max-width: 500px;
    }
    </style>
@endsection

@section('title')
     Category
@endsection


@section('content')

<div class="container">
  {{-- <h1 class="text-center m-3"> {{ $category->name }}</h1> --}}
  <div class="row justify-content-md-center">
    <div class="col col-md-8 col-lg-6">
        {{-- <img src="/storage/{{ $product->image }}" alt=""> --}}
        <div class="form-group mt-5">
          <p>name : {{ $category->name }}</p>        
        </div>
        <div class="form-group">
          <p>slug : {{ $category->slug }}</p>  
        </div>       
       
       
    </div>
  </div>  
@endsection