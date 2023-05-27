@extends('layouts.admin')


@section('title')
    Admin
@endsection


@section('content')
<div class="bodywrapper__inner">
    <div class="row mb-none-30 justify-content-center">
<div class="col-xl-8 col-md-6 mb-30">
<div class=" b-radius--10 overflow-hidden box--shadow1">
    <div class="card-body-detail" style="padding-top:0px">
        <h5 class="mb-20 p-2 text-muted">Shipping Address</h5>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Date Orderd                       <span class="fw-bold ">{{date('M j, Y',strtotime( $order->created_at ))}}</span>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Order Total                        <span class="fw-bold ">{{ $order->total }} MAD</span>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Order Number                        <span class="fw-bold ">#{{ $order->id }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Shipping Method                        <span class="fw-bold ">{{ $order->shipping_type }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Full Name                        <span class="fw-bold">{{ $order->addresse->first_name }} {{ $order->addresse->last_name }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Address                        <span class="">{{ $order->addresse->street }},{{ $order->addresse->city }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Zip Code                        <span class="fw-bold">{{ $order->addresse->zip_code }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Email                        <span class="fw-bold">
                    <a>{{ $order->user->email }}</a>
                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Phone Number                        <span class="fw-bold">{{ $order->addresse->phone }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Note                        <span class="fw-bold">{{ $order->note }}</span>
            </li>
        </ul>
    </div>
    <div class="card-body-detail p-0" style="padding-top:0px">
        <div class="table-responsive--sm table-responsive">
            <table class="table table--light style--two custom-data-table">
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->detail_order as $item)
                    <tr>
                        <td data-label="Product Image"><img src="/storage/{{ $item->product->image }}" alt="Image" class="rounded" style="width:50px;"></td>
                        <td data-label="Product Name">
                            {{ $item->product->name }}
                        </td>
                        <td data-label="Quantity">
                            {{ $item->quantity }} x {{ $item->product->price }}
                        </td>
                        <td data-label="Total Price">
                            {{ $item->quantity * $item->product->price }}
                        </td>
                    </tr>
                    @endforeach
                                          
                </tbody>
            </table><!-- table end -->
        </div>
    </div>
</div>
</div>
<div class="col-xl-4 col-md-6 mb-30">
<div class=" b-radius--10 overflow-hidden box--shadow1">
    <div class="card-body-detail">
        <h5 class="card-title mb-50 border-bottom pb-2">Order Approve</h5>
            <div class="row mt-4 gy-2">
                <div class="col-md-12">
                    <form action="{{ route('updateorderdetail', $order->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="form-control" id="status">
                            <option value="processing">processing</option>
                            <option value="shipped">Shipped</option>
                            <option value="delivred">Delivered</option>
                        </select>
                    

                <div class="col-md-12 mt-5">
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                        Save                            </button>
                </div>

            </form>
            </div>

                
            
            </div>
    </div>
</div>
</div>

</div>


</div>
@endsection