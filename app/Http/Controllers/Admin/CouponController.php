<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class CouponController extends Controller
{
    public function index()
    {

        $coupon = Coupon::latest()->get();
        return view('admin.coupon.index', compact('coupon'));

    }

    public function create()
    {

        return view('admin.coupon.create');
    }

    public function store(Request $request)
    {

        $coupon = new Coupon;
        $coupon->coupon_name = $request->coupon_name;
        $coupon->discount = $request->discount;
        
        $coupon->save();
        return redirect()->route('coupon.index');



    }

    public function edit($id)
    {

        $coupon = Coupon::find($id);
        return view('admin.coupon.edit', compact('coupon'));



    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->coupon_name = $request->coupon_name;
        $coupon->discount = $request->discount;
        
        $coupon->save();
        return redirect()->route('coupon.index');


    }

    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->route('coupon.index');


    }

     public function inactive($id){

        $coupon=Coupon::where('id',$id)
            ->update(['status'=>0]);
       return redirect()->route('coupon.index');
    }

        public function active($id){

        $coupon=Coupon::where('id',$id)
            ->update(['status'=>1]);
       return redirect()->route('coupon.index');
    }




}
