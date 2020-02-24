@extends('Dashboard.Dashboard')
@section('dashboard_content')
    <div class="row mt-5 __web-inspector-hide-shortcut__">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="text-white mb-0">Product Table</h3>
                        </div>
                        <div class="col-md-5 ml-auto">
                            <a href="{{'/add-product'}}" class="btn btn-info btn-sm px-5 py-2">Add Product</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach (\App\Model\Product::all() as $product)
                        <tr>
                            <th scope="row">
                                <img src="{{$product->image}}" height="50" width="50" alt="">
                            </th>
                            <td>
                                <strong>{{$product->productName}}</strong>
                            </td>
                            <td>
                                <span>{{$product->price}} tk</span>
                            </td>
                            <td>
                                @if ($product->status == 1)
                                    <a class="" href="" >
                                        <span class="btn btn-success btn-sm">Active</span>
                                    </a>
                                    @else
                                    <a class="" href="" >
                                        <span class="btn btn-danger btn-sm">Unactive</span>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <a href="" class="">
                                    <span class="btn btn-warning btn-sm">Edit</span>
                                </a>
                                <a href="" class="">
                                    <span class="btn btn-danger btn-sm">Delete</span>
                                </a>
                                <a href="" class="">
                                    <span class="btn btn-info btn-sm">View</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

