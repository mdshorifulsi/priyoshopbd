@extends('admin_layouts')
@section('admin_content')
@section('title','All payment')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            <div class="card-header">
                <button type="button" class="btn btn-warning float-right"><a href="{{route('payment.create')}}"> + Add payment </a></button>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ALL payment
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>payment Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payment as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->name}}</td>
                                
                                <td>
                                    
                                    <a href="{{route('payment.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('payment.delete',$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
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