@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('style')

    <link rel="stylesheet" href="/styles/contact-us.css">


@endsection

@section('content')

<section class="contact-img ">
    <div class="image">

    </div>
</section>
<section class="contact-s my-5">
    <div class="my-contact">
        <div class="title mb-4">
            <h2>Contact Us</h2>
        </div>
        <div class="paragraph">
            <p>Whether it’s an enquiry about a current order, our flower school or event our team of experts are here to help and will respond as soon as possible. </p>
        </div>
        <div class="info my-4">
            <div class="phone"><p>Call : <a href="tel:212632426807">+212632426807</a></p></div>
            <div class="email"><p>Email:info@thegardenhouse.com</p></div>
        </div>
        <div class="contact-form">
            <form action="{{ route('sendEmail') }}" method="post">
                @csrf
                <div class="f-name mb-4">
                    <input type="text" id="subject" name="subject" placeholder="subject">
                </div>
                <div class="f-email mb-4">
                    <input type="email" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="f-phone mb-4">
                    <input type="text" id="phone" name="phone" placeholder="Phone Number">
                </div>
                <div class="f-message mb-4">
                    <textarea name="message" id="message" cols="30" rows="3" placeholder="Your Message"></textarea>
                </div>
                <div class="confirm mb-4">
                        <button >Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection



