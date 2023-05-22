<?php

namespace App\Actions;

use App\Models\Product;

class Cart
{
    public function content()
    {
        return session('cart');
    }

    public function add($id, $data)
    {
        $cart = $this->content();


        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'name' => $data['name'],
                'price' => $data['price'],
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

    }

    public function removeItem($id)
    {
        $cart = $this->content();
        $stock = 0;
        if (isset($cart[$id])) {

            $stock = $cart[$id]['quantity'];

            unset($cart[$id]);

            session()->put('cart', $cart);

        }

        return ['id' =>$id,'stock'=>$stock];

    }

    public function total()
    {
        $carts = $this->content();

        return collect($carts)->sum(fn($cart) => $cart['price'] * $cart['quantity']);

    }
}
