@extends('layouts.admin')


@section('title')
    Admin
@endsection


@section('content')
<div class="row">
 
  <div class="col-md-3 my-5">
    <a href="{{route('products')}}">
        <div class="card prod-p-card background-pattern">
            <div class="card-body">
                <div class="row align-items-center m-b-0">
                    <div class="col">
                        <h6 class="m-b-5">Products</h6>
                        <h3 class="m-b-0">{{ $count_products }} </h3>
                    </div>
                    <div class="col-auto">
                      <i class="bi bi-flower2"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-3 my-5">
    <a href="{{route('categories')}}">
        <div class="card prod-p-card background-pattern">
            <div class="card-body">
                <div class="row align-items-center m-b-0">
                    <div class="col">
                        <h6 class="m-b-5">Categories</h6>
                        <h3 class="m-b-0">{{ $count_categories }} </h3>
                    </div>
                    <div class="col-auto">
                      <i class="bi bi-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-md-3 my-5">
  <a href="{{ route('adminclients') }}">
      <div class="card prod-p-card background-pattern">
          <div class="card-body">
              <div class="row align-items-center m-b-0">
                  <div class="col">
                      <h6 class="m-b-5">Clients</h6>
                      <h3 class="m-b-0">{{ $count_clients }} </h3>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-people-fill"></i>
                  </div>
              </div>
          </div>
      </div>
  </a>
</div>
<div class="col-md-3 my-5">
  <a href="{{route('orders')}}">
      <div class="card prod-p-card background-pattern">
          <div class="card-body">
              <div class="row align-items-center m-b-0">
                  <div class="col">
                      <h6 class="m-b-5">Total Order</h6>
                      <h3 class="m-b-0">{{ $count_orders }} </h3>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-cart"></i>
                  </div>
              </div>
          </div>
      </div>
  </a>
</div>
<div class="col-md-3 my-5">
  <a href="{{route('orders')}}">
      <div class="card prod-p-card background-pattern">
          <div class="card-body">
              <div class="row align-items-center m-b-0">
                  <div class="col">
                      <h6 class="m-b-5">Total Delivered</h6>
                      <h3 class="m-b-0">{{ $count_delivred_ordes }} </h3>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-truck"></i>
                  </div>
              </div>
          </div>
      </div>
  </a>
</div>
<div class="col-md-3 my-5">
  <a href="{{route('orders')}}">
      <div class="card prod-p-card background-pattern">
          <div class="card-body">
              <div class="row align-items-center m-b-0">
                  <div class="col">
                      <h6 class="m-b-5">Earnings</h6>
                      <h3 class="m-b-0">{{ $earnings }} </h3>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-cash"></i>
                  </div>
              </div>
          </div>
      </div>
  </a>
</div>

</div>
@endsection