



@extends('layouts.admin')

@section('style')
<style>
   .table{
    width: 90%;
    margin: 0 auto;
   }
   .actions{
    display: flex;
    justify-content: space-around;
   }
</style>
@endsection

@section('title')
Client
@endsection


@section('content')
<div class="row mt-5">
  <div class="switch">
    <form action="{{ route('switchads',$user->id) }}" method="post">
      @csrf
      @method('PATCH')
      <select name="is_admin" class="form-control" id="status">
          <option value={{ 1 }}>admin</option>
          <option value={{ 0 }}>client</option>
      </select>
     <br>
     <button class="btn btn-primary" type="submit">switch</button>
    </form>
  </div>
    <div class="addresses my-5">
        <h3>Addresses</h3>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">address</th>
            <th scope="col">zip code</th>
            <th scope="col">city</th>
            <th scope="col">state</th>
            <th scope="col">phone</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($addresses as $address)
          <tr>
            <th scope="row">{{ $address->id }}</th>
            <td>{{ $address->first_name . " " . $address->last_name }}</td>
            <td>{{ $address->street }}</td>
            <td>{{ $address->zip_code }}</td>
            <td>{{ $address->city }}</td>
            <td>{{ $address->state }}</td>
            <td>{{ $address->phone }}</td>
           
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
    <br>
    <div class="orders my-5">
        <h3>Orders</h3>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Order Id</th>
            <th>Order Date</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
          <tr>
            <td>{{ $order->id }}</td>
            <td>{{ date('M j , Y',strtotime($order->created_at)) }}</td>
            <td>{{ $order->total }} MAD</td>
            <td>{{ $order->status }}</td>
            <td>
                <div class="actions">
                    <a href="{{ route('order_detail',$order->id) }}" class="btn btn-icon btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                    <form action="{{ route('destroyorder',$order->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
                
                </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
    
</div>


@endsection