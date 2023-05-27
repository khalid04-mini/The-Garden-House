


@extends('layouts.admin')


@section('title')
    Add Category
@endsection


@section('content')

<div class="container">
    <h1 class="text-center m-3">Add Category</h1>
    <div class="row justify-content-md-center">
      <div class="col col-md-8 col-lg-6">
        
        <form action="{{ route('storecategory') }}" method="post"  id="form-2">
            {{-- <input type="file" name="image" id=""> --}}
                @csrf
                <div class="form-group has-validation">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Birthday" name="name" value="{{ old('name') }}">
                   @error('name')
                     <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                   @enderror
                </div>
                <div class="form-group has-validation">
                    <label for="slug">Category Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Birthday-Ann" name="slug" value="{{ old('slug') }}">
                   @error('slug')
                     <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                   @enderror
                </div>

                {{-- <hr>
                <div class="form-group has-validation">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Birthday" name="name[]" value="{{ old('name') }}">
                    @error('name')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group has-validation">
                    <label for="slug">Category Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Birthday-Ann" name="slug[]" value="{{ old('slug') }}">
                    @error('slug')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> --}}

                <button type="submit" id="submit" class="btn btn-primary">add category</button>
            </form>

          

         
      </div>
    </div>

@endsection
