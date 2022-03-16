@extends('master')

@section('title')
    Manage Product
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Product</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category Name</th>
                                        <th>brand Name</th>
                                        <th>Product Price</th>
                                        <th>Product Image</th>
                                        <th>Product Description</th>
                                        <th>Product Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->category_name }}</td>
                                            <td>{{ $product->brand_name }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>
                                                <img src="{{ asset($product->product_image) }}" style="height: 100px;width: 100px;" alt="">
                                            </td>
                                            <td>{{ $product->product_description }}</td>
                                            <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                            <td>
                                                <a href="{{ route('product-status',['productId'=>$product->id]) }}" class="btn btn-{{ $product->status == 1 ? 'primary' : 'secondary' }} btn-sm">Status</a>
                                                <a href="{{ route('product-edit',['productId'=>$product->id]) }}" class="btn btn-info btn-sm">edit</a>
{{--                                                <i class="fa-solid fa-trash"></i>--}}
                                                <a href="{{ route('delete-product',['productId'=>$product->id]) }}" class="btn btn-danger btn-sm" onclick="confirm('Are you sure to delete this?')">del</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
