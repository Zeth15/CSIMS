<!DOCTYPE html>
<html>
<head>
    <title>Regitrar Register-CourseSUb</title>
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
                margin-top: 100px;
                margin-left: 10%;
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
                        <b style="font-size: 17px; color: #094ba6" id="dashboard">VIEW SCHEDULES</b>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link text-muted" href="Registrar-ControlPanel.html" style="font-size: 15px;" ><i class="fa-solid fa-monument" id="icons"></i><span id="dashboard">Schedules</span></a>
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
                                <td><h6 style="color: #094ba6;">REGISTER COURSE SUBJECT</h6></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <div class="card-body mt-2 mb-2">
                            <div class="row">
                                <form action="#" method="POST">
                                    <select class="form-select mb-3 mt-3" style="width: 200px; margin-left: 3%;"  aria-label="Default select example" id="SubjectNameDropDown">
                                        <option selected disabled>Course Subject Name</option>
                                       
                                    </select>
                                    <div class="col mb-3 mt-3">
                                        <button type="button" class="btn" style="border: 1px solid rgb(225, 225, 225); font-size: 10px;" data-bs-toggle="modal" data-bs-target="#myModal">Define New Course Subject Name</button>
                                    </div>
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-sm">
                                            <div class="modal-content">
                                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title" style="color: #094ba6;">Define New</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" placeholder="NewSubName" name="NewSubName" id="NewSubName">
                                                        <label for="NewSubName">New Course Subject Name</label>
                                                    </div>
                                                </div>
                                        
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                <button type="button" onclick="toDefineNew()" class="btn btn-danger" data-bs-dismiss="modal">Define New</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function toDefineNew(){
                                            var Dropdown = document.getElementById("SubjectNameDropDown");
                                            var toAdd = document.createElement("option");
                                            toAdd.text = document.getElementById("NewSubName").value;
                                            Dropdown.add(toAdd);
                                           
                                        }
                                    </script>
                                    <select class="form-select mb-3" style="width: 350px; margin-left: 3%;" aria-label="Default select example" id="Course">
                                        <option selected disabled>Course</option>
                                        
                                    </select>
                                    <select class="form-select mb-3" style="width: 200px; margin-left: 3%;" aria-label="Default select example" id="YearLevel">
                                        <option selected disabled>Year Level</option>
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                        <option value="1st Year">1st Year</option>
                                        <option value="2nd Year">2nd Year</option>
                                        <option value="3rd Year">3rd Year</option>
                                        <option value="4th Year">4th Year</option>
                                    </select>
                                    <select class="col form-select mb-3" style="margin-left: 3%;"  aria-label="Default select example" id="SectionDropDown">
                                        <option selected disabled>Section</option>
                                       
                                    </select>
                                    <select class="form-select mb-3" style="width: 200px; margin-left: 3%;"  aria-label="Default select example" id="SemesterDropDown">
                                        <option selected disabled>Semester</option>
                                        <option value="1st Semester">1st Semester</option>
                                        <option value="2nd Semester">2nd Semester</option>
                                    </select>
                                    <select class="col form-select mb-3" style="width: 335px; margin-left: 3%;"  aria-label="Default select example" id="TeacherDropDown">
                                        <option selected disabled>Teacher</option>
                                       
                                    </select>
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="Day" placeholder="Day" name="Day">
                                        <label for="TeacherLName">Input Day</label>
                                    </div>
                                    <div class="col form-floating mb-3" style="width: 500px;">
                                        <input type="time" class="form-control" id="FromTime" name="FromTime">
                                        <label for="appt">FROM:</label>
                                    </div>
                                    <div class="col form-floating mb-3" style="width: 500px;">
                                        <input type="time" class="form-control" id="ToTime" name="ToTime">
                                        <label for="appt">TO:</label>
                                    </div>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-block bg-danger text-white" onclick="toConfirm()" data-bs-toggle="modal" data-bs-target="#modalView">Register</button>
                                    </div>

                                    <div class="modal fade" id="modalView">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-sm">
                                            <div class="modal-content">
                                      
                                                <!-- Modal Header -->
                                                <div class="modal-header" style="border-bottom: 1px solid #094ba6;">
                                                    <h4 class="modal-title" style="color: #094ba6;">Schedule</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <b>Course Subject: </b><a id="CourseSub"></a><br>
                                                        <b>Course: </b><a id="cou"></a><br>
                                                        <b>Year Level: </b><a id="YL"></a><br>
                                                        <b>Section: </b><a id="Sec"></a><br>
                                                        <b>Semester: </b><a id="Sem"></a><br>
                                                        <b>Teacher: </b><a id="Teach"></a><br>
                                                        <b>Day Sched: </b><a id="DSched"></a><br>
                                                        <b>Time Sched: </b><a id="FTime"></a><a>-</a><a id="TTime"></a>
                                                    </div>
                                                </div>
                                        
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    function toConfirm(){
                                        let CourseSub = document.getElementById("SubjectNameDropDown").value;
                                        document.getElementById("CourseSub").innerHTML= CourseSub;
                                        let Course = document.getElementById("Course").value;
                                        document.getElementById("cou").innerHTML = Course;
                                        let YearLevel = document.getElementById("YearLevel").value;
                                        document.getElementById("YL").innerHTML = YearLevel;
                                        let Sec = document.getElementById("SectionDropDown").value;
                                        document.getElementById("Sec").innerHTML = Sec;
                                        let Sem = document.getElementById("SemesterDropDown").value;
                                        document.getElementById("Sem").innerHTML = Sem;
                                        let Teach = document.getElementById("TeacherDropDown").value;
                                        document.getElementById("Teach").innerHTML = Teach;
                                        let DaySched = document.getElementById("Day").value;
                                        document.getElementById("DSched").innerHTML = DaySched;
                                        let FTimeSched = document.getElementById("FromTime").value;
                                        document.getElementById("FTime").innerHTML = FTimeSched;
                                        let TTimeSched = document.getElementById("ToTime").value;
                                        document.getElementById("TTime").innerHTML = TTimeSched;

                                    }
                                </script>
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