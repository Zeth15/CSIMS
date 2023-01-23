<!DOCTYPE html>
<html>
<head>
    <title>Regitrar Register-Teacher</title>
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
     <script>
        function toDefineNew(){
            var dropdown = document.getElementById("DepDropNew");
            var addedDropDown = document.createElement("li");
            addedDropDown.text= "heh";
            dropdown.add(addedDropDown, dropdown[0]);
        }
      </script>
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
                                <td><h6 style="color: #094ba6;">REGISTER TEACHER</h6></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <div class="card-body mt-2 mb-2">
                            <div class="row">
                                <form action="add_teacher.php" method="post">
                                    <div class=" col form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="TeacherID" placeholder="TeacherID" name="TeacherID">
                                        <label for="TeacherID">Teacher ID</label>
                                    </div>
                                    <div class=" col form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="TeacherFName" placeholder="TeacherFName" name="TeacherFName">
                                        <label for="TeacherFName">First Name</label>
                                    </div>
                                    <div class="col form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="TeacherMName" placeholder="TeacherMName" name="TeacherMName">
                                        <label for="TeacherMName">Middle Name</label>
                                    </div>
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="TeacherLName" placeholder="TeacherLName" name="TeacherLName">
                                        <label for="TeacherLName">Last Name</label>
                                    </div>
                                    <select class="form-select mb-3"  id="DepartmentDropDown" name="DeptName" style="width: 335px; margin-left: 3%;"  aria-label="Default select example">
                                        <option selected disabled>Department</option>
                                        <?php
                                            require 'connection.php';
                                            $query ="SELECT DeptName FROM tblDepartment";
                                            $result = $conn->query($query);
                                            if($result->num_rows> 0){
                                                while($optionData=$result->fetch_assoc()){
                                                $option =$optionData['DeptName'];
                                        ?>
                                        <?php
                                            //selected option
                                            if(!empty($DeptName) && $DeptName== $option){
                                            // selected option
                                        ?>
                                        <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                                        <?php 
                                            continue;
                                        }?>
                                        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                                        <?php
                                            }}
                                        ?>
                                    </select>
                                    <div class="col mb-3">
                                        <button type="button" class="btn" style="border: 1px solid rgb(225, 225, 225)" data-bs-toggle="modal" data-bs-target="#myModal">Define New Department</button>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" onclick="insertData()" class="btn btn-block bg-danger text-white" required>Register</button>
                                    </div>
                                    <script>
                                        function insertData() {
                                            var department = document.getElementById("DepartmentDropDown").value;
                                            var xhttp = new XMLHttpRequest();
                                            xhttp.open("POST", "add_teacher.php", true);
                                            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                            xhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    alert(this.responseText);
                                                }
                                            };
                                            xhttp.send("TDepartment=" + department);
                                        }
                                    </script>
                                </form>
                                
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
                                                        <form action="add_department.php" method="post">
                                                            <input type="text" class="form-control" placeholder="NewDep" name="NewDep" id="NewDep">
                                                            <label for="NewDep">New Department</label>
                                                            <input type="submit" class="btn btn-danger" value="Define New" >
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
</body>
</html>