<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Customer;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function customerlogin(Request $request){

       

        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {

            Session::put('customer',[
                    'name'=>$request->coupon_name,
                    'id'=>$request->id,
                    
                                    ]);

            Toastr::success('customer login successfully :','login');
            return redirect()->route('home');

        } else {

        Toastr::error('invalid password :','invalid');
        return redirect()->back();


        }
    }


    public function customerlogout(Request $request){

        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }


    public function customer_registration(){

        return view('pages.customer.register');
    }


    public function register_store(Request $request){

        $register=new Customer;
        $register->name=$request->name;
        $register->email =$request->email ;
        $register->password=Hash::make($request->password);
        $register->phone_number=$request->phone_number;
        $register->save();
        return redirect()->route('home');
          Toastr::success('customer register successfully :','success');


    }
}
