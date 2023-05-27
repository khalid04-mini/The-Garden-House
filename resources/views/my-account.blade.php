@extends('layouts.app')

@section('title')
    My Account
@endsection

@section('style')
<link rel="stylesheet" href="/styles/myaccount.css">

@endsection

@section('content')
<section class="container titleaccount">
    <div class="myaccount">
        <h1>My Account</h1>
    </div>
</section>
<section class="">
    @if ($errors->has('email') || $errors->has('password'))
    <div class="container errors my-5">  
        @error('email')  
        <p >
            <i class="fa-regular fa-circle-exclamation"></i> {{ ($message) }}
        </p>
        @enderror
        @error('password')  
        <p >
            <i class="fa-regular fa-circle-exclamation"></i> {{ ($message) }}
        </p>
        @enderror
    </div>
    @endif
    
</section>
<section class="container login-register">
        <div class="forms">
            <div class="row">
            <div class="col-md-6">
                <div class="titleaccount-login">
                    <h2>Login</h2>
                </div>
                <div class="login">
                    <form action="{{ route('storelogin') }}" method="post">
                        @csrf
                        <div class="email">
                            <label for="email">Email address *</label>
                            <br>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="password pt-4 pb-3">
                            <label for="passwordl">Password *</label>
                            <br>
                            <input type="password" id="passwordl" name="password">
                           {{-- <span toggle="#password-field" ><i class="field-icon bi bi-eye"></i></span>  --}}
                           
                           <i class="field-icon fa-solid fa-eye"></i>
                            <!-- <span><i class=""></i></span> -->
                        </div>
                        <div class="button ">
                            <button>LOG IN</button>
                        </div>
                    </form>
                    <div class="lost-password">
                        <span><a href="">Lost your password?</a></span>
                    </div>
                </div>
               
            </div>
            <div class="col-md-6">
                <div class="titleaccount-signup">
                    <h2>Register</h2>
                </div>
                <div class="register">
                   
                    <form action="{{ route('registerform') }}" method="post">
                        @csrf
                        <div class="email">
                            <label for="email">Email address *</label>
                            <br>
                            <input type="email" id="email" name="email">
                            
                        </div>
                        <div class="password pt-4 pb-4">
                            <label for="password">Password *</label>
                            <br>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="button pt-3 pb-4">
                            <button>Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
</section>
<script>
    let eye=document.querySelector('.field-icon');
    let passwordl=document.getElementById('passwordl');

eye.addEventListener('click',function(){
    console.log(passwordl.type);
    if(passwordl.type=='password'){
        passwordl.type='text'
        eye.className= 'field-icon fa-solid fa-eye-slash'
    }
    else{
        passwordl.type='password';
        eye.className= 'field-icon fa-solid fa-eye'
    }
});
</script>
@endsection

{{-- @section('script')
<script src="/scripts/myaccount.js"></script>
@endsection --}}



