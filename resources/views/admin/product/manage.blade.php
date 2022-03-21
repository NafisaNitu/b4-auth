@extends('admin.master')

@section('title')
    Add Product
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
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($products as $product)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->category_name }}</td>
                                        <td>{{ $product->brand_name }}</td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>
                                            <img src="{{ asset($product->product_image) }}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{!! substr_replace( $product->product_description, '<a href="https://google.com" class="btn btn-success" target="_blank"> read more...</a>', 60) !!}</td>
                                        <td>{{ $product->product_status == 1 ? 'Publishd' : 'Unpublished' }}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
