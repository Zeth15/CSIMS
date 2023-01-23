<?php
    require 'connection.php';

    // Get the form data
    $department_name = $_POST['NewDep'];

    // Insert the data into the database
    $query = "INSERT INTO tblDepartment (DeptName) VALUES ('$department_name')";
    mysqli_query($conn, $query);

    // Close the connection
    mysqli_close($conn);
    echo "Data inserted successfully";
?>