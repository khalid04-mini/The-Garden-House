@extends('layouts.clientdash')



@section('styledash')
<link rel="stylesheet" href="/styles/view-order.css">
@endsection



@section('dashcontent')

<section class="my-5">
    {{-- <div class="container">
        
    </div> --}}
   <div class="container">
    <div class="notice my-5">
        <p>Order <strong>#200{{ $order->id }}</strong> was placed on <strong>{{date('M j , Y',strtotime( $order->created_at)) }}</strong> and is currently <strong>{{ $order->status }}</strong>.</p>
    </div>
    <div class="order-details my-5">
        <h2>Order Details</h2>
        {{-- <div class="table-order-details">
            <table class=" my-4">
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="product-name">Product</td>
                        <td class="product-total">Total</td>
                    </tr>
                </tbody>
            </table>
        </div> --}}
        <div class="table-order-details">
            <table>
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->detail_order as $key => $item  )
                    <tr>
                        <td class="product-name"><a href="/product/{{ $item->product->slug }}">{{ $item->product->name }}</a> <strong>x {{ $item->quantity }}</strong></td>
                        <td class="product-total">{{ $item->product->price * $item->quantity }} MAD</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th class="product-name">Shipping Method:</th>
                        <th class="product-total">{{ $order->shipping_type ==='free_shipping' ? 'Free Shipping' :'Local Pickup'  }}</th>
                    </tr>
                    <tr>
                        <th class="product-name">Payment Method:</th>
                        <th class="product-total">Cash On Delivery</th>
                    </tr>
                    <tr>
                        <th class="product-name">Total:</th>
                        <th class="product-total">{{ $order->total }} MAD</th>
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>
   </div>
</section>
@endsection













