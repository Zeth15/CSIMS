<?php
session_start();

if(isset($_POST['StudID']) && isset($_POST['StudPWD'])) {
    require 'connection.php';

    $username = mysqli_real_escape_string($conn, $_POST['StudID']);
    $password = mysqli_real_escape_string($conn, $_POST['StudPWD']);

    $query = "SELECT * FROM tblUser WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['Username'] = $username;
        $_SESSION['UserType'] = $user['UserType'];

        if($user['UserType'] === "Teacher") {
            header("Location: RegistrarDashBoard.php");
        } else {
            header("Location: Student-DASHBOARDOFFICIAL.php");
        }
    } else {
        echo "Invalid username or password";
    }
    mysqli_close($conn);
}
?>
