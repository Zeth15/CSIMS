<!DOCTYPE html>
<html>
<head>
    <title>Regitrar Control Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="C:\Neil Mark\college life\WEB DEV\Prac\bootstrap-5.3.0-alpha1-dist\bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css.map">
    <script src="C:\Neil Mark\college life\WEB DEV\Prac\bootstrap-5.3.0-alpha1-dist\bootstrap-5.3.0-alpha1-dist\js\bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/eb9151de57.js" crossorigin="anonymous"></script>



    <style>
        body{
            background-image: url(https://c4.wallpaperflare.com/wallpaper/608/949/179/simple-background-white-texture-white-background-wallpaper-preview.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    <style>
        @media screen and (min-width: 300px) and (max-width: 768px){
            /* extra small devices to medium devices */
            

            #NameOfSchool{
                font-size: 13px;
            }

            #CardNews{
                margin-top: 100px;
                width: 400px;
                margin-left: 5%;
            }

            #sidebar{
                display: none;
            }

            #NAV{
                width: 100%;
                margin-top: 100px;
            }

            #GRADES{
                margin-top: 20px;
                width: 100%;
            }

            #TERTIARY{
                font-size: 15px;
            }

            #SCHOOLYEARFONT{
                font-size: 10px;
            }

            #DROPDOWNBUTTON{
                width: 100%;
                font-size: 10px;
            }

            #CardSched{
                margin-left: 3%;
                width: 95%;
            }

        }
    
        @media screen and (min-width: 769px){
            /*Large devices na sya*/


            #NAV{
                width:98%;
                margin-top: 100px;
                margin-left: 20px;
            }
            #buttonMenu{
                display: none;
            }

            #sidebar{
                display: block;
            }

            #TERTIARY{
                font-size: 20px;
            }

            #GRADES{
                margin-top: 20px;
                margin-left: 20px;
                width: 48%;
            }

            #icons{
                display: none;
            }

            #CardSched{
                margin-left: 10%;
                width: 150%;
            }

            #CardNews{
                margin-top: 150px;
                margin-left: 25%;
                width: 50%;
            }
            
        }
    </style>
