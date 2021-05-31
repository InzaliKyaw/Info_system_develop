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
       

        <form action="{{route('submitStudents')}}" method="POST">
            {{ csrf_field() }}
                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Name:</label>
                        </div>
                        <div class= "col-md-8">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Password:</label>
                        </div>
                      
                         <div class= "col-md-8 input-group mb-3">
                             <input type="password" id="password-field" name="password" class="form-control" placeholder="Password">
                             <div class="input-group-append input-group-text">
                                <span toggle="#password-field" class="fas fa-eye toggle-password"></span>
                             </div>
                        </div>
                        
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Phone:</label>
                        </div>    
                        <div class="col-md-8">    
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Major:</label>
                        </div> 
                        <div class="col-md-8 form-group">
                            <select class="form-control" name="major" id="major">
                            <option>Software Engineering</option>
                            <option>Knowledge Engineering</option>
                            <option>Bussiness Information System</option>
                            <option>High Performance computing</option>
                            </select>
                        </div>    
                        
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <label>Academic Year:</label>
                        </div> 
                        <div class="col-md-8 form-group">
                            <select class="form-control" name="academicYear" id="academicYear">
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            </select>
                        </div>    
                        
                    </div>
                    

                    <div class="row form-row">
                        <div class="col-md-4 text-label">
                            <strong>Address:</strong>
                        </div>
                        <div class="col-md-8">    
                            <textarea class="form-control" name="address" placeholder="Address"></textarea>
                        </div>
                    </div>

                    <div class="row confirm">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-success btn-submit btn-block">Submit</button>
                        </div>
                    </div>    

        </form>
    </div>
    <script>
        $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
        });
    </script>
</body>
</html>