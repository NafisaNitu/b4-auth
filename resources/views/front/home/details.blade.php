<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/') }}admin-assets/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
        </ul>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <div>
                   <img src="{{ asset($product->product_image) }}" class="img-fluid" alt="">
               </div>
            </div>
                <div class="col-md-6">
                    <h2 class="font-weight-bold">Product Name: <span class="font-weight-light">{{ $product->product_name }}</span> </h2>
                    <h2 class="font-weight-bold">Category Name: <span class="font-weight-light">{{ $product->category_name }} </span></h2>
                    <h2 class="font-weight-bold">Brand Name: <span class="font-weight-light">{{ $product->brand_name }} </span></h2>
                    <h2 class="font-weight-bold">Product Price: <span class="font-weight-light"> {{ $product->product_price }} </span></h2>
                </div>

            <div class="row">
                <div class="col-md-12">
                   <div>
                       {!! $product->product_description !!}
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{ asset('/') }}admin-assets/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}admin-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

