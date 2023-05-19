@extends('admin_layouts')
@section('admin_content')
@section('title','All order')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ALL order
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $key=>$row)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$row->invoice_no}}</td>
                                <td>{{$row->subtotal}}</td>
                                <td>{{$row->coupon_discount}}</td>
                                <td>{{$row->total}}</td>
                                <td>{{$row->payment->name}}</td>
                                
                               
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