<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function checkout()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->id);
            if ($product->quantity < $item->qty) {
                toast('Bạn chỉ có thể đặt tối đa '.$product->quantity.' sản phẩm '.$product->name, 'error');

                return redirect()->back();
            }
        }

        return view('customer.checkout');
    }
}
