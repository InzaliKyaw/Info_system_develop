<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UITAdminHome</title>
   
    <!-- Font Awesome JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

     <!-- bootstrap v4 -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-sm navbar-dark bg-info fixed-top">
                <div class="container-fluid">
                    <div clss="navbar-header">
                        <a class="navbar-band" href="#"> UIT Admin </a>
                    </div>    
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{route('students')}}" id="student" class="navmenu">
                                <i class="fas fa-home" style="color:#FFF;"></i>
                                Students
                            </a>
                        </li>    
                        <!-- <li class="active">
                        <a href="{{route('students')}}" id="student" class="navmenu">
                            <i class="fas fa-home" style="color:#FFF;"></i>
                            Students
                        </a>
                        </li> -->
                        <li class="active">
                            <a href="{{route('lecturers')}}" id="lecturer" class="navmenu">
                                <i class="fas fa-chalkboard-teacher" style="color:#FFF;"></i>
                                Lecturers
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{route('lecturers')}}" id="classes" class="navmenu">
                                <i class="fas fa-users" style="color:#FFF;"></i>
                                Classes
                             </a>
                        </li>
                        <li>
                            <a href="#" class="navmenu">
                            <i class="fas fa-briefcase"></i>
                            About
                            </a>
                        </li>
                    
                    </ul>
                </div>   
        </nav>

        <div id="mainbody">
            <main>
                @yield('bodycontent')
            </main>    
        <div>  
    <div>
</body>
<script>
  $(document).ready(function () {

    $('#homeSubmenu').hide();
    //toggle list
    $('#home').click(function () {
        $('#homeSubmenu').toggle('slow');
    });
  });
 </script> 

</html>