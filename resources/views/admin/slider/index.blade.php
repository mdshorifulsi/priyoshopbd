@extends('admin_layouts')
@section('admin_content')
@section('title','All slider')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            <div class="card-header">
                <button type="button" class="btn btn-danger"><a href="{{route('slider.create')}}"> + Add slider </a></button>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ALL slider
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Slider title</th>
                                <th>Slider subtitle</th>
                                <th>slider image</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($slider as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->slider_title}}</td>
                                <td>{{$row->slider_subtitle}}</td>
                                <td>
                                    <img class="rounded float-start" src="{{ asset($row->slider_image) }}"  width="150">
                                </td>
                                <td>
                                    @if($row->status==1)
                                    <span class="badge text-bg-success">Active</span>
                                    @else
                                    <span class="badge text-bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if($row->status==1)
                                    <a href="{{route('slider.inactive',$row->id)}}" class="btn btn-sm btn-danger ">Inactive</a>
                                    @else
                                    <a href="{{route('slider.active',$row->id)}}" class="btn btn-sm btn-success">Active</a>
                                    @endif
                                    <a href="{{route('slider.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('slider.delete',$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                    
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