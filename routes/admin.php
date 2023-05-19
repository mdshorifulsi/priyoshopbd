<?php

use Illuminate\Support\Facades\Route;




Route::get('/admin-login', [App\Http\Controllers\Admin\AdminController::class, 'adminloginForm'])->name('admin.login.form');
Route::post('/admin-login', [App\Http\Controllers\Admin\AdminController::class, 'admin_login'])->name('admin.login');

Route::get('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

	Route::get('dashboard', 'AdminController@admin_dashboard')->name('admin.dashboard');

// Category Route
	Route::get('category', 'CategoryController@index')->name('category.index');
	Route::get('category-create', 'CategoryController@create')->name('category.create');
	Route::post('category-store', 'CategoryController@store')->name('category.store');
	Route::get('category.edit/{id}', 'CategoryController@edit')->name('category.edit');
	Route::post('category.update{id}', 'CategoryController@update')->name('category.update');
	Route::get('category.delete{id}', 'CategoryController@destroy')->name('category.delete');
	Route::get('category.inactive{id}', 'CategoryController@inactive')->name('category.inactive');
	Route::get('category.active{id}', 'CategoryController@active')->name('category.active');

	//subcategory route...
	Route::get('subcategory', 'SubCategoryController@index')->name('subcategory.index');
	Route::get('subcategory-create', 'SubCategoryController@create')->name('subcategory.create');
	Route::post('subcategory-store', 'SubCategoryController@store')->name('subcategory.store');
	Route::get('subcategory.edit/{id}', 'SubCategoryController@edit')->name('subcategory.edit');
	Route::post('subcategory.update/{id}', 'SubCategoryController@update')->name('subcategory.update');
	Route::get('subcategory.delete{id}', 'SubCategoryController@destroy')->name('subcategory.delete');

	//Brand route...
	Route::get('brand', 'BrandController@index')->name('brand.index');
	Route::get('brand-create', 'BrandController@create')->name('brand.create');
	Route::post('brand-store', 'BrandController@store')->name('brand.store');
	Route::get('brand.edit/{id}', 'BrandController@edit')->name('brand.edit');
	Route::post('brand.update{id}', 'BrandController@update')->name('brand.update');
	Route::get('brand.delete{id}', 'BrandController@destroy')->name('brand.delete');
	Route::get('brand.inactive{id}', 'BrandController@inactive')->name('brand.inactive');
	Route::get('brand.active{id}', 'BrandController@active')->name('brand.active');

//product route...
	Route::get('product', 'ProductController@index')->name('product.index');
	Route::get('product-create', 'ProductController@create')->name('product.create');
	Route::post('product-store', 'ProductController@store')->name('product.store');
	Route::get('product.edit/{id}', 'ProductController@edit')->name('product.edit');
	Route::post('product.update{id}', 'ProductController@update')->name('product.update');
	Route::get('product.delete{id}', 'ProductController@destroy')->name('product.delete');
	Route::get('product.inactive{id}', 'ProductController@inactive')->name('product.inactive');
	Route::get('product.active{id}', 'ProductController@active')->name('product.active');
	Route::get('/get/subcategory/{category_id}', 'ProductController@getsubcat')->name('getsubcat');

//slider route...
	Route::get('slider', 'SliderController@index')->name('slider.index');
	Route::get('slider-create', 'SliderController@create')->name('slider.create');
	Route::post('slider-store', 'SliderController@store')->name('slider.store');
	Route::get('slider.edit/{id}', 'SliderController@edit')->name('slider.edit');
	Route::post('slider.update{id}', 'SliderController@update')->name('slider.update');
	Route::get('slider.delete{id}', 'SliderController@destroy')->name('slider.delete');
	Route::get('slider.inactive{id}', 'SliderController@inactive')->name('slider.inactive');
	Route::get('slider.active{id}', 'SliderController@active')->name('slider.active');

//coupon route...
	Route::get('coupon', 'CouponController@index')->name('coupon.index');
	Route::get('coupon-create', 'CouponController@create')->name('coupon.create');
	Route::post('coupon-store', 'CouponController@store')->name('coupon.store');
	Route::get('coupon.edit/{id}', 'CouponController@edit')->name('coupon.edit');
	Route::post('coupon.update{id}', 'CouponController@update')->name('coupon.update');
	Route::get('coupon.delete{id}', 'CouponController@destroy')->name('coupon.delete');
	Route::get('coupon.inactive{id}', 'CouponController@inactive')->name('coupon.inactive');
	Route::get('coupon.active{id}', 'CouponController@active')->name('coupon.active');

//payment route...
	Route::get('payment', 'PaymentController@index')->name('payment.index');
	Route::get('payment-create', 'PaymentController@create')->name('payment.create');
	Route::post('payment-store', 'PaymentController@store')->name('payment.store');
	Route::get('payment.edit/{id}', 'PaymentController@edit')->name('payment.edit');
	Route::post('payment.update{id}', 'PaymentController@update')->name('payment.update');
	Route::get('payment.delete{id}', 'PaymentController@destroy')->name('payment.delete');

	//coupon route...
	Route::get('order', 'OrderController@order_manage')->name('manage.order');

});