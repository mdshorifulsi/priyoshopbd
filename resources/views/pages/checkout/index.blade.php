@extends('layouts')
@section('content')
@section('title','checkout')
<div class="main">
  <div class="container">
    <form action="{{route('order.store')}}" method="POST" enctype="multipart/form-data" >
      @csrf
    <div class="row margin-bottom-40">
      <div class="col-md-9 col-sm-9">
        <h1>Shipping Address</h1>
        
          <div class="row mb-3">
            <div class="col-md-5">
              <div class="form-floating mb-3 mb-md-0">
                <label for="inputFirstName"> Shipping Name</label>
                <input class="form-control" id="name" name="shipping name" type="text" placeholder="shipping name"/>
              </div>
              <div class="form-floating mb-3 mb-md-0">
                <label for="inputFirstName">Email(optional)</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Email (optional)"/>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-floating mb-3 mb-md-0">
                <label for="inputFirstName">phone number</label>
                <input class="form-control" id="phone" name="phone" type="number" placeholder=" phone number"/>
              </div>
              <div class="form-floating mb-3 mb-md-0">
                <label for="inputFirstName">address</label>
                <input class="form-control" id="shipping_address" name="shipping_address" type="text" placeholder=" shipping address"/>
              </div>
            </div>
          </div>
       
      </div>
      <div class="col-md-3 col-sm-3">
        <h2>Your Order</h2>
        <div class="shopping-total">
          <ul>
            @if(Session::has('coupon'))
            <li>
              <em>Sub total</em>
              <strong class="price"> {{$subtotal}}<span>Taka</span>
              </strong>
              <input type="text" name="subtotal" value="{{$subtotal}}">
            </li>
            <li>
              <em>Shipping </em>
              <strong class="price">{{Session()->get('coupon')['coupon_name']}} <span><button><a href="{{route('coupon_remove')}}">X</a></button></span></strong>
            </li>
            <li>

              <em>Discount</em>
              <strong class="price"> {{Session()->get('coupon')['discount']}} % ({{ $discount= $subtotal*Session()->get('coupon')['discount']/100
                      }} )<span>Taka</span>
              </strong>

              <input type="text" name="discount" value="{{Session()->get('coupon')['discount']}}">
            </li>
            <li>
              <em>Shipping </em>
              <strong class="price">50 <span>Taka</span></strong>
            </li>
            <li>
              <em>total</em>
              <strong class="price">{{$subtotal-$discount+50}}
                <span>Taka</span></strong>
                <input type="text" name="total" value="{{$subtotal-$discount+50}}">
              </li>


              @else


              <li>
                <em>Sub total</em>
                <strong class="price"> {{$subtotal}}<span>Taka</span></strong>
                <input type="text" name="subtotal" value="{{$subtotal}}">
              </li>
              <li>
                <em>Shipping </em>
                <strong class="price">50 <span>Taka</span></strong>
              </li>
              <li>
                <em>Total</em>
                <strong class="price"> {{$subtotal+50}}<span>Taka</span>
                </strong>
                <input type="text" name="total" value="{{$subtotal+50}}">
              </li>
            </ul>
            @endif
            <hr>
            <div class="form-floating mb-3 mb-md-0">
              <select class="form-control" name="payment_id">
                <option> >> Select payment system</option>
                @foreach($payment as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
              </select>
            </div>
            <br>
            <div class="card-footer">
              <button type="submit" class="btn btn-danger float-sm-right" >Place order </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
  @endsection
