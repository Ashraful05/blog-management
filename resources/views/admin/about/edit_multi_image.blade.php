@extends('admin.admin_master')
@section('title','Add MultiImage')
@section('admin_content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="row">
        <div class="col-12">
            <div class="card mt-0">
                <div class="card-body">

                    <h4 class="card-title text-center mb-3">Home About Page </h4>
                    <form method="post" action="{{ route('update_multi_image',$editImage->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $editImage->multi_image }}" name="old_image">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Multi Image </label>
                            <div class="col-sm-10">
                                <input name="multi_image" class="form-control" type="file"  id="image" multiple>
                            </div>
                            @error('multi_image')
                            <span class="text-center text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editImage->multi_image))?asset($editImage->multi_image):url('upload/no_image.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <!-- end row -->
                        <input type="submit" class="form-control btn btn-info waves-effect waves-light" value="Update Multiple Image">
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
