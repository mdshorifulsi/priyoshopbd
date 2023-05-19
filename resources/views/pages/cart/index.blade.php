@extends('layouts')
@section('content')
@section('title','carts')

<div class="main">
  <div class="container">
    <div class="row margin-bottom-40">
      <div class="col-md-9 col-sm-9">
        <h1>Shopping cart</h1>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                  <table summary="Shopping cart">
                    <tr>
                      <th class="goods-page-image">Image</th>
                      <th class="goods-page-description">Description</th>
                      <th class="goods-page-price">Unit price</th>
                      <th class="goods-page-quantity">Quantity</th>
                      <th class="goods-page-quantity">Total Price</th>
                      <th class="goods-page-quantity">Action</th>
                    </tr>
                    @foreach($carts as $carts)
                    <tr>
                      <td class="goods-page-image">
                        <a href="javascript:;"><img src="{{ asset($carts->product->product_image) }}" alt="Berry Lace Dress"></a>
                      </td>
                    <td class="goods-page-description">
                      <h3>
                        <a href="javascript:;">{{$carts->product->product_name}}
                        </a>
                      </h3>
                      <p>
                        <strong>Item {{$carts->qty}}</strong>
                      </p>
                      <em>weight: {{$carts->product->weight}}kg</em>
                    </td>
                    <td class="goods-page-price">
                      <strong>{{$carts->price}}<span>Taka</span></strong>
                    </td>
                    <td class="goods-page-quantity">
                      <div>
                        <form action="{{route('cartUpdate',$carts->id)}}" method="post">
                          @csrf
                          <input id="product-quantity" type="number" name="qty" value="{{$carts->qty}}" min="1">
                         <button class="btn btn btn-success" >update</button>
                         </form>
                      </div>
                    </td>    
                    <td class="goods-page-total">
                      <strong>{{$carts->price * $carts->qty}}<span> Taka</span></strong>
                    </td>
                    <td class="del-goods-col">
                      <a class="del-goods" href="{{route('cart.remove',$carts->id)}}">&nbsp;</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
            <a href="{{route('home')}}"> <button class="btn btn-default" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button></a>
           </div>
         </div>

         
<div class="col-md-3 col-sm-3">
          <h2>Cart total</h2>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="shopping-total">
                  <ul>
                    @if(Session::has('coupon'))
                    <li>
                      <em>Sub total</em>
                      <strong class="price"> {{$subtotal}}
                        <span>Taka</span></strong>
                    </li>

                  

                    <li>
                      <em>Shipping </em>
                      <strong class="price">{{Session()->get('coupon')['coupon_name']}} <span><button><a href="{{route('coupon_remove')}}">X</a></button></span></strong>
                    </li>



                    <li>
                      <em>Discount</em>
                      <strong class="price"> {{Session()->get('coupon')['discount']}} % 
                        ({{ $discount= $subtotal*Session()->get('coupon')['discount']/100
                      }} )<span>Taka</span></strong>

                    </li>
                    <li>
                      <em>Shipping </em>
                      <strong class="price">50 <span>Taka</span></strong>
                    </li>

                    <li>
                      <em>total</em>
                      <strong class="price">{{$subtotal-$discount+50}}
                        <span>Taka</span></strong>
                    </li>

                  @else
                   <li>
                      <em>Sub total</em>
                      <strong class="price"> {{$subtotal}}
                        <span>Taka</span></strong>
                    </li>

                    <li>
                      <em>Shipping </em>
                      <strong class="price">50 <span>Taka</span></strong>
                    </li>
                    <li>
                      <em>Total</em>
                      <strong class="price"> {{$subtotal+50}}<span>Taka</span></strong>
                    </li>

                    @endif
                    
                  </ul>
                </div>
              </div>
            

            </div>
            @if(Session::has('coupon'))
            @else
            <form action="{{route('couponApply')}}" method="post">
              @csrf
            <input type="text" placeholder="coupon name" name="coupon_name"><button>Apply</button>
            </form>
            @endif

            <hr>
            <a href="{{route('checkout')}}"> <button class="btn btn-default" type="submit">Checkout <i class="fa fa-shopping-cart"></i></button></a>

          </div>

            </div>


            

          </div>
       </div>

       
    
   @endsection