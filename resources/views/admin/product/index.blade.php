@extends('admin_layouts')
@section('admin_content')
@section('title','All Product')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            <div class="card-header">
                <button type="button" class="btn btn-danger"><a href="{{route('product.create')}}"> + Add Product </a></button>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ALL Product
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>product name</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>purchase price</th>
                                <th>selling price</th>
                               
                                <th>weight</th>
                                 <th>stock</th>
                                <th>Image</th>
                               
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->product_name}}</td>
                                <td>{{$row->category->cat_name}}</td>
                                <td>{{$row->subcategory->subcat_name}}</td>
                                <td>{{$row->purchase_price}}Tk.</td>
                                <td>{{$row->selling_price}}Tk.</td>     
                                <td>{{$row->weight}}Kg</td>
                                <td>{{$row->stock_quantity}}</td>
                              
                              

                                <td>
                                    <img class="rounded float-start" src="{{ asset($row->product_image) }}"  width="150">
                                </td>
                              
                                <td>
                                   
                                    <a href="{{route('product.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('product.delete',$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                    
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