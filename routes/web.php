<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product_by_category', [App\Http\Controllers\HomeController::class, 'product_by_category'])->name('product_by_category');


Route::post('/customer-login', [App\Http\Controllers\Frontend\CustomerController::class, 'customerlogin']);
Route::get('/customer-logout', [App\Http\Controllers\Frontend\CustomerController::class, 'customerlogout']);

Route::get('/customer_registration', [App\Http\Controllers\Frontend\CustomerController::class, 'customer_registration']);

Route::post('/customer.register.store', [App\Http\Controllers\Frontend\CustomerController::class, 'register_store'])->name('customer.register.store');


Route::group(['prefix' => 'cart', 'namespace' => 'App\Http\Controllers\Frontend'], function () {

// cart Route
    Route::post('addToCatr/{id}', 'CartController@addToCatr')->name('addToCatr');
    Route::get('cart', 'CartController@cart')->name('cart');
    Route::get('cart.remove{id}', 'CartController@cart_remove')->name('cart.remove');
    Route::post('cartUpdate{id}', 'CartController@cartUpdate')->name('cartUpdate');

    // coupon apply
    Route::post('couponApply', 'CartController@couponApply')->name('couponApply');



});

Route::group(['prefix' => 'coupon', 'namespace' => 'App\Http\Controllers\Frontend'], function () {

    // coupon apply
    Route::post('couponApply', 'CouponController@couponApply')->name('couponApply');

    Route::get('coupon_remove', 'CouponController@coupon_remove')->name('coupon_remove');
});

Route::group(['prefix' => 'checkout', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('checkout', 'CheckoutController@checkout')->name('checkout');

});

Route::group(['prefix' => 'order', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::post('store', 'OrderController@order_store')->name('order.store');
});

Route::get('/all/cart', [App\Http\Controllers\Frontend\CartController::class, 'all_cart'])->name('all/cart');