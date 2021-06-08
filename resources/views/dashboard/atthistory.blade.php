@extends('components.layout')
@section('content')
<br/>
<div class="table-responsive">
  <h3>Attendance History</h3><br/>
    <table class="table table-striped table-sm">
      @if(!$students->isEmpty())
      <thead>
        <tr>
          <th>Roll No</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Date</th>
          <th>Status</th>
        </tr>
      </thead>
      @foreach ($students as $student)
      <tbody>
        <td>{{ $student->student_id}}</td>
        <td>{{ $student->student->firstName}}</td>
        <td>{{ $student->student->lastName}}</td>
        <td>{{ $student->created_at}}</td>
        <td>{{ $student->status}}</td>
      </tbody>
      @endforeach
      @else
      <p class="alert alert-danger">No Attendance found of this student</p>
      @endif
</div>

@endsection