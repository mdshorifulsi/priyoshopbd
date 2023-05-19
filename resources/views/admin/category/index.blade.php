@extends('admin_layouts')
@section('admin_content')
@section('title','All category')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            <div class="card-header">
                <button type="button" class="btn btn-warning float-right"><a href="{{route('category.create')}}"> + Add Category </a></button>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ALL category
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->cat_name}}</td>
                                <td>{{$row->cat_slug}}</td>
                                <td>
                                    @if($row->status==1)
                                    <a href="{{route('category.inactive',$row->id)}}" class="btn btn-sm btn-warning ">Inactive</a>
                                    @else
                                    <a href="{{route('category.active',$row->id)}}" class="btn btn-sm btn-success">Active</a>
                                    @endif
                                    <a href="{{route('category.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('category.delete',$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection