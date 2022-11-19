@extends('admin.admin_master')
@section('title','Blog Page')
@section('admin_content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Blog All</h4>
                <a href="{{ route('blog.create') }}"><button type="submit" class="btn btn-primary" style="float: right">Add Blog </button></a>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog All </h4>
                    <table id="datatable"
                           class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Blog Category</th>
                            <th>Blog Title</th>
                            <th>Blog Tags</th>
                            <th>Blog Image</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                        @php($i = 1)
                        @foreach($blogs as $item)
                            <tr>
                                <td> {{ $i++}} </td>
                                <td>{{ $item->blogCategory->blog_category }}</td>
                                <td>{{ $item->blog_title }}</td>
                                <td>{{ $item->blog_tags }}</td>
                                <td> <img src="{{ (!empty($item->blog_image))?asset($item->blog_image):url('upload/no_image.png') }}" style="width: 100px; height: 50px;" alt=""> </td>
                                <td>
                                    <a href="{{ route('blog.edit',$item->id) }}" class="btn btn-info" title="Edit Data">  <i class="fas fa-edit"></i> </a>
{{--                                    <a href="{{ route('blog.destroy',$blog->id) }}" id="delete" class="btn btn-danger sm" title="Delete Data"><i class="fas fa-trash-alt"></i></a>--}}
                                    <form action="{{ route('blog.destroy',$item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" id="delete"  class="btn btn-danger" title="Delete Data" onclick="return confirm('Are you sure to delete?')">  <i class="fas fa-trash-alt"></i> </button>
                                    </form>
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


