<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function blogDetails($id)
    {
        $allblogs = Blog::latest()->limit(5)->get();
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('frontend.blog.blog_details',compact('blogs','allblogs','categories'));
    }
    public function CategoryWiseBlog($id){

        $blogpost = Blog::where('blog_category_id',$id)->orderBy('id','DESC')->get();
        $allblogs = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        $categoryname = BlogCategory::findOrFail($id);
        return view('frontend.blog.category_wise_blog_details',compact('categoryname','blogpost','allblogs','categories'));

    }
    public function frontendBlog()
    {
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        $allblogs = Blog::latest()->get();
        return view('frontend.blog.frontend_blog',compact('categories','allblogs'));
    }
}
