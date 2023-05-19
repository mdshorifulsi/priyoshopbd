<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index()
    {

        $payment = Payment::latest()->get();
        return view('admin.payment.index', compact('payment'));

    }

    public function create()
    {

        return view('admin.payment.create');
    }

    public function store(Request $request)
    {

        $payment = new Payment;
        $payment->name = $request->name;
        $payment->save();
        return redirect()->route('payment.index');



    }

    public function edit($id)
    {

        $payment = Payment::find($id);
        return view('admin.payment.edit', compact('payment'));



    }

    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->name = $request->name;
        $payment->save();
        return redirect()->route('payment.index');


    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->route('payment.index');


    }

    

      
}
