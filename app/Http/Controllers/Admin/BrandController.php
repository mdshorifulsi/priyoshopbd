<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {

        $brand = Brand::latest()->get();
        return view('admin.brand.index', compact('brand'));

    }

    public function create()
    {

        return view('admin.brand.create');
    }

    public function store(Request $request)
    {

        $brand = new Brand;
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = Str::slug($request->brand_name);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $brand->logo = $request->file('logo')->move("images/logo", $name);
        }


        $brand->save();
        Toastr::success('Brand successfully Saved:','success');
        return redirect()->route('brand.index');



    }

    public function edit($id)
    {

        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));



    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->cat_name = $request->brand_name;
        $brand->cat_slug = Str::slug($request->brand_name);
        $brand->save();
        return redirect()->route('brand.index');


    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $logo=$brand->logo;
        if(!is_null($brand)) 
        {
            $brand->delete();
        }
        unlink($logo);
        return redirect()->route('brand.index');

    }

    public function inactive($id){

        $brand=Brand::where('id',$id)
            ->update(['status'=>0]);
       return redirect()->route('brand.index');
    }

        public function active($id){

        $brand=Brand::where('id',$id)
            ->update(['status'=>1]);
       return redirect()->route('brand.index');
    }

  
}