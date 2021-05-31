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
            <h1>Update your account</h1>
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
       

        <form action="{{route('updateStudent', $students->id)}}" method="POST">
            @csrf                    
                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Name:</label>
                        </div>
                        <div class= "col-md-8">
                            <input type="text" name="name" class="form-control" value="{{$students->name}}">
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Password:</label>
                        </div>
                      
                         <div class= "col-md-8 input-group mb-3">
                             <input type="text" id="password-field" name="password" class="form-control" value="{{$students->password}}">
                        </div>
                        
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Phone:</label>
                        </div>    
                        <div class="col-md-8">    
                            <input type="text" name="phone" class="form-control" value="{{$students->phone}}">
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Major:</label>
                        </div> 
                        <div class="col-md-8 form-group">
                        
                            <select class="selectpicker form-control" name="major" id="major" value="{{$students->major}}">
                            <option {{ ($students->major == "Software Engineering" ? "selected":"") }} >Software Engineering</option>
                            <option {{ ($students->major == "Knowledge Engineering" ? "selected":"") }}>Knowledge Engineering</option>
                            <option {{ ($students->major == "Bussiness Information System" ? "selected":"") }}>Bussiness Information System</option>
                            <option {{ ($students->major == "High Performance computing" ? "selected":"") }}>High Performance computing</option>
                            </select>

                
                        </div>    
                        
                    </div>


                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Academic Year:</label>
                        </div> 
                        <div class="col-md-8 form-group">
                        
                            <select class="selectpicker form-control" name="academicYear" id="academicYear" value="{{$students->academicYear}}">
                            <option {{ ($students->academicYear == "2010" ? "selected":"") }} >2010</option>
                            <option {{ ($students->academicYear == "2011" ? "selected":"") }}>2011</option>
                            <option {{ ($students->academicYear == "2012" ? "selected":"") }}>2012</option>
                            <option {{ ($students->academicYear == "2013" ? "selected":"") }}>2013</option>
                            <option {{ ($students->academicYear == "2014" ? "selected":"") }} >2014</option>
                            <option {{ ($students->academicYear == "2015" ? "selected":"") }}>2015</option>
                            <option {{ ($students->academicYear == "2016" ? "selected":"") }}>2016</option>
                            <option {{ ($students->academicYear == "2017" ? "selected":"") }}>2017</option>
                            <option {{ ($students->academicYear == "2018" ? "selected":"") }} >2018</option>
                            <option {{ ($students->academicYear == "2019" ? "selected":"") }}>2019</option>
                            <option {{ ($students->academicYear == "2020" ? "selected":"") }}>2020</option>
                            </select>

                
                        </div>    
                        
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <strong>Address:</strong>
                        </div>
                        <div class="col-md-8">    
                            <textarea type="text" class="form-control" name="address">{{$students->address}}</textarea>
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
        $('.selectpicker').selectpicker('val', '{{$students->major}}');
     </script>   

</body>
</html>