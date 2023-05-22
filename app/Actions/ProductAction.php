<?php

namespace App\Actions;

use App\Models\Product;

class ProductAction
{

    public function incrementStock(Product $product,$stock=1)
    {
        $product->increment('stock', $stock);
        $product->save();
    }
    public function decrementStock(Product $product,$stock=1)
    {
        $product->decrement('stock', $stock);
        $product->save();
    }
}
