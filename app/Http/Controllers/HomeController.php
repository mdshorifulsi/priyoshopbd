<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use File;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category =Category::orderBy('id', 'DESC')->get();
        $subcategory =SubCategory::latest()->get();
        $brand =Brand::latest()->get();
        $product =Product::latest()->get();
        $slider = Slider::where('status',1)->limit(3)->latest()->get();
        return view('pages.index',compact('product','category','subcategory','brand','slider'));
    }


    public function product_by_category($id){

        $product_by_category=find($id);
    }

    }

