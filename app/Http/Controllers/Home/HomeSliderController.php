<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    public function viewSlider()
    {
        $viewSlider = HomeSlide::find(1);
        return view('admin.slider.view_slider',compact('viewSlider'));
    }
    public function updateSlider(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|unique:home_slides',
            'home_slide'=>'required'
        ]);
        $sliderId = $request->id;
        if($request->file('home_slide')){
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(636,852)->save('upload/home_slide/'.$name_gen);
            $saveUrl = 'upload/home_slide/'.$name_gen;
            HomeSlide::findOrFail($sliderId)->update([
                'home_slide'=>$saveUrl,
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'video_url'=>$request->video_url
            ]);
            $notification = [
              'alert-type'=>'info',
              'message'=>'Slider Updated with image!!'
            ];
            return redirect()->back()->with($notification);
        }else{
            HomeSlide::findOrFail($sliderId)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'video_url'=>$request->video_url
            ]);
            $notification = [
                'alert-type'=>'info',
                'message'=>'Slider Updated!!'
            ];
            return redirect()->back()->with($notification);
        }

    }
}
