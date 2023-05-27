@extends('layouts.clientdash')



@section('styledash')
<link rel="stylesheet" href="/styles/edit-account.css">
@endsection



@section('dashcontent')

<section class="my-5">
    <div class="container">
        @error('current_password')  
          <div >
             {{ $message }}
         </div>
        @enderror
        @error('password')  
          <div >
             {{ $message }}
         </div>
        @enderror
      <div class="edit-account">
        <form action="{{ route('updatedetails') }}" method="post">
            @csrf
            @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="fname">
                    <label for="fname">First Name*</label>
                    <br>
                    <input type="text" id="fname" name="first_name" value="{{ $first_name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="fname">
                    <label for="lname">Last Name*</label>
                    <br>
                    <input type="text" id="lname" name="last_name" value="{{ $last_name }}">
                </div>
            </div>
        </div>
        <div class="email py-4">
            <label for="email">Email address *</label>
            <br>
            <input type="email" id="email" name="email" value="{{ auth()->user()->email }}">
        </div>

        <fieldset>
            <legend>Password change</legend>
        <div class="password-change">
            <div class="password py-3">
                <label for="current_password">Current password (leave blank to leave unchanged)</label>
                <br>
                <input type="password" id="current_password" name="current_password">
            </div>
            <div class="password py-3">
                <label for="password">New password (leave blank to leave unchanged)</label>
                <br>
                <input type="password" id="password" name="password">
            </div>
            <div class="password py-3">
                <label for="password_confirmation">Confirm new password</label>
                <br>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
        </div>
        </fieldset>

        <div class="add-addrs my-4">
            <button type="submit">Save Changes</button>
        </div>
    </form>
      </div>
    </div>
</section>
@endsection













