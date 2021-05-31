
@extends('master')
@section('bodycontent')
<div class='container'>
  <div class='row create-account-success'> 
    <h1 class='heading'>Lecturers</h1>
    <div class='lecturer'>
      <form action="{{route('registerAsLecturer')}}" method="GET">  
      @csrf
        <input type="submit" class='btn btn-outline-secondary' value="Add Lecturer">
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
      <th>Faculty</th>
      <th>Address</th>
      <th></th>
      <th></th>
      </tr>

      @foreach ($lecturers ?? '' as $lecturer)
      
      <tr>
      <td><input type="text" id="id" name="lecturer_id" value="{{$lecturer->id}}"></td>
      <td>{{$lecturer->name}}</td>
      <td>{{$lecturer->phone}}</td>
      <td>{{$lecturer->password}}</td>
      <td>{{$lecturer->faculty}}</td>
      <td>{{$lecturer->address}}</td>
      <td>
      <form action="{{route('deleteLecturers',$lecturer->id)}}" method="POST">  
        @csrf
          <input type="submit" class='btn btn-danger' value="Delete">
          </form>
          </td>
          <td>
          <form action="{{route('editLecturer',$lecturer->id)}}" method="GET">  
          <input type="submit" class='btn btn-outline-success' value="Edit">
      </form>
      </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
