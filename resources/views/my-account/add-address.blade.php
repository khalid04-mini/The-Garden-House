@extends('layouts.clientdash')




@section('styledash')
<link rel="stylesheet" href="/styles/edit-account.css">
@endsection


@section('dashcontent')

<section class="my-5">
    <div class="container">
        
      <div class="edit-account">
        <form action="{{ route('storeaddresse') }}" method="post">
            @csrf
            @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="fname">
                    <label for="fname">First Name*</label>
                    <br>
                    <input type="text" id="fname" name="first_name" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="fname">
                    <label for="lname">Last Name*</label>
                    <br>
                    <input type="text" id="lname" name="last_name" value="">
                </div>
            </div>
        </div>
        <div class="email py-4">
            <label for="street">Street Address *</label>
            <br>
            <input type="text" id="street" name="street" value="">
        </div>
        <div class="email py-4">
            <label for="city">City *</label>
            <br>
            <input type="text" id="city" name="city" value="">
        </div>
        <div class="email py-4">
            <label for="state">State *</label>
            <br>
            <input type="text" id="state" name="state" value="">
        </div>
        <div class="email py-4">
            <label for="zip_code">Post Code *</label>
            <br>
            <input type="text" id="zip_code" name="zip_code" value="">
        </div>
        <div class="email py-4">
            <label for="phone">Phone *</label>
            <br>
            <input type="text" id="phone" name="phone" value="">
        </div>

        

        <div class="add-addrs my-4">
            <button type="submit">Save Changes</button>
        </div>
    </form>
      </div>
    </div>
</section>
@endsection



