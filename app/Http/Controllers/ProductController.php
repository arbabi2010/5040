<?php

namespace App\Http\Controllers;

use App\Actions\EmailSender;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }
    public function store(ProductRequest $request,EmailSender $emailSender)
    {
        $product = Product::create($request->validated());

        $emailSender->createProduct($product);

        return redirect('/')->with('success','ایجاد محصول با موفقیت انجام شد.');
    }
}
