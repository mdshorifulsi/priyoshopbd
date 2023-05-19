<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Payment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function checkout() {

        $carts=Cart::where('user_ip',request()->ip())->latest()->get();

       $subtotal=Cart::all()->where('user_ip',request()->ip())->sum(
        function($total){

          return $total->price*$total->qty;
        });

       $payment=Payment::get();
        return view('pages.checkout.index',compact('carts','subtotal','payment'));
    }
}
