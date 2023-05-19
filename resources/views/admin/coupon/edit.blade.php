@extends('admin_layouts')
@section('admin_content')
@section('title','Edit Coupon')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Coupon
                </div>
                <br>
                <form action="{{route('coupon.update',$coupon->id)}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="coupon_name" name="coupon_name" value="{{$coupon->coupon_name}}" type="text" placeholder="coupon_name" />
                                <label for="inputFirstName">coupon_name</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="discount" name="discount" value="{{$coupon->discount}}" type="text" placeholder="discount %" />
                                <label for="inputFirstName">discount %</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" id="reset" class="btn btn-danger" value="Reset">reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection