@extends('admin.admin_master')
@section('title','Blog Category Page')
@section('admin_content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Blog Category All</h4>
                <a href="{{ route('add_blog_category') }}"><button type="submit" class="btn btn-primary" style="float: right">Add Blog Category </button></a>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Blog Category All </h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Blog Category Name</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                        @php($i = 1)
                        @foreach($blogCategories as $blogCategory)
                            <tr>
                                <td> {{ $i++}} </td>
                                <td>{{ $blogCategory->blog_category }}</td>
                                <td>
                                    <a href="{{ route('edit_blog_category',$blogCategory->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                    <a href="{{ route('delete_blog_category',$blogCategory->id) }}" id="delete"  class="btn btn-danger sm" title="Delete Data">  <i class="fas fa-trash-alt"></i> </a>

                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



@endsection

