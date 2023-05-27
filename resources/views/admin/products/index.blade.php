{{-- 


@extends('app')
@section('title')
products
@endsection

@section('style')
<title> Product</title>

<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="searcher w-100">
        <div class="search" style="display: flex;justify-content: end;">
           <form action="/products">
            <select name="type" id="">
                <option value="all">all</option>
                <option value="plant">plant</option>
                <option value="flower">flower</option>
            </select>
            <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
           </form>
        </div>
    </div>
   
   
</div>

@endsection --}}




@extends('layouts.admin')

@section('style')
<style>
    .card{
        margin-right:15px;
    }
    .parent-image{
        height: 250px;
    }
    img{
        max-width: 300px;
        height: 100%;
        margin: 10px auto 0 auto;
    }
    .buttons{
        display: flex;
        justify-content: space-around;
    }
</style>
@endsection

@section('title')
     products
@endsection


@section('content')
<div class="row">
    @foreach ( $products as $product )
    <div class="card col-md-auto  mt-5 mb-5" style="width: 18rem;">
        <div class="parent-image">
            <img src="/storage/{{ $product->image }}" class="card-img-top justify-content-center" alt="storage/{{ $product->image }}">
        </div>
        <div class="card-body">
          <h3 class="card-title">{{ $product->name }}</h3>
          <h5 class="card-title">Price: {{ $product->price }} DH</h5>
          <h5 class="card-title">Type: {{ $product->type }}</h5>
          <p></p>
         <div class="buttons">
            <a href="{{ route('editproduct',$product->slug) }}" class="btn btn-primary">Edit</a> 
            <form action="{{ route('deleteproduct',$product->slug) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('showproduct',$product->slug) }}" class="btn btn-primary">See</a>
         </div>
        </div>
    </div>
    @endforeach
    </div>

@endsection