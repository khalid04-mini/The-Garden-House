


@extends('layouts.app')




@section('title')
    My Account
@endsection

@section('style')
<link rel="stylesheet" href="/styles/dashboard.css">
@yield('styledash')
@endsection

@section('content')
<section class="title-page">
    <div class="titl-page container my-5">
        <h1>My Account</h1>
    </div>
</section>

<section class="my-5">
    <div class="my-nav container">
        <ul class="list" >
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('orders') }}"">Orders</a></li>
            <li><a href="{{ route('editaddresses') }}">Addresses</a></li>
            <li><a href="{{ route('editaccount') }}">Account Details</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                @csrf
                @method('POST')
                <a href="/logout"><input type="submit" value="Logout"></a>
                </form>
            </li>
        </ul>
    </div>
</section>


@yield('dashcontent')


@endsection


@section('script')
@endsection






