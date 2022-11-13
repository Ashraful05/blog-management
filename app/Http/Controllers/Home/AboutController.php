<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function viewAbout()
    {
        $about = About::find(1);
        return view('admin.about.view_about',compact('about'));
    }
    public function updateAbout(Request $request)
    {
        $this->validate($request,[
           'title'=>'required|string|min:4',
        ]);
        $about_id = $request->id;
        if($request->file('about_image')){
            $image = $request->file('about_image');
            $name_gen = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(523,605)->save('upload/home_about/'.$name_gen);
            $imageUrl = 'upload/home_about/'.$name_gen;


            About::findOrFail($about_id)->update([
                'about_image'=>$imageUrl,
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description
            ]);
            $notification = [
                'alert-type'=>'info',
                'message'=>'About Updated with image!!'
            ];
            return redirect()->back()->with($notification);
        }else{
            About::findOrFail($about_id)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description
            ]);
            $notification = [
                'alert-type'=>'info',
                'message'=>'About Updated!!'
            ];
            return redirect()->back()->with($notification);
        }
    }
    public function frontAbout()
    {
        $frontAbout = About::find(1);
        return view('frontend.about.about_page',compact('frontAbout'));
    }

}
