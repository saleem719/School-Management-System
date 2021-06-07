@extends('components.layout')
@section('content')
     <div class="row justify-content-center">
     <div class="col-md-8">
     <div class="card">
     <div class="card-header">Mark Student Attendance</div>

     @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
    <div class="card-body">
        <form name="my-form" action="{{ url('store')}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Roll No</label>
                <div class="col-md-6">
                    <input type="text" id="phone_number" class="form-control" name="rollno" value="{{$student['id']}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Date</label>
                <div class="col-md-6">
                    <input type="date" id="phone_number" class="form-control" name="date">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Mark Attendance</label>
                <div class="col-md-6">
                    <select name="status" id="">
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                          
                     </select>
                </div>
            </div>

            <div class="col-md-6 offset-md-4 p-3">
                    <button type="submit" class="btn btn-primary">
                    Mark Attendance
                    </button>
            </div>
        </div>
    </div>
</div>
    </form>
    
@endsection