@extends('admin.admin_master')
@section('title','Footer Page')
@section('admin_content')

    <div class="row">
        <div class="col-12">
            <div class="card mt-0">
                <div class="card-header">
                    <h4 class="card-title text-center">Home Footer Page </h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('footer_update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $allfooter->id }}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Contact Number</label>
                            <div class="col-sm-10">
                                <input name="contact_number" class="form-control" type="text" value="{{ old('contact_number',$allfooter->contact_number) }}"  id="example-text-input">
                            </div>
                            @error('contact_number')
                            <span class="text-center text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" class="form-control" value="{{ old('email',$allfooter->email) }}" type="text" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                            <div class="col-sm-10">
                                <textarea name="short_description" class="form-control" type="text">{{ $allfooter->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea name="address" class="form-control" type="text">{{ $allfooter->address }}</textarea>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input name="facebook" class="form-control" value="{{ old('facebook',$allfooter->facebook) }}" type="text" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                            <div class="col-sm-10">
                                <input name="twitter" class="form-control" value="{{ old('twitter',$allfooter->twitter) }}" type="text" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                            <div class="col-sm-10">
                                <input name="copyright" class="form-control" value="{{ old('copyright',$allfooter->copyright) }}" type="text" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->
                        <input type="submit" class="form-control btn btn-info waves-effect waves-light" value="Update Footer">
                    </form>



                </div>
            </div>
        </div> <!-- end col -->
    </div>


@endsection

