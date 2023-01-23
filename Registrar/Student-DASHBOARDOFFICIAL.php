<!DOCTYPE html>
<html>
<head>
    <title>Student DashBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="C:\xampp\htdocs\Registrar\bootstrap-5.3.0-alpha1-dist\bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
    <script src="C:\xampp\htdocs\Registrar\bootstrap-5.3.0-alpha1-dist\bootstrap-5.3.0-alpha1-dist\js\bootstrap.min.js"></script>  
    <style>
        body{
            background-image: url(https://c4.wallpaperflare.com/wallpaper/608/949/179/simple-background-white-texture-white-background-wallpaper-preview.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        @media screen and (min-width: 300px) and (max-width: 768px){
            /* extra small devices to medium devices */
            

            #NameOfSchool{
                font-size: 13px;
            }

            #CardNews{
                margin-top: 100px;
            }

            #CardLatestGrade{
                width: 100%;
                margin-top: 10px;
                margin-bottom: 15px;
            }

            #CardSched{
                width: 100%;
                margin-top: 10px;
                margin-bottom: 15px;
            }

            #sidebar{
                display: none;
            }

        }
    
        @media screen and (min-width: 769px){
            /*Large devices na sya*/
            #icons{
                display: none;
            }

            #sidebar{
                display: none;
            }

            #CardNews{
                width: 40%;
                margin-top: 100px;
            }

            #CardLatestGrade{
                width: 40%;
                margin-top: 100px;
                margin-left: 15px;
            }

            #CardSched{
                width: 40%;
                margin-top: 10px;
                margin-left: 15px;
            }

            #ClassTable{
                font-size: 10px;
            }

            #buttonMenu{
                display: none;
            }

            #sidebar{
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid text-white p-2 fixed-top" style="background-color: #094ba6;"></i><button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" id="buttonMenu"><i class="fa-solid fa-bars" style="color: white;"></i></button></i><img src="https://upload.wikimedia.org/wikipedia/en/c/c9/Seal_of_the_International_State_College_of_the_Philippines.png" width="50px"><span id="NameOfSchool">INTERNATIONAL STATE COLLEGE OF THE PHILIPPINES</span></div>
    <div class="d-flex" id="wrapper">
        <div class="offcanvas offcanvas-start" id="demo" style="width: 180px">
            <div class="offcanvas-body">
                <a class="nav-link text-muted mt-5" href="#" style="font-size: 15px;"><span id="dashboard">Dashboard</span></a>
                <br>
                <b style="font-size: 17px; color: #094ba6;" id="dashboard">INFORMATION</b><br>
                <a> </a><br>
                <a class="nav-link text-muted" href="Student-Grades.php" style="font-size: 15px;"></i><span id="dashboard">Grades</span></a><br>
                <a class="nav-link text-muted" href="Student-Balance.php" style="font-size: 15px;"><span id="dashboard">Balances</span></a>
                <br>
                <a class="nav-link text-muted" href="Student-SCHEDULES.php" style="font-size: 15px;"><span id="dashboard">Class Schedules</span></a><br>
                <a class="nav-link text-muted" href="Student-Clearance.php" style="font-size: 15px;"><span id="dashboard">Clearance</span></a><br>
                <b style="font-size: 17px; color: #094ba6;" id="dashboard">OTHERS</b><br>
                <a> </a><br>
                <a class="nav-link text-muted" href="Student-History.php" style="font-size: 15px;" ><span id="dashboard">History, Mission & Vision</span></a><br>
                <a class="nav-link text-muted" href="#" style="font-size: 15px;" ><span id="dashboard">Message us!</span></a><br>
                <a class="nav-link text-muted" href="#" style="font-size: 15px;"></i><span id="dashboard">About</span></a><br>
                <a class="nav-link text-muted" href="#" style="font-size: 15px;"><span id="dashboard">FAQs</span></a><br>           
            </div>
          </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow" id="sidebar">
            <div class="d-flex flex-column px-3 min-vh-100">
                <div class="nav flex-column" id="sidebarContent">
                   
                    <li class="nav-item mt-5">
                        <a class="nav-link text-muted mt-5" href="#" style="font-size: 15px;"><i class="fa-solid fa-house" id="icons" icon></i> <span id="dashboard">Dashboard</span></a>
                    </li>
                    <li class="nav-item mt-3" style="margin-left: 9%">
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">INFORMATION</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Student-Grades.php" style="font-size: 15px;"><i class="fa-solid fa-medal" id="icons"></i><span id="dashboard">Grades</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Student-Balance.php" style="font-size: 15px;"><i class="fa-solid fa-money-check-dollar" id="icons"></i></i><span id="dashboard">Balances</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Student-SCHEDULES.php" style="font-size: 15px;"><i class="fa-regular fa-calendar-days" id="icons"></i><span id="dashboard">Class Schedules</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Student-Clearance.php" style="font-size: 15px;"><i class="fa-solid fa-signature" id="icons"></i><span id="dashboard">Clearance</span></a>
                    </li>
                    <li class="nav-item mt-3" style="margin-left: 9%">
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">OTHERS</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Student-History.php" style="font-size: 15px;" ><i class="fa-solid fa-monument" id="icons"></i><span id="dashboard">History, Mission & Vision</span></a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="#" style="font-size: 15px;" ><i class="fa-solid fa-message" id="icons"></i><span id="dashboard">Message us!</span></a>
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
            <!-- THISSS  ISS WHEREE THE CONTENTSSS-->
            <!--NEWS-->
            <div class="container-fluid">
                <div class="card float-start shadow" id="CardNews" style="width: 49%;">
                    <div class="card-header" style="border-bottom: 2px solid #427dbe ">
                        <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                            <tbody>
                                <tr>
                                    <td><h6 style="color: #094ba6; font-size:15px; ">LATEST NEWS</h6></td>
                                </tr>
                                <tr>
                                    <td><h6 class="text-muted display-6" style="font-size:13px; margin-top: -15px;" id="UpdatedDate">as of January 12, 2023</h6></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td><b id="NewsHeading">ISCP - Biringan is now preparing for heavy rains and thunderstorms.</b></td>
                                
                            </tr>
                            <tr>
                                <td><img src="https://scontent.fceb1-2.fna.fbcdn.net/v/t39.30808-6/313292068_134894325999121_7032294214021959706_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHmw8ewG58GdyuOD8OhHy5JjgYCNtpHLjSOBgI22kcuND1P9KvMYPmxsD5zT3Ej2urGCIP5iR29hiFfhCQjWQsE&_nc_ohc=Nw1Hb7eko7sAX_uyoRu&tn=PQ23VjG16GHWbhHc&_nc_ht=scontent.fceb1-2.fna&oh=00_AfBtS_NlXcU5tjuAvCzDMf3VP_ZycFj30UV0CGT51ogKSg&oe=63C88454" width="100%"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--Latest Grade-->
                <div class="card float-start shadow" id="CardLatestGrade" style="width: 49%;">
                    <div class="card-header" style="border-bottom: 2px solid #427dbe">
                        <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                            <tbody>
                                <tr>
                                    <td><h6 style="color: #094ba6; font-size:15px;">LATEST GRADE</h6></td>
                                    <td class="text-center text-muted"><a href="#" class="text-decoration-none text-muted display-6" style="font-size: 15px; float: right;">VIEW ALL</a></td>
                                </tr>
                                <tr>
                                    <td><h6 class="text-muted display-6" style="font-size:13px; margin-top: -15px" id="UpdatedDate">as of January 12, 2023</h6></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="card-body" >
                        <table class="table table-borderless table-sm" style="margin-bottom: 0;">
                                <tbody>
                                    <tr style="font-size: 20px" >
                                        <td><b id="Subject">Enterprise Architecture</b></td>
                                        <td id="Grade" style="color: #2f66b1;" class="text-center">98.50</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;" id="Teacher" class="text-muted display-6">Kristel Joy Tulagan</td>
                                        <td id="Grade" class="text-muted text-center display-6" style="font-size: 15px">Pre-Finals</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
                <!--Class Sched-->
                <div class="card float-start shadow" id="CardSched" style="width: 49%;">
                    <div class="card-header" style="border-bottom: 2px solid #427dbe">
                        <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                            <tbody>
                                <tr>
                                    <td><h6 style="color: #094ba6; font-size:15px;">CLASSES FOR TODAY</h6></td>
                                    <td class="text-center text-muted"><a href="#" class="text-decoration-none text-muted display-6" style="font-size: 15px; float: right;">VIEW ALL</a></td>
                                </tr>
                                <tr>
                                    <td><h6 class="text-muted display-6" style="font-size:13px; margin-top: -15px;" id="UpdatedDate">encoded on January 12, 2023</h6></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm" width="auto" id="ClassTable" style="font-size: 13px;">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>