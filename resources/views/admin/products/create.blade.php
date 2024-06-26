

@extends('layouts.admin')


@section('title')
    Add product
@endsection


@section('content')

<div class="container">
  <h1 class="text-center m-3">Add Product</h1>
  <div class="row justify-content-md-center">
    <div class="col col-md-8 col-lg-6">
      <form  method="post" action="{{ route('storeproduct') }}" enctype="multipart/form-data" >
          @csrf
        <div class="form-group has-validation">
          <label for="name">Product name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Tulip Red" name="name" value="{{ old('name') }}">
         @error('name')  
           <div id="" class="invalid-feedback">
              {{ $message }}
          </div>
         @enderror
        </div>
        <div class="form-group">
          <label for="price">Product price</label>
          <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder=" 130 MAD" name="price">
          @error('price')  
          <div id="" class="invalid-feedback">
             {{ $message }}
         </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="slug">Product slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Awesome-red-tulip" name="slug">
          @error('slug')  
          <div id="" class="invalid-feedback">
             {{ $message }}
         </div>
        @enderror
      Type :
      <div style="display: flex;
      justify-content: space-around;">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="type1" value="flower" checked>
              <label class="form-check-label" for="type1">
                  flower
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="type2" value="plant" >
              <label class="form-check-label" for="type2">
                  Plant
              </label>
          </div>
      </div>
      <div class="form-group">
          <label for="category_id">Category</label>
          <select class="form-control" id="category_id" name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" >{{ $category->name }}</option>
        @endforeach
      
          </select>
      </div>
      <div class="form-group">
          <label for="description">Example textarea</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"  name="description"></textarea>
          @error('description')  
          <div id="" class="invalid-feedback">
             {{ $message }}
         </div>
        @enderror
      </div>
      <div class="form-group my-4">
          <label for="image">image</label>
          <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  required>
          @error('image')  
          <div id="" class="invalid-feedback">
             {{ $message }}
         </div>
        @enderror
      </div>
      
        <button id="btnSubmit" type="submit" class="btn btn-primary">Create Product</button>
      </form>
    </div>
  </div>  
@endsection