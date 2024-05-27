<?php
include("P:\\xampp\\htdocs\\jayadeepa\\config.php");
if (isset($_POST['submit'])) { 
    // Check if all required fields are filled
    if(empty($_POST['empname']) || empty($_POST['empid']) || empty($_POST['empdept'])) {
        echo "Please fill all the fields.";
        exit; // Stop further execution
    }
    $n = mysqli_real_escape_string($mysqli, $_POST['empname']);
    $i = mysqli_real_escape_string($mysqli, $_POST['empid']);
    $d = mysqli_real_escape_string($mysqli, $_POST['empdept']);
    
    $query = "INSERT INTO employeedetails VALUES ('$n', '$i', '$d')";
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        echo "Registration success";
    } else {
        // Print meaningful error message
        echo "Error: " . mysqli_error($mysqli);
    }
}
?> 
