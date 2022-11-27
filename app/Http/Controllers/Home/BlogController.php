<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use JetBrains\PhpStorm\NoReturn;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blogs = Blog::with('blogCategory')->get();
//        return $blogs;
        return view('admin.blog.all_blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Blog $blog)
    {
        $blogCategories = BlogCategory::orderby('blog_category','asc')->get();
        return view('admin.blog.add_edit_form',compact('blog','blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
           'blog_category_id'=>'required|numeric|min:1',
            'blog_title'=>'required|string|max:255',
            'blog_tags'=>'required|string|max:64',
        ],[
            'blog_category_id.required'=>'Blog Category Name is required'
        ]);
        if($request->file('blog_image'))
        {
            $image = $request->file('blog_image');
            $name_gen = date('Y_m_d_Hi_').'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize('430,327')->save('upload/blog_image/'.$name_gen);
            $imageUrl = 'upload/blog_image/'.$name_gen;
            Blog::insert([
                'blog_image'=>$imageUrl,
                'blog_category_id'=>$request->blog_category_id,
                'blog_title'=>$request->blog_title,
                'blog_tags'=>$request->blog_tags,
                'blog_description'=>$request->blog_description,
                'created_at'=>Carbon::now(),
            ]);
            $notification=[
                'alert-type'=>'success',
                'message'=>'Blog info saved!!!!'
            ];
            return redirect()->route('blog.index')->with($notification);
        }else{
            Blog::insert([
                'blog_category_id'=>$request->blog_category_id,
                'blog_title'=>$request->blog_title,
                'blog_tags'=>$request->blog_tags,
                'blog_description'=>$request->blog_description,
                'created_at'=>Carbon::now(),
            ]);
            $notification=[
                'alert-type'=>'success',
                'message'=>'Blog info saved without image!!!!'
            ];
            return redirect()->route('blog.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogCategories = BlogCategory::orderby('blog_category','asc')->get();
        return view('admin.blog.add_edit_form',compact('blog','blogCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'blog_category_id'=>'required|numeric|min:1',
            'blog_title'=>'required|string|max:255',
            'blog_tags'=>'required|string|max:64',
        ],[
            'blog_category_id.required'=>'Blog Category Name is required'
        ]);
        $oldImage = $request->old_image;
        if($request->file('blog_image'))
        {
            if(!empty($oldImage)){unlink($oldImage);}
            $image = $request->blog_image;
            $name_gen = date('Y_m_d_Hi_').'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize('430,327')->save('upload/blog_image/'.$name_gen);
            $imageUrl = 'upload/blog_image/'.$name_gen;
            $blog->update([
                'blog_image'=>$imageUrl,
                'blog_category_id'=>$request->blog_category_id,
                'blog_title'=>$request->blog_title,
                'blog_tags'=>$request->blog_tags,
                'blog_description'=>$request->blog_description,
            ]);
            $notification=[
                'alert-type'=>'success',
                'message'=>'Blog info updated with image!!!!'
            ];
            return redirect()->route('blog.index')->with($notification);
        }
        $blog->update($data);
        $notification=[
            'alert-type'=>'info',
            'message'=>'Blog info updated without image!!!!'
        ];
        return redirect()->route('blog.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $image = $blog->blog_image;
        if($image)
        {
            unlink($image);
            $blog->delete();
            $notification=[
                'alert-type'=>'error',
                'message'=>'Blog info deleted with image!!!!'
            ];
            return redirect()->route('blog.index')->with($notification);
        }
        $blog->delete();
        $notification=[
            'alert-type'=>'error',
            'message'=>'Blog info deleted without image!!!!'
        ];
        return redirect()->route('blog.index')->with($notification);
    }

}
