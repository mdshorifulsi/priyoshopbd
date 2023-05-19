@extends('admin_layouts')
@section('admin_content')
@section('title','All payment')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Add payment
                </div>
                <br>
                <form action="{{route('payment.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="cat_name" name="name" type="text" placeholder="Payment Name" />
                                <label for="inputFirstName">payment Name</label>
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