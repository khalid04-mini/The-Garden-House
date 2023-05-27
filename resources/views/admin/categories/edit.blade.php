@extends('layouts.admin')


@section('title')
Update Category
@endsection


@section('content')

<div class="container">
    <h1 class="text-center m-3">Update Category</h1>
    <div class="row justify-content-md-center">
        <div class="col col-md-8 col-lg-6">
            <form action="{{ route('updatecategory',$category->slug) }}" method="post">
                {{-- <input type="file" name="image" id=""> --}}
                @method('patch')
                @csrf
                <div class="form-group has-validation">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Birthday" name="name" value="{{ $category->name }}">
                    @error('name')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group has-validation">
                    <label for="slug">Category Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Birthday-Ann" name="slug" value="{{ $category->slug }}">
                    @error('slug')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <br>
                <button type="submit" id="submit" class="btn btn-primary">Update category</button>
            </form>
        </div>
    </div>

    @endsection