<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Shipping;
use App\Models\Payment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Session;
use Auth;


class OrderController extends Controller
{
    public function order_store(Request $request){

        $order_id=Order::insertGetId([

            // 'customer_id'=>Auth::guard('customer')->user()->id,
            'user_ip'=>request()->ip(),
            'payment_id'=>$request->payment_id,
            'invoice_no'=>mt_rand(10000000,999999999),
            'subtotal'=>$request->subtotal,
            'coupon_discount'=>$request->discount,
            'total'=>$request->total,
            


        ]);

    $carts=Cart::where('user_ip',request()->ip())->latest()->get();

    foreach($carts as $cart){

        Order_item::insert([
                'order_id'=>$order_id,
                'product_id'=>$cart->product_id,
                'product_qty'=>$cart->qty,
              


        ]);
    }



        Shipping::insert([

            'order_id'=>$order_id,
            'shipping_name'=>$request->shipping_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'shipping_address'=>$request->shipping_address,
            'status'=>$request->status,

        ]);

        if(Session::has('coupon')){
            Session()->forget('coupon');
        }

        Cart::where('user_ip',request()->ip())->delete();

         Toastr::success('Your Order successfully done','Order Complate');
        return redirect()->route('home');


    }


    
}
