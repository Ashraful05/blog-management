<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use PhpParser\Node\Expr\AssignOp\Mul;

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
        $allImages = MultiImage::orderby('id','desc')->limit(6)->get();
        return view('frontend.about.about_page',compact('frontAbout','allImages'));
    }

    public function aboutMultiImage()
    {
        return view('admin.about.mult_image');
    }
    public function saveMultiImage(Request $request)
    {
        $this->validate($request,[
            'multi_image' => 'required',
            'multi_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $images = $request->multi_image;
        foreach ($images as $image){
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(220,220)->save('upload/multi_image/'.$name_gen);
           $imageUrl = 'upload/multi_image/'.$name_gen;
            MultiImage::insert([
                'multi_image'=>$imageUrl,
                'created_at'=>Carbon::now(),
            ]);
        }

        $notification=[
          'alert-type'=>'success',
          'message'=>'Multi Image Saved!!!'
        ];
        return redirect()->route('all_multi_image')->with($notification);
    }
    public function allMultiImage()
    {
        $allMultiImage = MultiImage::all();
        return view('admin.about.all_multi_image',compact('allMultiImage'));
    }
    public function editMultiImage($id)
    {
        $editImage = MultiImage::findOrFail($id);
        return view('admin.about.edit_multi_image',compact('editImage'));
    }
    public function updateMultiImage(Request $request,$id)
    {
        $oldImage = $request->old_image;

//        return $oldImage;
        if($request->file('multi_image'))
        {
            unlink($oldImage);
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(220,220)->save('upload/multi_image/'.$name_gen);
            $save_url = 'upload/multi_image/'.$name_gen;

            MultiImage::findOrFail($id)->update([
                'multi_image' => $save_url,
            ]);
            $notification = array(
                'message' =>'Multi Image Updated Successfully',
                'alert-type' =>'info'
            );
            return redirect()->route('all_multi_image')->with($notification);

        }
    }

    public function deleteMultiImage($id)
    {
        $imageId = MultiImage::find($id);
        $deleteImage = $imageId->multi_image;
        unlink($deleteImage);
        MultiImage::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Multi Image Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

}
