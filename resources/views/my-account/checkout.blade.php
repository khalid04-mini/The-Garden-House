
@extends('layouts.app')

@section('title')
    The Garden House
@endsection

@section('style')
<link rel="stylesheet" href="/styles/checkout.css">
<style>
    .buttons{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .add-addrs a:hover {
	color: white;
	background-color: #6A6E49;
	border-color: #6A6E49;
	text-decoration: none;
    }
    .buttons a:hover {
        color: white;
        background-color: #6A6E49;
        border-color: #6A6E49;
        text-decoration: none;
    }
    .buttons a{
        font-family: "montserrat",Sans-serif;
        color: black;
        padding: 12px;
        border: 1px solid black;
        border-radius: 100px;
        text-transform: uppercase;
        letter-spacing: 0.92px;
        line-height: 1.3em;
        font-weight: 500;
        font-size: 12px;
        float: right;
        margin: 0 25px;
    }

    .add-addrs a {
	font-family: "montserrat",Sans-serif;
	color: black;
	padding: 12px;
	border: 1px solid black;
	border-radius: 100px;
	text-transform: uppercase;
	letter-spacing: 0.92px;
	line-height: 1.3em;
	font-weight: 500;
	font-size: 12px;
    
}

</style>
@endsection

@section('content')

<section class="mt-5">
    <div class="container checkout">
        
        <form action="{{ route('check') }}" method="post" id="checkoutform">
            @csrf
            @method('POST')
       
           {{-- shipping --}}
            <div class="addresses my-4">
                <h3 class="my-3">Shipping Details</h3>
                <div class="row">
                    @foreach ($addresses as $index => $addresse)
                    <div class="col-md-5 my-3 addrs">
                        <strong> {{ $addresse->first_name }}</strong> <strong>{{ $addresse->last_name }}</strong>
                        <p>phone : {{ $addresse->phone }}</p>
                        <p>street : {{ $addresse->street }}</p>
                        <p>city : {{ $addresse->city }}</p>
                        <p>state : {{ $addresse->state }}</p>
                        <p>zip code : {{ $addresse->zip_code }}</p>
                        <p>country : Morocco</p>
                        <input type="radio" name="addresse_id" id="" value="{{ $addresse->id }}" checked> <label for="">choose this address</label>
                    
                        <div class="buttons">
                            <a href="{{ route('updateadresse',$addresse->id) }}">Update</a>
                            @if ($index > 0 )
                            <form action="{{ route('deleteaddresse',$addresse->id) }}" method="post">
                                @csrf
                                @method('POST')
                                <a href="#"><input type="submit" value="Delete"></a>
                            </form>
                            @endif
                        </div>
                    </div>
                    
                    @endforeach    
                   
                </div>
                @if (count($addresses) < 5)
                <div class="add-addrs mt-5">
                    <a href="{{ route('adaddresse') }}">Add New Address</a>
                </div>
                @endif
            </div>


            <hr>
            {{-- order details --}}

            <div class="yourorder my-4">
                <h3 class="my-3">Your Order</h3>
                <p class="tit">Product</p>
                
                <div class="products">
                    {{-- <hr>
                    <div class="product">
                        <div class="name">
                            <span><input type="text" name="product_name" value="" readonly> x <input type="text" name="product_quantity" value="2"readonly></span>
                        </div>
                        <div class="price">
                            <span>$<input type="text" name="product_price" value="300" readonly></span>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="product">
                    <div class="name">
                        <span><input type="text" name="product_name" value="" readonly> x <input type="text" name="product_quantity" value="2"readonly></span>
                    </div>
                    <div class="price">
                        <span>$<input type="text" name="product_price" value="300" readonly></span>
                    </div>
                </div>
                <hr>
                <div class="product">
                    <div class="name">
                        <span>'HOLM' - 'The OG' Pink Scented Candle  × 1</span>
                    </div>
                    <div class="price">
                        <span>$30.00</span>
                    </div>
                </div>
                <hr>
                <div class="product">
                    <div class="name">
                        <span>'HOLM' - 'The OG' Pink Scented Candle  × 1</span>
                    </div>
                    <div class="price">
                        <span>$30.00</span>
                    </div>
                </div> --}}
                <hr>
                <p class="tit">shipping</p>
                <ul class="shipping-method">
                    <li>
                        <input type="radio" name="shipping_type" id="free_shipping" value="Free Shipping" checked>
                        <label for="free_shipping"> Free Shipping</label>
                    </li>
                    <li>
                        <input type="radio" name="shipping_type" id="local_pickup" value="Local Pickup">
                        <label for="local_pickup"> Local Pickup</label>
                    </li>
                </ul>

                <hr>
                <div class="total_prix">
                    <p class="tit">Total</p>
                    <strong class="prixtotal"></strong>
                </div>
            </div>

            <div class="yourorder my-4">
                <h3 class="my-3">Payment</h3>
                <label for="note" class="tit">Order Notes (optional)</label>
                {{-- <input type="text" name="note" id="note"> --}} <br>
                <textarea name="note" id="note" cols="113" rows="5"></textarea>

                
            <div class="payment my-3">
                <p class="tit">Payment Method</p>
                <input type="radio" name="payment_method" id="cash_on_delivery" value="cash_on_delivery" checked>
                <label for="cash_on_delivery">Cash On Delivery</label>
                {{-- <br>
                <input type="radio" name="payment_method" id="CreditCard" value="CreditCard" checked>
                <label for="CreditCard">Credit Card</label> --}}
            </div>

            <div class="privacy">
                <p>
                    Your personal data will be used to process your order,
                     support your experience throughout this website,
                      and for other purposes described in our privacy policy.
                </p>
            </div>

            <div class="place-order">
                <button type="submit">Place Order</button>
            </div>
            </div>
        </form>
           
        </div>
   
</section>
@endsection

@section('script')

<script>
// updatecheckoutPage()
     products =document.querySelector('.products');
     prixtotal =document.querySelector('.prixtotal');
    function updatecheckoutPage(){
    // localStorage.setItem('shoppingCart', JSON.stringify(productsInCart));
    if(productsInCart.length > 0){
        cartspan.innerHTML = productsInCart.length;
        let result = productsInCart.map(product => {
          return `
          <hr>
            <div class="product">
                <div class="name">
                    <span>${product.name}<input type="hidden" name="product_id[]" value="${product.id}" minlength="50" readonly> x <input type="text" name="quantity[]" value="${product.count}"readonly></span>
                </div>
                <div class="price">
                    <span><input type="text" name="product_price[]" value="${product.count * product.basePrice}" readonly>MAD</span>
                </div>
            </div>
         `
        });
        // console.log(result)
        
        products.innerHTML=`${result.join('')}`
        prixtotal.innerHTML=`<input type="text" name="total" value="${countTheSumPrice()}" readonly>MAD `
    }
    else{
        
    window.location.href = '/cart'

    }

    
  }

  updatecheckoutPage()

  checkoutform = document.getElementById('checkoutform');
  
  checkoutform.addEventListener('submit', function(){
    localStorage.clear();
  })
  
</script>

@endsection



