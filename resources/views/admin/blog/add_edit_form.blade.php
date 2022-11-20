@extends('admin.admin_master')
@if($blog->exists)
    @section('title','Update Blog')
@else
    @section('title','Add Blog')
@endif
@section('admin_content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style type="text/css">
        .bootstrap-tagsinput .tag{
            margin-right: 2px;
            color: #b70000;
            font-weight: 700;
        }
    </style>


    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <a href="{{ route('blog.index') }}"><button type="submit" style="float:right;" class="btn btn-primary">All Blog</button></a>
                    @if($blog->exists)
                        <h4 class="card-title text-center">Edit Blog Page</h4>
                    @else
                        <h4 class="card-title text-center">Add Blog Page</h4>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissable">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @if($blog->exists)
                        <form action="{{ route('blog.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="old_image" value="{{ $blog->blog_image }}">
                            @method('put')
                            @else
                                <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="" name="blog_category_id" id="blog_category_id"  required>
                                                <option value="0" {{ $blog->exists ? 'selected' : ''}}>Select Blog Category</option>
                                                @foreach ($blogCategories as $blogCategory)
                                                    <option value="{{$blogCategory->id}}" @if($blogCategory->id == $blog->blog_category_id) selected @endif>{{$blogCategory->blog_category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="blog_title" value="{{ old('blog_title',$blog->blog_title) }}" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                                        <div class="col-sm-10">
                                            <input name="blog_tags" value="{{old('home,tech',$blog->blog_tags)}}" class="form-control" type="text" data-role="tagsinput">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input"  class="col-sm-2 col-form-label">Blog Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="blog_description" id="elm1"  class="form-control">{{old('blog_description',$blog->blog_description)}} </textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image </label>
                                        <div class="col-sm-10">
                                            <input name="blog_image" class="form-control" type="file" id="image">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                        <div class="col-sm-10">
                                            <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($blog->blog_image))?asset($blog->blog_image):url('upload/no_image.png') }}" alt="Card image cap">
                                        </div>
                                    </div>
                                    @if($blog->exists)
                                        <button type="submit" class="form-control btn btn-success">Update Blog</button>
                                    @else
                                        <button type="submit" class="form-control btn btn-primary">Add Blog</button>
                                    @endif
                                </form>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
