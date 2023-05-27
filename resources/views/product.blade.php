@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="/styles/my-product.css">
@endsection

@section('title')
    {{ $product->name }}
@endsection


@section('content')
<hr>

<section class="product-section my-5">
    
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-7 mt-5">
                <div class="image-product" style="height: 81.5%;">
                    <img src="/storage/{{ $product->image }}" alt="">
                </div>
            </div>

            <div class="col-md-5 mt-5">
                <div class="product-info">
                    <div class="product-name">
                        <h3>{{ $product->name }}</h3>
                    </div>
                    <div class="product-sku">
                        <p>SKU:<span>{{ $product->id }} </span></p>
                    </div>
                    <div class="product-price">
                        <p><span>{{ $product->price }} </span>MAD</p>
                    </div>
                    <div class="form-order">
                       <div class="cart-qty my-5">
                        <input type="number" name="quantite" id="quantite" placeholder="0" min="1">
                        <button id="btnadd" onclick="addproduct()">Add to cart</button>
                       </div>
                    </div>
                    <hr>
                    <div class="product-description">
                        <p>{{ $product->description }}</p>
                    </div>
                    <hr>
                    <div class="product-description">
                        <h3>Free Shipping</h3>
                        <p>Free standart shipping on orders over $50.
                        Estimated to be delivered on {{ date('M j, Y') }} – {{ date('M j, Y',strtotime('+ 5 days')) }} </p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start our store and image -->
<section class="ourstore my-5">
    <div class="container my-5">
    <div class="row">
      <div class="col-md-6 image">
        <div class="cont">
          
      </div>
    </div>
      <div class="col-md-6 store">
        <div class="cont container">
        
            <h3>Care Instructions</h3>
Flowers Water
Change vase water every other day (add flower food to the new water if available). All stems should be submerged. If your flowers came in a basket or other container with foam, add fresh water every day.
FLOWERS LIGHT/TEMPERATURE
Display your bouquet or flower arrangement in a cool, draft-free area. Avoid direct sunlight, which causes the flowers to die more quickly.
FLOWERS PRUNING
Immediately remove dead or wilting leaves and stems. Recut your flower and foliage stems just before putting them back into new water.

        </div>
      </div>
    </div>
    </div>
</section>
    <!-- end our store and image -->

@endsection


@section('script')

@endsection