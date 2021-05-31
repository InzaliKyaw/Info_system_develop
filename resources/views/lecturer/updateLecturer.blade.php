<!Doctype html>
<html>
<head>
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>Creat an account</h1>
        </div>
                        @if($errors->any())
                            <div class="alert alert-danger" >
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                    <!-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error }}</strong>
                                    </span> -->
                                @endforeach
                            </div>
                        @endif     
       

        <form action="{{route('updateLecturer', $lecturers->id)}}" method="POST">
            @csrf                    
                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Name:</label>
                        </div>
                        <div class= "col-md-8">
                            <input type="text" name="name" class="form-control" value="{{$lecturers->name}}">
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Password:</label>
                        </div>
                      
                         <div class= "col-md-8 input-group mb-3">
                             <input type="text" id="password-field" name="password" class="form-control" value="{{$lecturers->password}}">
                        </div>
                        
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Phone:</label>
                        </div>    
                        <div class="col-md-8">    
                            <input type="text" name="phone" class="form-control" value="{{$lecturers->phone}}">
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Faculty:</label>
                        </div> 
                        <div class="col-md-8 form-group">
                        
                            <select class="selectpicker form-control" name="faculty" id="faculty" value="{{$lecturers->faculty}}">
                            <option {{ ($lecturers->faculty == "Software Engineering" ? "selected":"") }} >Software Engineering</option>
                            <option {{ ($lecturers->faculty == "Knowledge Engineering" ? "selected":"") }}>Knowledge Engineering</option>
                            <option {{ ($lecturers->faculty == "Bussiness Information System" ? "selected":"") }}>Bussiness Information System</option>
                            <option {{ ($lecturers->faculty == "High Performance computing" ? "selected":"") }}>High Performance computing</option>
                            </select>

                
                        </div>    
                        
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <strong>Address:</strong>
                        </div>
                        <div class="col-md-8">    
                            <textarea type="text" class="form-control" name="address">{{$lecturers->address}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 btn-confirm">
                            <button class="btn btn-success btn-submit">Update</button>
                        </div>
                    </div>    

        </form>
    </div>
    <script>
        $('.selectpicker').selectpicker('val', '{{$lecturers->faculty}}');
     </script>   

</body>
</html>