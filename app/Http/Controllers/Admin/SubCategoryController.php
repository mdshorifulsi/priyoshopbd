<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    
    public function index()
    {

        $subcategory = SubCategory::latest()->get();
        return view('admin.subcategory.index', compact('subcategory'));

    }

    public function create()
    {
        $category=Category::get();
        return view('admin.subcategory.create',compact('category'));
    }

    public function store(Request $request)
    {

        $subcategory = new SubCategory;
        $subcategory->category_id= $request->category_id;
        $subcategory->subcat_name= $request->subcat_name;
        $subcategory->subcat_slug= Str::slug($request->subcat_name);
       
    


        $subcategory->save();
        Toastr::success('subcategory successfully Saved:','success');
        return redirect()->route('subcategory.index');



    }

    public function edit($id)
    {
        $category=Category::get();
        $subcategory = SubCategory::find($id);
        return view('admin.subcategory.edit', compact('subcategory','category'));



    }

    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->category_id= $request->category_id;
        $subcategory->subcat_name= $request->subcat_name;
        $subcategory->subcat_slug= Str::slug($request->subcat_name);
        $subcategory->save();

         Toastr::success('subcategory Update successfully:','Updated');
        return redirect()->route('subcategory.index');


    }

    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        if(!is_null($subcategory)) 
        {
            $subcategory->delete();
        }
        return redirect()->route('subcategory.index');

    }

 

  
}
