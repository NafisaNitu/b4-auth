@extends('master')

@section('title')
    Edit Product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Category</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" value="{{ $product->category_name }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Brand Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name" class="form-control" value="{{ $product->brand_name }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="product_price" class="form-control" value="{{ $product->product_price }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="product_image" class="form-control-file" />
                                        <img src="{{ asset($product->product_image) }}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Description</label>
                                    <div class="col-md-8">
                                        <textarea name="product_description" class="form-control" id="" cols="30" rows="2">{{ $product->product_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $product->status == 1 ? 'checked' : '' }} value="1" /> Published</label>
                                        <label for=""><input type="radio" name="status" {{ $product->status == 0 ? 'checked' : '' }} value="0" /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Update Product" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
