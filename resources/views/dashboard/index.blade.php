@extends('components.layout')
@section('content')
<div class="row text-center mx-8 p-2">
 <div class="col-sm-4">
    <div class="card text-white bg-danger mb-3">
    <div class="card-header">Total students </div>
    <div class="card-body">
    <h4 class="card-title"></i>{{ $students->count() }}</h4>
    <a class="btn text-white" href="{{ route('dashboard.studentslist') }}">View </a>
    </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-success mb-3">
    <div class="card-header">Courses </div>
    <div class="card-body">
    <h4 class="card-title">4</h4>
    <a class="btn text-white" href="">View </a>
    </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3">
    <div class="card-header">Campuses  </div>
    <div class="card-body">
    <h4 class="card-title">4</h4>
    <a class="btn text-white" href="">View </a>
    </div>
    </div>
  </div>
</div>
<div class="table-responsive">
  <a href="{{route('dashboard.create')}}" type="button" class="btn btn-success" style="float:right;">Add New Student</a>

  @if(!$students->isEmpty())
  <h3>Students List</h3><br/>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Photo</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Father Name</th>
          <th>Phone</th>
          <th>DOB</th>
          <th>Subject</th>
          <th>Action</th>
        </tr>
      </thead>
    
      @foreach ($students as $student)
      <tbody>
        <td>{{$student->id}}</td>
        <td><img src="{{ asset('/storage/'.$student->profile->photo) }}" width="60" height="50"/></td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->lastName}}</td>
        <th>{{$student->profile->father_name}}</th>
        <th>{{$student->profile->phone}}</th>
        <td>{{$student->age}}</td>
        <td>{{$student->Subject}}</td>

        <td>
          <a href="{{ url('/show/'.$student->id)}}" class="btn btn-sm btn-info">Show</a>
          <a href= "{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-success">Edit</a>
          <a href="http://" class="btn btn-sm btn-danger">Delete</a>
        </td>
        
      </tbody>
      @endforeach
   </table>
   @else
      <p class="alert alert-danger">No student found</p>
      @endif
</div>
@endsection