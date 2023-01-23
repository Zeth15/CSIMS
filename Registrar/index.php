<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="C:\xampp\htdocs\Registrar\bootstrap-5.3.0-alpha1-dist\bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
    <script src="C:\xampp\htdocs\Registrar\bootstrap-5.3.0-alpha1-dist\bootstrap-5.3.0-alpha1-dist\js\bootstrap.min.js"></script>  
    <style>
        body{
            background-image: url(image/bg-01.jpg);

            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        #LogInForm{
            width: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn{
            padding: 12px; 
            margin-top: 5px; 
            font-size: 15px;
            background-color: #dc3545;
        }

        .btn:hover{
            background: #e05260;
        }
    </style>

</head>
<body>
    <div class="container-fluid p-1" style="background-color: #427dbe;"></div>
    <div class="container-fluid p-2 text-white text-center " style="background-color: #094ba6;">INTERNATIONAL STATE COLLEGE OF THE PHILIPPINES</div>
    <div class="container-fluid mt-5">
        <div class="card float-start mt-5" id="LogInForm" style="width: 400px;">
            <div class="card-header" style="padding: 15px 15px 10px">
                <img class="card-img-top mt-1 mb-2" src="image/logo-01.png" style="width: 100px; margin-left: 35%; margin-right: auto;">
                
            </div>
            <div class="card-body mt-2 mb-2" style="margin: 15px;">
                <h6 class="text-center display-6" style="font-size: 25px;"><b>Login Now</b></h6>
                <form method="post" action="loginCon.php">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="StudID" placeholder="StudentID" name="StudID" style="font-size: 15px;">
                        <label for="StudID">Student ID</label>
                    </div>
                    <div class="form-floating mb-3 mt-4">
                        <input type="password" class="form-control" id="StudPWD" placeholder="PassWord" name="StudPWD" style="font-size: 15px;">
                        <label for="StudPWD">Password</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-block text-white" required>Submit</button>
                    </div>
                </form>
                <br>
                <div class="text-muted text-center" style="font-size: 15px;">&copy ISCP, All Rights Reserved.</div>
            </div>
            <div class="card-footer">
                <br>
            </div>
        </div>
    </div>
    
</body>



</html>