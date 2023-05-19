@extends('admin_layouts')
@section('admin_content')
@section('title','All brand')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Add brand
                </div>
                <br>
                <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="brand_name" name="brand_name" type="text" placeholder="Brand Name" />
                                <label for="inputFirstName">brand Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <div class="form-group col-lg-4">
                                    <label>Select Brand logo</label>
                                    <input type="file" name="logo">
                                </div> 
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