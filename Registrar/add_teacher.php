<?php
    require 'connection.php';

    $teacher_id = $_POST['TeacherID'];
    $first_name = $_POST['TeacherFName'];
    $middle_name = $_POST['TeacherMName'];
    $last_name = $_POST['TeacherLName'];
    $department = $_POST['DeptName'];

    // Insert the data into the database
    $query = "INSERT INTO tblTeacher (TeacherID, TFName, TMName, TLName, TDepartment)
    VALUES ('$teacher_id', '$first_name', '$middle_name', '$last_name', '$department')";
    mysqli_query($conn, $query);

    // Close the connection
    mysqli_close($conn);
    
    echo "Data inserted successfully";
?>