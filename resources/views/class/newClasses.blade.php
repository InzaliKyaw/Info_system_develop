<!DOCTYPE html>
<html>
<head>
<title>Classes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <h1 class='heading'>Classes</h1>
    <form action="{{route('submitClasses')}}" method="POST">
        @csrf
        <div class="row form-row">
            <div class="col-md-4 text-label">
                <label>Class Name:</label>
            </div>
            <div class= "col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="row form-row">
            <div class="col-md-4 text-label">
                <label>Lecturer:</label>
            </div> 
            <div class="col-md-8 form-group">

             <select class="selectpicker" name="lecturers_id" id="lecturer">
                @foreach ($lecturers as $lecturer)     
                  <option value="{{ $lecturer->id }}"> {{ $lecturer->name }}</option>
                @endforeach      
             </select>
 
            </div>    
        </div>
        <div class="row confirm">
            <div class="col-md-8 col-md-offset-3">
                <button class="btn btn-success btn-submit btn-block">Create a class</button>
            </div>
        </div>     
    </form>    
</body>
</html>    