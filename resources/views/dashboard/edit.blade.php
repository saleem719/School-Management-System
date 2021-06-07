@extends('components.layout')
@section('content')
     <div class="row justify-content-center">
     <div class="col-md-8">
     <div class="card">
     <div class="card-header">Update</div>
     <div class="card-body">
         
         
        <form name="my-form" action="{{ url('/update/'.$student['id'])}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="full_name" class="col-md-4 col-form-label text-md-right">First Name</label>
                <div class="col-md-6">
                    <input type="text" id="full_name" class="form-control" name="firstName" value="{{ $student['firstName'] }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">Last Name</label>
                <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="lastName" value="{{$student['lastName'] }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">age</label>
                <div class="col-md-6">
                    <input type="text" id="phone_number" class="form-control" name="age" value="{{$student['age']}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="present_address" class="col-md-4 col-form-label text-md-right">Subject</label>
                <div class="col-md-6">
                    <input type="text" id="present_address" class="form-control" name="subject" value="{{$student['Subject']}}" >
                </div>
            </div>


            <div class="col-md-6 offset-md-4 p-3">
                    <button type="submit" class="btn btn-primary">
                    Update record
                    </button>
            </div>
        </div>
    </form>
    
@endsection