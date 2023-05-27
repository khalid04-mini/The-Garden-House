@extends('layouts.app')

@section('title')
    The Garden House
@endsection

@section('style')
<link rel="stylesheet" href="/styles/cart.css">

@endsection

@section('content')

<section class="mt-5">
    <div class="container cardcon">
        <h3>Cart</h3>
        <div class="cart mt-5">
                {{-- <p>Your cart is currently empty. <a href="/product-type/flowers">browse products</a></p>        --}}

                {{-- <table class="table-cart">
                    <thead>
                        <tr>
                            <th></th>
                            <th><h5>Product</h5></th>
                            <th><h5>Price</h5></th>
                            <th><h5>Quantity</h5></th>
                            <th><h5>Subtotal</h5></th>
                        </tr>
                    </thead>
                    <tbody> --}}

                        {{-- <tr>
                            <td><a href="#" onclick="removeproduct(productd)"><i class="fa-solid fa-xmark"></i></a></td>
                            <td><span>White Tulip</span></td>
                            <td><p><span>200</span> MAD</p></td>
                            <td>
                                <div class="quant">
                                <button onclick="minusquantity(2)" class="btn-minus"><i class="fa-regular fa-minus"></i></button>
                                <span>2</span>
                                <button onclick="plusquantity(2)" class="btn-plus"><i class="fa-regular fa-plus"></i></button>
                                </div>
                            </td>
                            <td><p><span>400</span> MAD</p></td>
                        </tr> --}}

                    {{-- </tbody>
                </table>
                <hr>
                <table class="cart-total">
                    <tr>
                        <td class="title-total">
                            <h4>Total</h4>
                        </td>
                        <td class="value-total">
                            <p><span>1200</span> MAD</p>
                        </td>
                    </tr>
                </table>
                <hr>
                <div class="proceed-checkout mt-4 mb-2">
                    <button>Proceed To Checkout</button>
                </div> --}}
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="/scripts/cart-page.js"></script>
@endsection



