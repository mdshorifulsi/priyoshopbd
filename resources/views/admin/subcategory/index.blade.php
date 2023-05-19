@extends('admin_layouts')
@section('admin_content')
@section('title','All subcategory')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            <div class="card-header">
                <button type="button" class="btn btn-danger"><a href="{{route('subcategory.create')}}"> + Add subcategory </a></button>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ALL subcategory
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>category name</th>
                                <th>subcat name</th>
                                <th>subcat_slug </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subcategory as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->category->cat_name }}</td>
                                <td>{{$row->subcat_name}}</td>
                                <td>{{$row->subcat_slug}}</td>
                                
                                
                                <td>
                                   
                                    
                                    <a href="{{route('subcategory.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('subcategory.delete',$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                    
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