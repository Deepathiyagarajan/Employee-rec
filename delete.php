<?php
include("P:\\xampp\\htdocs\\jayadeepa\\config.php");

// Check if delete request is sent
if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // Perform deletion query
    $delete_query = "DELETE FROM employee_info WHERE id = $delete_id";
    
    // Execute deletion query
    $delete_result = mysqli_query($mysqli, $delete_query);

    // Check if deletion was successful
    if($delete_result) {
        // Redirect back to the home page after deletion
        header("Location: emp.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($mysqli);
    }
}
?>