<?php
    require 'connection.php';

    // Get the form data
    $department = $_POST['DeptName'];
    $year_level = $_POST['YearLevel'];
    $section = $_POST['SectionDropDown'];

    // Insert the data into the database
    $query = "INSERT INTO tblyearLevel (YearLevel, LvlDepartment, LvlSection) VALUES ('$year_level', '$department', '$section')";
    mysqli_query($conn, $query);

    // Close the connection
    mysqli_close($conn);
    echo "Data inserted successfully";
?>