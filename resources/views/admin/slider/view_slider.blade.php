@extends('admin.admin_master')
@section('title','All Slider')
@section('admin_content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="row">
        <div class="col-12">
            <div class="card mt-0">
                <div class="card-body">

                    <h4 class="card-title text-center">Home Slider Page </h4>

                    <form method="post" action="{{ route('update_slider') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $viewSlider->id }}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" class="form-control" type="text" value="{{ old('title',$viewSlider->title) }}"  id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                            <div class="col-sm-10">
                                <input name="short_title" class="form-control" value="{{ old('short_title',$viewSlider->short_title) }}" type="text" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Video URL </label>
                            <div class="col-sm-10">
                                <input name="video_url" class="form-control" type="text" value="{{ old('video_url',$viewSlider->video_url) }}"  id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image </label>
                            <div class="col-sm-10">
                                <input name="home_slide" class="form-control" type="file" value="{{ old('home_slide',$viewSlider->home_slide) }}"  id="image">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($viewSlider->home_slide))?asset($viewSlider->home_slide):url('upload/no_image.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <!-- end row -->
                        <input type="submit" class="form-control btn btn-info waves-effect waves-light" value="Update Slide">
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
