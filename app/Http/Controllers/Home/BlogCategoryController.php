<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function allBlogCategory()
    {
        $blogCategories = BlogCategory::all();
        return view('admin.blog_category.all_blog_category',compact('blogCategories'));
    }
    public function addBlogCategory()
    {
        return view('admin.blog_category.add_blog_category');
    }
    public function saveBlogCategory(Request $request)
    {
        $request->validate([
           'blog_category'=>'required|string|max:255'
        ]);
        BlogCategory::insert([
           'blog_category'=>$request->blog_category,
           'created_at'=>Carbon::now()
        ]);
        $notification=[
          'alert-type'=>'success',
          'message'=>'Blog info saved!!!!'
        ];
        return redirect()->route('all_blog_category')->with($notification);
    }
    public function editBlogCategory($id)
    {
        $edit = BlogCategory::findOrFail($id);
        return view('admin.blog_category.edit_blog_category',compact('edit'));
    }
    public function updateBlogCategory(Request $request,$id)
    {
        BlogCategory::findOrFail($id)->update(['blog_category'=>$request->blog_category]);
        $notification=[
            'alert-type'=>'info',
            'message'=>'Blog info updated!!!!'
        ];
        return redirect()->route('all_blog_category')->with($notification);
    }
    public function deleteBlogCategory($id)
    {
        BlogCategory::find($id)->delete();
        $notification=[
            'alert-type'=>'error',
            'message'=>'Blog info deleted!!!!'
        ];
        return redirect()->route('all_blog_category')->with($notification);
    }
}
