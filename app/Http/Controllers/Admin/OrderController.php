<?php

namespace App\Http\Controllers\Admin;

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
    
    public function order_manage(){

        $order=Order::get();
        $orderItem=Order_item::get();
        $shipping=Shipping::get();

        return view('admin.order.manage_order',compact('order','orderItem','shipping'));
    }

}
