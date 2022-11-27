@extends('admin.admin_master')
@section('title','Add Blog Category')
@section('admin_content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Add Blog Category</h4>
                    <a href="{{ route('all_blog_category') }}"><button type="submit" class="btn btn-primary" style="float: right">All Blog Category </button></a>
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
                </div>
                <div class="card-body">

                    <form action="{{ route('save_blog_category') }}" method="post" id="myForm">
                        @csrf
                        <div class="row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                            <div class="form-group col-sm-10">
                                <input type="text" name="blog_category" value="{{ old('blog_category') }}" class="form-control" id="example-text-input">
                            </div>
                        </div>
                        <button type="submit" class="form-control btn btn-success">Add Blog Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    blog_category: {
                        required : true,
                    },
                },
                messages :{
                    blog_category: {
                        required : 'Please Enter Blog Category',
                    },
                },
                errorElement : 'span',
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });

    </script>
@endsection