</head>
<body>
    <div class="container-fluid text-white p-2 fixed-top" style="background-color: #094ba6;"></i><button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" id="buttonMenu"><i class="fa-solid fa-bars" style="color: white;"></i></button></i><img src="https://upload.wikimedia.org/wikipedia/en/c/c9/Seal_of_the_International_State_College_of_the_Philippines.png" width="50px"><span id="NameOfSchool">INTERNATIONAL STATE COLLEGE OF THE PHILIPPINES</span></div>
    <div class="d-flex" id="wrapper">
        <div class="offcanvas offcanvas-start" id="demo" style="width: 180px">
            <div class="offcanvas-body">
                <br>
                <a class="nav-link text-muted" href="RegistrarDashBoard.html" style="font-size: 15px;"></i><span id="dashboard">Home</span></a><br>
                <b style="font-size: 17px; color: #094ba6;" id="dashboard">REGISTER</b><br>
                <a> </a><br>
                <a class="nav-link text-muted" href="Registrar-RegisterTeacher.html" style="font-size: 15px;"></i><span id="dashboard">Teacher</span></a><br>
                <a class="nav-link text-muted" href="Registrar-Course.html" style="font-size: 15px;"></i><span id="dashboard">Course</span></a><br>
                <a class="nav-link text-muted" href="Registrar-YearLevel.html" style="font-size: 15px;"></i><span id="dashboard">Year Level</span></a><br>
                <a class="nav-link text-muted" href="Registrar-CourseSub.html" style="font-size: 15px;"></i><span id="dashboard">Course Subject</span></a><br>
                <a class="nav-link text-muted" href="Registrar-RegisterStudent.html" style="font-size: 15px;"><span id="dashboard">Student</span></a><br>
                <br>
                <b style="font-size: 17px; color: #094ba6;" id="dashboard">CONTROL PANEL</b><br><a> </a><br>
                <a class="nav-link text-muted" href="Registrar-ControlPanel.html" style="font-size: 15px;"><span id="dashboard">Semester & Period</span></a><br>
                <b style="font-size: 17px; color: #094ba6;" id="dashboard">OTHERS</b><br>
                <a> </a><br>
                <a class="nav-link text-muted" href="Registrar-Announcement.html" style="font-size: 15px;" ><span id="dashboard">Announcements</span></a><br>
                </div>
          </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow" id="sidebar">
            <div class="d-flex flex-column px-3 min-vh-100">
                <div class="nav flex-column" id="sidebarContent">
                    <li class="nav-item" style="margin-top: 90px;">
                        <a class="nav-link text-muted" href="RegistrarDashBoard.html" style="font-size: 15px;"><i class="fa-solid fa-medal" id="icons"></i><span id="dashboard">Home</span></a>
                    </li>
                    <li class="nav-item mt-3" style="margin-left: 9%">
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">REGISTER</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-RegisterTeacher.html" style="font-size: 15px;"><i class="fa-solid fa-medal" id="icons"></i><span id="dashboard">Teacher</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-Course.html" style="font-size: 15px;"><i class="fa-solid fa-money-check-dollar" id="icons"></i></i><span id="dashboard">Course</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-YearLevel.html" style="font-size: 15px;"><i class="fa-solid fa-money-check-dollar" id="icons"></i></i><span id="dashboard">Year Level</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-CourseSub.html" style="font-size: 15px;"><i class="fa-solid fa-money-check-dollar" id="icons"></i></i><span id="dashboard">Course Subject</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-RegisterStudent.html" style="font-size: 15px;"><i class="fa-solid fa-money-check-dollar" id="icons"></i></i><span id="dashboard">Student</span></a>
                    </li>
                    
                    <li class="nav-item mt-3" style="margin-left: 9%">
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">CONTROL PANEL</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-ControlPanel.html" style="font-size: 15px;" ><i class="fa-solid fa-monument" id="icons"></i><span id="dashboard">Semester & Period</span></a>
                    </li>
                    <li class="nav-item mt-3" style="margin-left: 9%">
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">OTHERS</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-Announcement.html" style="font-size: 15px;"><i class="fa-solid fa-circle-info" id="icons"></i><span id="dashboard">Announcements</span></a>
                    </li>
                </div>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="card float-start shadow" id="CardNews">
                <div class="card-header" style="border-bottom: 2px solid #427dbe">
                    <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                        <tbody>
                            <tr>
                                <td><h6 style="color: #094ba6;">CONTROL PANEL</h6></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <div class="card-body mt-2 mb-2">
                            <div class="row">
                                <form action="#" method="POST">
                                    
                                    <select class="form-select mb-3" style="width: 335px; margin-left: 3%;" aria-label="Default select example" id="YearLevel">
                                        <option selected disabled>Semester</option>
                                        <option value="1st Semester">1st Semester</option>
                                        <option value="2nd Semester">2nd Semester</option>
                                        
                                    </select>

                                    <select class="form-select mb-3" style="width: 335px; margin-left: 3%;" aria-label="Default select example" id="YearLevel">
                                        <option selected disabled>Period</option>
                                        <option value="Prelim">Prelim</option>
                                        <option value="Midterm">Midterm</option>
                                        <option value="PreFinal">PreFinal</option>
                                        <option value="Finals">Finals</option>
                                    </select>
                                   
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-block bg-danger text-white" required>Register</button>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div class="text-muted text-center" style="font-size: 15px;">&copy ISCP, All Rights Reserved.</div>
                        </div>
                        <div class="card-footer" style="margin-bottom: -30px;">
                            <img class="card-img-bottom" src="https://upload.wikimedia.org/wikipedia/en/c/c9/Seal_of_the_International_State_College_of_the_Philippines.png" style="width: 10%; margin-left: 45%; margin-right: auto;">
                        </div>
            
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>