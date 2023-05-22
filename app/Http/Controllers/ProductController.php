<?php

namespace App\Http\Controllers;

use App\Actions\EmailSender;
use App\Http\Requests\ProductRequest;
use App\Mail\CreateProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

         (new CreateProduct($product))->render();


        return redirect('/')->with('success','ایجاد محصول با موفقیت انجام شد.');
    }
}
