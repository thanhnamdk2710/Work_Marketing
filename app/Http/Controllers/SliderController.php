<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();

        return view('backend.sliders.index', ['sliders' => $sliders]);
    }

    public function create()
    {
        return view('backend.sliders.create');
    }

    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->status = $request->status ? true : false;
        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'sliders/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $slider->image = $image_url;
            } else {
                $slider->image = '';
            }
        }
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'You successfully added the slider');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.sliders.edit', ['slider' => $slider]);
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'sliders/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                unlink($slider->image);
                $slider->image = $image_url;
            }
        }
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'You successfully updated the slider');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        unlink($slider->image);
        $slider->delete();

        return back()->with('success', 'You successfully deleted the brand');
    }

    public function status($id)
    {
        $slider = Slider::find($id);
        $slider->status = !$slider->status;
        $slider->save();

        return back()->with('success', 'You successfully updated the status');
    }
}
