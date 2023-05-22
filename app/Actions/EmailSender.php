<?php

namespace App\Actions;

use Mail;

class EmailSender
{

    public function createProduct($product)
    {
        Mail::send('mail.create-product', $product->toArray(),function ($message){
            $message->to('admin@example.com')
                ->subject('ایجاد محصول جدید');
        });
    }
}
