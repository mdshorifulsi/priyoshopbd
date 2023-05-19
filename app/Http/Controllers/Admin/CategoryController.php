<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {

        $category = Category::latest()->get();
        return view('admin.category.index', compact('category'));

    }

    public function create()
    {

        return view('admin.category.create');
    }

    public function store(Request $request)
    {

        $category = new Category;
        $category->cat_name = $request->cat_name;
        $category->cat_slug = Str::slug($request->cat_name);
        $category->save();
        return redirect()->route('category.index');



    }

    public function edit($id)
    {

        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));



    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->cat_name = $request->cat_name;
        $category->cat_slug = Str::slug($request->cat_name);
        $category->save();
        return redirect()->route('category.index');


    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');


    }

     public function inactive($id){

        $category=Category::where('id',$id)
            ->update(['status'=>0]);
       return redirect()->route('category.index');
    }

        public function active($id){

        $category=Category::where('id',$id)
            ->update(['status'=>1]);
       return redirect()->route('category.index');
    }




}