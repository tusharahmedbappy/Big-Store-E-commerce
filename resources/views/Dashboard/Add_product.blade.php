@extends('Dashboard.Dashboard')
@section('dashboard_content')
    <div class="card card-body border">
        <div class="container">
            <div class="card card-header bg-gradient-gray-dark">
                <h3 class="text-light">Add Product</h3>
            </div>
            <hr>
            <span class="text-success">
                <strong>
                    @if (session('uploaded'))
                        {{session('uploaded')}}
                    @endif
                </strong>
            </span>
            <form action="{{url('/product-add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="productName"><h5>Product Name</h5></label>
                            <input type="text" name="productName" id="productName" class="form-control form-control-sm" placeholder="Product">
                            <small class="text-danger">
                                @error('productName')
                                <b>{{$message}}</b>
                                @enderror
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="productDetails"><h5>Product Details</h5></label>
                            <input type="text" name="productDetails" id="productDetails" class="form-control form-control-sm" placeholder="Details">
                            <small class="text-danger">
                                @error('productDetails')
                                <b>{{$message}}</b>
                                @enderror
                            </small>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="productQuantity"><h5>Product Quantity</h5></label>
                                    <input type="number" name="productQuantity" id="productQuantity" class="form-control form-control-sm" placeholder="Quantity">
                                    <small class="text-danger">
                                        @error('productQuantity')
                                        <b>{{$message}}</b>
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="productPrice"><h5>Product Price</h5></label>
                                    <input type="number" name="productPrice" id="productPrice" class="form-control form-control-sm" placeholder="Price">
                                    <small class="text-danger">
                                        @error('productPrice')
                                        <b>{{$message}}</b>
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="ProductStatus" value="1" id="ProductStatus">
                            <label for="ProductStatus"><h5>Published</h5></label>
                            <small class="text-danger">
                                @error('ProductStatus')
                                <b>{{$message}}</b>
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-body ">
                            <div class="form-group">
                                <label for="ProductImage"><h5 class="text-dark">Product Image</h5></label>
                                <input type="file" name="productImage" id="ProductImage" class="form-control">
                                <small class="text-danger">
                                    @error('productImage')
                                    <b>{{$message}}</b>
                                    @enderror
                                </small>
                            </div>

                            <div class="my-5">
                                <button class="btn btn-success btn-block">Add Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


