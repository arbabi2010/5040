<?php

namespace App\Http\Controllers;

use App\Actions\Cart;
use App\Actions\ProductAction;
use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function addToCart($id, Cart $cart)
    {
        $product = Product::findOrFail($id);

        if ($product->stock <= 0) {
            return back()->with('error', 'محصول نا موجود می باشد');
        }

        $cart->add($id, [
            'name' => $product->title,
            'price' => $product->price
        ]);


        app(ProductAction::class)->decrementStock($product);

        return back()->with('success', 'محصول به سبد خرید اضافه شد.');
    }

    public function deleteFromCart($id, Cart $cart)
    {
        $item = $cart->removeItem($id);

        if ($item['stock'] > 0) {
            $product = Product::find($id);
            app(ProductAction::class)->incrementStock($product, $item['stock']);
        }

        return back()->with('success', 'محصول از سبد خرید حذف شد');

    }
}
