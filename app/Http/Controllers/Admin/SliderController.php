<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
class SliderController extends Controller
{
    public function index()
    {

        $slider = Slider::latest()->get();
        return view('admin.slider.index', compact('slider'));

    }

    public function create()
    {

        return view('admin.slider.create');
    }

    public function store(Request $request)
    {

        $slider = new Slider;
        $slider->slider_title = $request->slider_title;
        $slider->slider_subtitle = $request->slider_subtitle;
        

        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $slider->slider_image = $request->file('slider_image')->move("images/slider_image", $name);
        }


        $slider->save();
        Toastr::success('slider successfully Saved:','success');
        return redirect()->route('slider.index');



    }

    public function edit($id)
    {

        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));



    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->slider_title = $request->slider_title;
        $slider->slider_subtitle = $request->slider_subtitle;
        

        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $slider->slider_image = $request->file('slider_image')->move("images/slider_image", $name);
        }

        
        $slider->save();

         Toastr::success('slider Update successfully:','Updated');
        return redirect()->route('slider.index');


    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider_image=$slider->slider_image;
        if(!is_null($slider)) 
        {
            $slider->delete();
        }
        unlink($slider_image);
        return redirect()->route('slider.index');

    }

    public function inactive($id){

        $slider=Slider::where('id',$id)
            ->update(['status'=>0]);
       return redirect()->route('slider.index');
    }

        public function active($id){

        $slider=Slider::where('id',$id)
            ->update(['status'=>1]);
       return redirect()->route('slider.index');
    }
}
