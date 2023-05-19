@extends('admin_layouts')
@section('admin_content')
@section('title','All coupon')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            <div class="card-header">
                <button type="button" class="btn btn-warning float-right"><a href="{{route('coupon.create')}}"> + Add coupon </a></button>
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
                                <th>coupon Name</th>
                                <th>Discount</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupon as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->coupon_name}}</td>
                                <td>{{$row->discount}}</td>
                                <td>
                                    @if($row->status==1)
                                    <strong>Active</strong>
                                    @else
                                    <strong>Inactive</strong>
                                    @endif
                                </td>
                                <td>
                                    @if($row->status==1)
                                    <a href="{{route('coupon.inactive',$row->id)}}" class="btn btn-sm btn-warning ">Inactive</a>
                                    @else
                                    <a href="{{route('coupon.active',$row->id)}}" class="btn btn-sm btn-success">Active</a>
                                    @endif
                                    <a href="{{route('coupon.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('coupon.delete',$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
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