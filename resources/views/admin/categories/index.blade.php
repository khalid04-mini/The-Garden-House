



@extends('layouts.admin')

@section('style')
<style>
    .card{
        margin-right:15px;
    }
    .buttons{
        display: flex;
justify-content: space-around;
    }

</style>
@endsection

@section('title')
     Categories
@endsection


@section('content')
<div class="row">
    @foreach ( $categories as $category )
    <div class="card col-md-auto  mt-5 mb-5" style="width: 18rem;">
       
        <div class="card-body">
         
          <h5 class="card-title">Name: {{ $category->name }} </h5>
          <h5 class="card-title">Slug: {{ $category->slug }}</h5>
          <p></p>
         <div class="buttons">
            <a href="{{ route('editcategory',$category->slug) }}" class="btn btn-primary">Edit</a> 
            <form action="{{ route('deletecategory',$category->slug) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
            <a href="{{ route('showcategory' , $category->slug) }}" class="btn btn-primary">See</a>
         </div>
        </div>
    </div>
    @endforeach
    </div>


@endsection