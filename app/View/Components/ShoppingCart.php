<?php

namespace App\View\Components;

use App\Actions\Cart;
use Illuminate\View\Component;

class ShoppingCart extends Component
{
    /**
     * @var Cart|(Cart&\Illuminate\Contracts\Foundation\Application)|\Illuminate\Contracts\Foundation\Application|mixed
     */
    private mixed $cart;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cart = app(Cart::class);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $carts = $this->cart->content();
        $total_price = $this->cart->total();
        return view('components.shopping-cart',compact('carts','total_price'));
    }
}
