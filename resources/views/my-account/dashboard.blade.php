@extends('layouts.clientdash')







@section('dashcontent')

<section class="my-5">
    <div class="container">
        <div class="dashboard">
           <div class="hello">
            <div><p>Hello <strong>{{ $email }}</strong> (not <strong>{{ $email }}?</strong> )</p></div>
                <div class="logout">
                   <form action="{{ route('logout') }}" method="post">
                       @csrf
                       @method('POST')
                       <a href="/logout"><input type="submit" value="Logout"></a>
                    </form>
                </div>
           </div>
            <p>From your account dashboard you can view your  <a href="">recent orders</a>, manage your <a href="">addresses</a>, and <a href="">edit your password and account details.</a></p>
        </div>
    </div>
</section>
@endsection



