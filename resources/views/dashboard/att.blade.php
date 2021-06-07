@extends('components.layout')
@section('content')
<br/>
<div class="table-responsive">

  <form action="{{ url('/search')}}" method="get" style="margin-left:50%;">
    @csrf
    <div class="input-group">
      <div class="form-outline">
        <input type="search" id="form1" name="rollno" class="form-control" placeholder="Enter your Roll No" />
      </div>
      <button type="submit" class="btn btn-primary">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
</form>
 
 
<div class="table-responsive">

  @if(!$students->isEmpty())
  <h3>Students List</h3><br/>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Photo</th>
          <th>First Name</th>
          <th>Last Name</th>
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
        <td>{{$student->Subject}}</td>
        <td>
          <a href= "{{ url('/atthistory/'.$student->id)}}" class="btn btn-sm btn-primary">View Attendance</a>
          <a href= "{{ url('/markatt/'.$student->id)}}" class="btn btn-sm btn-success">Mark Attendance</a>
        </td>
      </tbody>
      @endforeach
   </table>
   @else
      <p class="alert alert-danger">No student found</p>
      @endif
</div>

@endsection