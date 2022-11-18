@extends('admin.admin_master')
@section('title','Edit Blog Category')
@section('admin_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Add Blog Category</h4>
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('update_blog_category',$edit->id) }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_category" value="{{ old('blog_category',$edit->blog_category) }}" class="form-control" id="example-text-input">
                            </div>
                        </div>
                        <button type="submit" class="form-control btn btn-success">Update Blog Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

