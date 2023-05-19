<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Coupon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function addToCatr(Request $request,$id){

        $check=cart::where('product_id',$id)->where('user_ip',request()->ip())->first();
        if($check){
            cart::where('product_id',$id)->where('user_ip',request()->ip())->increment('qty');
        }else{

        $cart=new Cart;
        $cart->product_id=$id;
        $cart->qty=1;
        $cart->price=$request->price;
        $cart->user_ip=request()->ip();
        $cart->save();
        }
        Toastr::success('Product is successfully Add to cart:','success');
        return redirect()->route('home');

    }

    public function cart(){

        $carts=Cart::where('user_ip',request()->ip())->latest()->get();

       $subtotal=Cart::all()->where('user_ip',request()->ip())->sum(
        function($total){

          return $total->price*$total->qty;
        });

        return view('pages.cart.index',compact('carts','subtotal'));

    }


    public function cart_remove($id) {

        $carts=Cart::where('id',$id)->where('user_ip',request()->ip())->delete();

        Toastr::error('Product item  delete successfully:','deleted');
        return redirect()->route('cart');

    }

    public function cartUpdate(Request $request,$id){

        Cart::where('id',$id)->where('user_ip',request()->ip())->update([
            'qty'=> $request->qty,
        ]);
        Toastr::success('Product update successfully:','deleted');
        return redirect()->route('cart');


    }
       
}
