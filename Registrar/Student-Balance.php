<!DOCTYPE html>
<html>
<head>
    <title>BALANCE</title>
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
                <a class="nav-link text-muted" href="#" style="font-size: 15px;" ><span id="dashboard">Message us!</span></a><br>
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
                        <a class="nav-link text-muted" href="SCHEDULES.html" style="font-size: 15px;"><i class="fa-solid fa-money-check-dollar" id="icons"></i></i><span id="dashboard">Balances</span></a>
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
            <div class="card float-start shadow" id="NAV">
                <div class="card-header" style="border-bottom: 2px solid white">
                    <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                        <tbody>
                            <tr>
                                <td>
                                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="DROPDOWNBUTTON">2022-2023 1st Term</button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">2021-2022 2nd Term</a></li>
                                      <li><a class="dropdown-item" href="#">2021-2022 1st Term</a></li>
                                      <li><a class="dropdown-item" href="#">2020-2021 2nd Term</a></li>
                                      <li><a class="dropdown-item" href="#">2020-2021 1st Term</a></li>
                                    </ul>
                                </td>
                                <td><b style="color: #094ba6" id="TERTIARY">TERTIARY</b></td>
                                <td>Total Balance:</td>
                                <td><span style="background-color: gold;"><b>P50, 000 </b></span></td>
                            </tr>
                    </table>
                </div>
            </div>
            <div class="card float-start shadow" id="GRADES">
                <div class="card-header" style="border-bottom: 2px solid #427dbe">
                    <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                        <tbody>
                            <tr>
                                <td><span style="color: #094ba6">Charges for 2022-2023 1st Term</span></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="card-body" >
                    <table class="table table-bordered table-sm" style="margin-bottom: -5px;">
                            <tbody>
                                <tr class="text-start" style="background-color: rgb(224, 224, 224);">
                                    <td><h6>Tuition Fee</h6></td>
                                    <td><h6><div class="text-end">P15, 000</div></h6></td>
                                </tr>
                                
                               <tr class="text-start" style="background-color: rgb(224, 224, 224); border-top: 10px solid white ;">
                                    <td><h6>Other School Fees</h6><p style="margin-top: -10px; font-size: 12px;">(Registration Fee, School Fee)</p></td>
                    
                                    <td><h6><p></p><div class="text-end">P15, 000</div></h6></td>
                                </tr>

                                <tr class="text-start" style="background-color: rgb(224, 224, 224); border-top: 10px solid white ;">
                                    <td><h6>Miscallenous Fees</h6>
                                        <p style="margin-top: -10px; font-size: 12px;">(SSG, PTA, etc.)</p></td>
                                    <td><h6><p></p><div class="text-end">P15, 000</div></h6></td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
            <div class="card float-start shadow" id="GRADES">
                <div class="card-header" style="border-bottom: 2px solid #427dbe">
                    <table class="table table-borderless table-sm" style="margin-bottom:-5px">
                        <tbody>
                            <tr>
                                <td><span style="color: #094ba6">Payment and Adjustments</span></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="card-body" >
                    <table class="table table-sm" style="margin-bottom: -5px;">
                        <tbody>
                            <tr class="text-start" style="background-color: rgb(224, 224, 224);">
                                <td><h6>August 04, 2022 | OR #56326</h6></td>
                                <td><h6></h6></td>
                            </tr>
                            <tr>
                                <td>Payment:</td>
                                <td>P3000</td>
                            </tr>
                            <tr>
                                <td>Total:</td>
                                <td><div style="color:#094ba6">P3000</div></td>
                            </tr>
                            <tr class="text-start" style="background-color: rgb(224, 224, 224);">
                                <td><h6>Dean's List</h6></td>
                                <td><h6></h6></td>
                            </tr>
                            <tr>
                                <td>Payment:</td>
                                <td>P10,000</td>
                            </tr>
                            <tr>
                                <td>Total:</td>
                                <td><div style="color:#094ba6">P10,000</div></td>
                            </tr>
                            <tr style="background-color:#427dbe; color: white">
                                <td><b>TOTAL PAYMENTS & ADJUSTMENTS:</b></td>
                                <td><b>P10,000</b></td>
                            </tr>
                            <tr style="background-color:#094ba6; color: white">
                                <td><b>REMAINING BALANCE:</b></td>
                                <td><b>P10,000</b></td>
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