<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $productValidate = $request->validate(
            [
                'productName' => 'required ||min:4',
                'productDetails' => 'required ||min:5',
                'productQuantity' => 'required ||numeric',
                'productPrice' => 'required ||numeric',
                'productImage' => 'required',
            ]
        );
        if ($productValidate){
            $uploadProduct = new Product();
            $uploadProduct->productId = rand(9999,1111);
            $uploadProduct->productName = $request->productName;
            $uploadProduct->details = $request->productDetails;
            $uploadProduct->quantity = $request->productQuantity;
            $uploadProduct->price = $request->productPrice;
            $uploadProduct->status = $request->ProductStatus;
            if ($request->hasFile('productImage')){
                $fileName = $request->productImage->getClientOriginalName();
                $imageUrl = $request->productImage->storeAs('public/product_image',$fileName);

                $uploadProduct->image = 'storage/product_image/'.$fileName;
            }
            $uploadProduct->save();
            return back()->with('uploaded','Product has been uploaded');
        }
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
