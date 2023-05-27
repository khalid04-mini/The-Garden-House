@extends('layouts.admin')


@section('title')
    Admin
@endsection


@section('content')
<h1>Orders</h1>
    <div class="row my-3">
        <div class="col-lg-12">
            <div class=" b-radius--10 ">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>Full Name</th>
                        <th>Order Number</th>
                        <th>Order Date</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $key => $order)
                      <tr>
                        <td><strong>{{ $order->addresse->first_name }}</strong> <strong>{{ $order->addresse->last_name }}</strong></td> 
                        <td>{{ $order->id }}</td>
                        <td>{{ date('M j , Y',strtotime($order->created_at)) }}</td>
                        <td>{{ $order->total }} MAD</td>
                        <td>{{ $order->status }}</td>
                        <td><a href="{{ route('order_detail',$order->id) }}">View</a>
                        <form action="{{ route('destroyorder',$order->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div><!-- card end -->


        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
      {{ $orders->links() }}
  </div>
@endsection