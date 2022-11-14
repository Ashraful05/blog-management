@extends('admin.admin_master')
@section('title','View About')
@section('admin_content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="row">
        <div class="col-12">
            <div class="card mt-0">
                <div class="card-body">

                    <h4 class="card-title text-center">Home About Page </h4>
                    <form method="post" action="{{ route('update_about') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $about->id }}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" class="form-control" type="text" value="{{ old('title',$about->title) }}"  id="example-text-input">
                            </div>
                            @error('title')
                            <span class="text-center text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                            <div class="col-sm-10">
                                <input name="short_title" class="form-control" value="{{ old('short_title',$about->short_title) }}" type="text" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                            <div class="col-sm-10">
                                <textarea name="short_description" class="form-control" type="text">{{ $about->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Long Description </label>
                            <div class="col-sm-10">
                                <textarea name="long_description" class="form-control" type="text">{{ $about->long_description }}</textarea>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                            <div class="col-sm-10">
                                <input name="about_image" class="form-control" type="file" value="{{ old('about_image',$about->about_image) }}"  id="image">
                            </div>
                            @error('about_image')
                            <span class="text-center text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($about->about_image))?asset($about->about_image):url('upload/no_image.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <!-- end row -->
                        <input type="submit" class="form-control btn btn-info waves-effect waves-light" value="Update About">
                    </form>



                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <script type="text/javascript">

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
