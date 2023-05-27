@extends('layouts.app')

@section('title')
    
@endsection

@section('style')
<link rel="stylesheet" href="/styles/product.css">

@endsection

@section('content')
<section class="elements mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 filter">
                <h1>{{ $typeprod }}</h1>
                <hr>
                <div class="search">
            <form action="" method="get" id="my-form">
                    <input type="text" id="search" name="search" placeholder="Search here">
                    <button type="submit"><i class="fas fa-search"></i></button>
                    <span><i class="field-icon bi bi-eye"></i></span>
                    
                    
                </div>
                <hr>
                <div class="price">
                  <h3>price range</h3>
                  <i class="bapf_colaps_smb fa fa-chevron-down" id="price-icon"></i>
                </div>
                <div class="price-range">
                  <div class="range-input">
                    
                        <input type="text" name="range-min" value="{{ $min }}">
                        <input type="text" name="range-max" value="{{ $max }}"  >
                    
                </div>
                  <div class="price-span">
                    <div class="field">
                        <span class="span-min">{{ $min }} Dhs</span>
                        -
                        <span class="span-max">{{ $max }} Dhs</span> 
                    </div>
                  </div>
                </div>
                <hr>
                <div class="category">
                  <h3>Category</h3>
                  <i class="bapf_colaps_smb fa fa-chevron-down" id="category-icon"></i>
                </div>
                <div class="category-items">
                   @foreach ($categories as $key => $category)
                   
                   <span><input type="checkbox" name="category" 
                    id="{{ $category->slug }}" 
                    {{-- @if ( request()->category[$key] ===  $category->slug  )
                        checked
                    @endif --}}
                    value="{{ $category->slug }}"> <label for="{{ $category->slug }}">{{ $category->name }}</label></span>
                   @endforeach
            </form>
                </div>
                <hr>
            </div>
            <div class="col-md-9 ">
               
                <hr style="margin-top: 4rem;">
                <div class="result mt-1">
                    <p> Showing 1–12 of 18 results</p>
                    <select name="" id="" class="ordering">
                        <option value="">Default sorting</option>
                        <option value="">Sort by latest</option>
                        <option value="">Sort by price: low to high</option>
                        <option value="">Sort by price: high to low</option>
                    </select>
                 
                </div>
                <div class="products mt-1">
                   <div class="row">
                    @foreach ($products as $product )
        {{-- product card --}}
                        <div class="col-md-4 col-6 mt-3 mb-3">
                            <div class="card-product">
                                
                                <div class="image">
                                    <a href=" {{ route('showproductclient',$product->slug) }}">
                                        {{-- <img src="https://fiore.vamtam.com/wp-content/uploads/2021/12/3-420x420.jpg" alt="" sizes="(max-width: 420px) 100vw, 420px"> --}}
                                        <img src="/storage/{{ $product->image }}" alt="{{ $product->name }}" sizes="(max-width: 420px) 100vw, 420px">

                                    </a>
                                </div>
                               <a href="">
                                <div class="info">
                                    <a href=""><h2>{{ $product->name }}</h2></a>
                                    <span>{{ $product->price }} Dhs</span>
                                </div>
                               </a>
                            </div>
                        </div>
                        
       {{-- end product card --}}
                    @endforeach
                    @if (count($products) === 0)
                        <div class="not-found">
                            <p> No results Found</p>
                        </div>
                    @endif

                    
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="/scripts/product.js"></script>


<script>
    // rangemin = document.getElementById('range-min');
    // myform  = document.getElementById('my-form');
    // rangemin.addEventListener('mouseup',function(){
    //     myform.submit()
    // })
</script>
@endsection



