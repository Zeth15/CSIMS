<?php
    require 'connection.php';

    // Get the form data
    $course_name = $_POST['Course'];
    $department = $_POST['DeptName'];

    // Insert the data into the database
    $query = "INSERT INTO tblCourse (CourseName, DepartmentID) VALUES ('$course_name', (SELECT DepartmentID from tblDepartment WHERE DeptName = '$department'))";
    mysqli_query($conn, $query);

    // Close the connection
    mysqli_close($conn);
    echo "Data inserted successfully";
?>