@extends('master')
@section('bodycontent')
 <div class='container'>
    <div class='row create-account-success'> 
      <h1 class='heading'>Students</h1>
      <div class='lecturer'>
        <form action="{{route('registerAsStudents')}}" method="GET">  
        @csrf
          <input type="submit" class='btn btn-outline-secondary' value="Add Student">
        </form>
      </div>
    </div>

    <div class='table-responsive'>
      <table class="table table-hover">
        <thead class="thead-light">
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Password</th>
        <th>Major</th>
        <th>Academic Year</th>
        <th>Address</th>
        <th></th>
        <th></th>
        </tr>

        @foreach ($students ?? '' as $student)
        
        <tr>
        <td><input type="text" id="id" name="lecturer_id" value="{{$student->id}}"></td>
        <td>{{$student->name}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->password}}</td>
        <td>{{$student->major}}</td>
        <td>{{$student->academicYear}}</td>
        <td>{{$student->address}}</td>
        <td>
          <form action="{{route('deleteStudents',$student->id)}}" method="POST">  
            @csrf
            <input type="submit" class='btn btn-danger' value="Delete">
          </form>
            </td>
            <td>
          <form action="{{route('editStudent',$student->id)}}" method="GET">
            @csrf  
              <input type="submit" class='btn btn-outline-success' value="Edit">
          </form>
        </td>
        </tr>
        @endforeach
      </table>
    </div>
 </div> 
 @endsection
