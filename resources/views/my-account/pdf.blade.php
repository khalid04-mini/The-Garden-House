<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/design.css">
    {{-- <link rel="stylesheet" href="/styles/product.css"> --}}
    
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
  />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="/fontawesome-free-6.3.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome-free-6.3.0-web/css/brands.css" rel="stylesheet">
    <link href="/fontawesome-free-6.3.0-web/css/solid.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/flower.ico">
    <style>
        .table-order-details table {
            margin: 10px auto;
    width: 80%;
    font-family: "Montserrat",Sans-serif;
    font-size: 14px;
    line-height: 1.4em;
    font-weight: normal;
    }
    .table-order-details table thead th{
        padding-bottom: 15px;
        font-family: "Montserrat",Sans-serif;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.4em;
    }

    .table-order-details table tbody{
        font-family: "Montserrat",Sans-serif;
        font-size: 14px;
        /* font-weight: 600; */
        line-height: 1.4em;
    }

    .table-order-details table tbody tr{
        border-top: 1px solid #CED0BB;
    }
    .table-order-details table tbody td,th{
        padding: 24px 0;
    }


    .product-name{
        width: 75%;
    }

    .product-total{
        text-align: end;
    }

    .product-name a{
        text-decoration: none;
        color: #6A6E49;
        transition: 0.5s;
    }

    .product-name a:hover{
        text-decoration: none;
        color: black;
    }
    </style>
</head>
<body>
    <div class="table-order-details">
        <table>
            <thead>
                <tr>
                    <th class="product-name">Product</th>
                    <th class="product-total">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->detail_order as $key => $item  )
                <tr>
                    <td class="product-name"><a href="/product/{{ $item->product->slug }}">{{ $item->product->name }}</a> <strong>x {{ $item->quantity }}</strong></td>
                    <td class="product-total">{{ $item->product->price * $item->quantity }} MAD</td>
                </tr>
                @endforeach
                <tr>
                    <th class="product-name">Shipping Method:</th>
                    <th class="product-total">{{ $order->shipping_type ==='free_shipping' ? 'Free Shipping' :'Local Pickup'  }}</th>
                </tr>
                <tr>
                    <th class="product-name">Payment Method:</th>
                    <th class="product-total">Cash On Delivery</th>
                </tr>
                <tr>
                    <th class="product-name">Total:</th>
                    <th class="product-total">{{ $order->total }} MAD</th>
                </tr>                    
            </tbody>
        </table>
    </div>
</body>
</html>