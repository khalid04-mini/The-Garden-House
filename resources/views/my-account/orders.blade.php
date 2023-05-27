@extends('layouts.clientdash')



@section('styledash')
<link rel="stylesheet" href="/styles/orders.css">
@endsection



@section('dashcontent')

<section class="my-5">
    {{-- <div class="container">
        $orders
    </div> --}}
    {{-- {{ count($orders ) }} --}}
   <div class="container">
    @if (count($orders )!= null)
    <div class="orders">
        <table>
            <thead>
                <tr>
                    <th class="order_th"><span>Order</span></th>
                    <th><span>Date</span></th>
                    <th><span>Status</span></th>
                    <th class="total_th"><span>Total</span></th>
                    <th class="actions_th"><span>Actions</span></th>
                </tr>
            </thead>
            <tbody>
               @foreach ($orders as $order)
               <tr>
                    <td class="order_th"><span>#200{{ $order->id }}</span></td>
                    <td><span>{{date('M j, Y', strtotime($order->created_at))  }}</span></td>
                    <td><span>{{ $order->status }}</span></td>
                    <td class="total_th"><span>{{ $order->total }} MAD for {{count( $order->detail_order) }} item{{count( $order->detail_order)>1 ? 's' :'' }}</span></td>
                    <td class="actions_th"><button><a href="{{ route('vieworder',$order->id) }}">view</a></button></td>
                </tr>       
               @endforeach
                
            </tbody>
        </table>
    </div>
    @else
    <div class="no-orders">
        <p>No order has been made yet. <a href="/product-type/flowers">browse products</a></p>       
    </div>
     
    @endif
   
   </div>
</section>
@endsection













