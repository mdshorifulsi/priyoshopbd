@extends('layouts')
@section('content')
@section('title','customer register')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <h2>Customer register</h2>
                </div>
                <br>
                <form action="{{route('customer.register.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstName">Full Name</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder=" Name" 
                                />
                            </div>

                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstName">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder=" Name" 
                                />
                            </div>   
                        </div>

                        <div class="col-md-5">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstName">phone number</label>
                                <input class="form-control" id="email" name="phone_number" type="number" placeholder=" phone number" 
                                />
                            </div>

                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstName">password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder=" password" 
                                />
                            </div>   
                        </div>   
                    </div>
                </div>
                <br>
                <div class="card-footer">
                <button type="reset" id="reset" class="btn btn-danger" value="Reset">reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
</div>
<hr>
@endsection