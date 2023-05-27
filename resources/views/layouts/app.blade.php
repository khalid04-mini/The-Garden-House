<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/design.css">
    {{-- <link rel="stylesheet" href="/styles/product.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="/fontawesome-free-6.3.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome-free-6.3.0-web/css/brands.css" rel="stylesheet">
    <link href="/fontawesome-free-6.3.0-web/css/solid.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/flower.ico">
    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
    {{-- start header --}}
    <header class="">
        <div class="container-fluid head">
            <div class="logo pt-4 pb-2">
                <img src="/images/icon.png" alt="">
            </div>
            <div class="links pt-4 pb-2">
                <ul id="list">
                    <li><a  href="/" class="lign">Home</a></li>
                    <li><a href="/product-type/flowers">Flowers</a></li>
                    <li><a href="/product-type/plants">Plants</a></li>
                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                    @if ( url()->full()===route('products') )
                        
                    @else
                    <li class="carticon"><a class="icon" href="{{ route('cart') }}"><i class="fa-regular fa-cart-shopping"></i> </a> <span class="items">0</span>
                      <div id="cart">
                        <p>No products in the cart.</p>
                        
                      </div>
                    </li>
                    @endif
                    
                    <li><a class="" href="/my-account"><i class="fa-solid fa-user"></i> </a></li>
                </ul>
            </div>
        </div>
    </header>
    {{-- end header --}}

    @yield('content')

<!-- start footer -->

    <section class="foot">
        <div class="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="title">
                    <h1>The Garden House</h1>
                  </div>
                  <div class="address">
                    <p>Goddard Hall 80<br>
                      Washington Square E,<br>
                      New York, NY 10003, USA</p>
                  </div>
                  <div class="contact">
                    <p>
                      +44 (0) 207 739 1521 info@ferme.com
                      </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="links">
                    <ul>
                      <li><a href="{{ route('dashboard') }}"><p>My account</p></a></li>
                      <li><a href="{{ route('contactus') }}"><p>Contact Us</p></a></li>
                      <li><a href="{{ route('aboutus') }}"><p>About Us</p></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <p>Follow us</p>
                  <div class="social">
                    <span><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></span>
                    <span><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></span>
                    <span><a href="https://www.pinterest.com"><i class="fa-brands fa-pinterest"></i></a></span>
                    <span><a href="https://www.tiktok.com"><i class="fa-brands fa-tiktok"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>


<!-- end footer -->
<script src="/scripts/script.js"></script>
<script src="/scripts/cart.js"></script>
<script src="/scripts/cart-page.js"></script>


@yield('script')
</body>
</html>