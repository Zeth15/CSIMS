<?php
    session_start();

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "dbcsims";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>