@extends('layouts.clientdash')




@section('styledash')
<link rel="stylesheet" href="/styles/edit-account.css">
@endsection


@section('dashcontent')

<section class="my-5">
    <div class="container">
        
      <div class="edit-account">
        <form action="{{ route('storeupdateadresse', $addresse->id) }}" method="post">
            @csrf
            @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="fname">
                    <label for="fname">First Name*</label>
                    <br>
                    <input type="text" id="fname" name="first_name" value="{{ $addresse->first_name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="fname">
                    <label for="lname">Last Name*</label>
                    <br>
                    <input type="text" id="lname" name="last_name" value="{{ $addresse->last_name }}">
                </div>
            </div>
        </div>
        <div class="email py-4">
            <label for="street">Street Address *</label>
            <br>
            <input type="text" id="street" name="street" value="{{ $addresse->street }}">
        </div>
        <div class="email py-4">
            <label for="city">City *</label>
            <br>
            <input type="text" id="city" name="city" value="{{ $addresse->city }}">
        </div>
        <div class="email py-4">
            <label for="state">State *</label>
            <br>
            <input type="text" id="state" name="state" value="{{ $addresse->state }}">
        </div>
        <div class="email py-4">
            <label for="zip_code">Post Code *</label>
            <br>
            <input type="text" id="zip_code" name="zip_code" value="{{ $addresse->zip_code }}">
        </div>
        <div class="email py-4">
            <label for="phone">Phone *</label>
            <br>
            <input type="text" id="phone" name="phone" value="{{ $addresse->phone }}">
        </div>

        

        <div class="add-addrs my-4">
            <button type="submit">Save Changes</button>
        </div>
    </form>
      </div>
    </div>
</section>
@endsection



