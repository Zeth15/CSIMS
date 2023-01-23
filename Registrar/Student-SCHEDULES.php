<!DOCTYPE html>
<html>
<head>
    <title>Schedules</title>
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
            
        }
    </style>
</head>
<body>
    <div class="container-fluid text-white p-2 fixed-top" style="background-color: #094ba6;"></i><button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" id="buttonMenu"><i class="fa-solid fa-bars" style="color: white;"></i></button></i><img src="https://upload.wikimedia.org/wikipedia/en/c/c9/Seal_of_the_International_State_College_of_the_Philippines.png" width="50px"><span id="NameOfSchool">INTERNATIONAL STATE COLLEGE OF THE PHILIPPINES</span></div>
    <div class="d-flex" id="wrapper">
        <div class="offcanvas offcanvas-start" id="demo" style="width: 180px">
            <div class="offcanvas-body">
                <a class="nav-link text-muted mt-5" href="DASHBOARDOFFICIAL.html" style="font-size: 15px;"><span id="dashboard">Dashboard</span></a>
                <br>
                <b style="font-size: 17px; color: #094ba6;" id="dashboard">INFORMATION</b><br>
                <a> </a><br>
                <a class="nav-link text-muted" href="Grades.html" style="font-size: 15px;"></i><span id="dashboard">Grades</span></a><br>
                <a class="nav-link text-muted" href="BALANCE.html" style="font-size: 15px;"><span id="dashboard">Balances</span></a>
                <br>
                <a class="nav-link text-muted" href="SCHEDULES.html" style="font-size: 15px;"><span id="dashboard">Class Schedules</span></a><br>
                <a class="nav-link text-muted" href="Clearance.html" style="font-size: 15px;"><span id="dashboard">Clearance</span></a><br>
                <b style="font-size: 17px; color: #094ba6;" id="dashboard">OTHERS</b><br>
                <a> </a><br>
                <a class="nav-link text-muted" href="History.html" style="font-size: 15px;" ><span id="dashboard">History, Mission & Vision</span></a><br>
                <a class="nav-link text-muted" href="#" style="font-size: 15px;"></i><span id="dashboard">About</span></a><br>
                <a class="nav-link text-muted" href="#" style="font-size: 15px;"><span id="dashboard">FAQs</span></a><br>           
            </div>
          </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow" id="sidebar">
            <div class="d-flex flex-column px-3 min-vh-100">
                <div class="nav flex-column" id="sidebarContent">
                   
                    <li class="nav-item mt-5">
                        <a class="nav-link text-muted mt-5" href="DASHBOARDOFFICIAL.html" style="font-size: 15px;"><i class="fa-solid fa-house" id="icons" icon></i> <span id="dashboard">Dashboard</span></a>
                    </li>
                    <li class="nav-item mt-3" style="margin-left: 9%">
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">INFORMATION</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Grades.html" style="font-size: 15px;"><i class="fa-solid fa-medal" id="icons"></i><span id="dashboard">Grades</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="BALANCE.html" style="font-size: 15px;"><i class="fa-solid fa-money-check-dollar" id="icons"></i></i><span id="dashboard">Balances</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="SCHEDULES.html" style="font-size: 15px;"><i class="fa-regular fa-calendar-days" id="icons"></i><span id="dashboard">Class Schedules</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Clearance.html" style="font-size: 15px;"><i class="fa-solid fa-signature" id="icons"></i><span id="dashboard">Clearance</span></a>
                    </li>
                    <li class="nav-item mt-3" style="margin-left: 9%">
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">OTHERS</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="History.html" style="font-size: 15px;" ><i class="fa-solid fa-monument" id="icons"></i><span id="dashboard">History, Mission & Vision</span></a>
                    </li>
                    
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="#" style="font-size: 15px;"><i class="fa-solid fa-circle-info" id="icons"></i><span id="dashboard">About</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="#" style="font-size: 15px;"><i class="fa-solid fa-circle-question" id="icons"></i><span id="dashboard">FAQs</span></a>
                    </li>
                </div>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="card float-start shadow" style="margin-top: 100px;" id="CardSched">
                <div class="card-header" style="border-bottom: 2px solid #427dbe">
                    <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                        <tbody>
                            <tr>
                                <td><h6 style="color: #094ba6">CLASSES SCHEDULES</h6></td>
                            </tr>
                            <tr>
                                <td><h6 class="text-muted display-6" style="font-size:10px; margin-top: -15px;" id="UpdatedDate">Academic Year 2022-2023</h6></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-sm" width="auto" id="ClassTable">
                        <tbody>
                            <tr class="text-muted" style="background-color: rgb(239, 236, 236)";>
                                <td>COURSE SUBJECT</td>
                                <td>TIME</td>
                                <td>ROOM</td>
                                <td>TEACHER</td>
                            </tr>
                            <tr id="ClassSched">
                                <td id="CourseSub"><b>Event Driven Programming</b></td>
                                <td id="CourseTime">8:30-10:30</td>
                                <td id="CourseRoom">Computer Lab 4</td>
                                <td id="CourseTeacher">Piolo Pascual</td>
                            </tr>
                            <tr id="ClassSched">
                                <td id="CourseSub"><b>Enterprise Architecture</b></td>
                                <td id="CourseTime">10:30-1:30</td>
                                <td id="CourseRoom">301A</td>
                                <td id="CourseTeacher">Kuya Kim Atienza</td>
                            </tr>
                            <tr id="ClassSched">
                                <td id="CourseSub"><b>Professional in Information System</b></td>
                                <td id="CourseTime">1:30-02:30</td>
                                <td id="CourseRoom">201B</td>
                                <td id="CourseTeacher">Ted Failon</td>
                            </tr>
                            <tr id="ClassSched">
                                <td id="CourseSub"><b>Computer Programming 3</b></td>
                                <td id="CourseTime">2:30-04:30</td>
                                <td id="CourseRoom">310B</td>
                                <td id="CourseTeacher">King Charles III</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>