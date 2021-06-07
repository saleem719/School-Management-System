@extends('components.layout')
@section('content')
     <div class="row justify-content-center">
     <div class="col-md-8">
     <div class="card">
     <div class="card-header">Register</div>
     <div class="card-body">
        <form name="my-form" action="{{ route('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row">
                <label for="full_name" class="col-md-4 col-form-label text-md-right">First Name</label>
                <div class="col-md-6">
                    <input type="text" id="full_name" class="form-control" name="firstName">
                </div>
            </div>

            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">Last Name</label>
                <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="lastName">
                </div>
            </div>

            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">Father Name</label>
                <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="fatherName">
                </div>
            </div>

            <div class="form-group row">
                <label for="present_address" class="col-md-4 col-form-label text-md-right">Subject</label>
                <div class="col-md-6">
                    <input type="text" id="present_address" class="form-control" name="subject">
                </div>
            </div>

            <div class="form-group row">
                <label for="present_address" class="col-md-4 col-form-label text-md-right">Phone No</label>
                <div class="col-md-6">
                    <input type="text" id="present_address" class="form-control" name="phone">
                </div>
            </div>

            <div class="form-group row">
                <label for="present_address" class="col-md-4 col-form-label text-md-right">City</label>
                <div class="col-md-6">
                    <input type="text" id="present_address" class="form-control" name="city">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">DOB</label>
                <div class="col-md-6">
                    <input type="date" id="phone_number" class="form-control" name="age">
                </div>
            </div>

            <div class="form-group row">
                <label for="present_address" class="col-md-4 col-form-label text-md-right">Image</label>
                <div class="col-md-6">
                    <input type="file" id="present_address" class="form-control" name="photo">
                </div>
            </div>


            <div class="col-md-6 offset-md-4 p-3">
                    <button type="submit" class="btn btn-primary">
                    Register
                    </button>
            </div>
        </div>
    </form>
@endsection