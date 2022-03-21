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
                <div class="col-md-12">
                    <h2 class="text-center font-weight-bold">All Products</h2>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <a href="{{ route('product-details', ['id' => $product->id]) }}">
                                    <div class="card">
                                    <img src="{{ asset($product->product_image) }}" class="card-img-top" style="height: 300px" alt="">
                                    <div class="card-body">
                                        <p>Product Name: {{ $product->product_name }}</p>
                                        <p>Category Name: {{ $product->category_name }}</p>
                                        <p>Brand Name: BD {{ $product->brand_name }}</p>
                                        <p>Product price: {{ $product->product_price }}</p>
                                        <a href="{{ route('product-details', ['id' => $product->id]) }}" class="btn btn-outline-success float-right">Read more</a>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('/') }}admin-assets/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
