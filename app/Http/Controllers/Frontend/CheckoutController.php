<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $data = [];
        $data['page_title'] = "Checkout";

        $data['cartItems'] = \Cart::getContent();

        return view('checkout', $data);
    }
}
