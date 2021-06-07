@extends('components.layout')
@section('content')
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