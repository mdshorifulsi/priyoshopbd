@extends('admin_layouts')
@section('admin_content')
@section('title','order details')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    order details
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>invoice no</th>
                                <th>Sub total</th>
                                <th>discount</th>
                                <th>Total</th>
                                <th>payment</th>
                                <th>Action</th>
                                
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                
                             
                                <td>{{$shipping->shipping_name}}</td>
                                

                               
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection