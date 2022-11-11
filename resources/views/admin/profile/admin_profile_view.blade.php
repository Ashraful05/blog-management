@extends('admin.admin_master')
@section('title','Admin Profile')
@section('admin_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-2">
                <center>
                    <img class="rounded-circle avatar-xl" src="{{ !empty($adminData->profile_image)?url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.png') }}" alt="Card image cap">
                </center>
                <div class="card-body center-block">
                    <h4 class="card-title">Name: {{ $adminData->name }}</h4>
                    <hr>
                    <h4 class="card-title">Email: {{ $adminData->email }}</h4>
                    <hr>
                    <h4 class="card-title">UserName: {{ $adminData->username }}</h4>
                    <hr>
                    <a href="{{ route('edit_profile',$adminData->id) }}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection
