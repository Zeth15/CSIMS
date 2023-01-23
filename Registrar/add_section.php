<?php
    require 'connection.php';

    // Get the form data
    $new_section = $_POST['NewSec'];

     // Insert the data into the database
$query = "INSERT INTO tblSection (Section) VALUES ('$new_section')";
     mysqli_query($conn, $query);
 
     // Close the connection
     mysqli_close($conn);
     echo "Data inserted successfully";
?>