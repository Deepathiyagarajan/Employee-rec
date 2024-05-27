<?php
include("P:\\xampp\\htdocs\\jayadeepa\\config.php");

// Check if update request is sent
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $role = $_POST['role'];
    $task = $_POST['task'];
    $address = $_POST['address'];

    // Perform update query
    $update_query = "UPDATE employee_info SET name='$name', email='$email', password='$password', mobile='$mobile', role='$role', task='$task', address='$address' WHERE id='$id'";
    $update_result = mysqli_query($mysqli, $update_query);

    if($update_result) {
        // Redirect to the view page after update
        header("Location: emp.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }
}

// Fetch the details of the selected row to pre-fill the form
$id = $_GET['id'] ?? null;
$query = "SELECT * FROM employee_info WHERE id='$id'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Info</title>
    <link rel="stylesheet" href="form.css">
</head>
<center>
<body style="background-image:url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAzgMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAABAgADBv/EAB4QAQEBAAMBAQEBAQAAAAAAAAABEQIhMUESUWEi/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECBf/EABYRAQEBAAAAAAAAAAAAAAAAAAABEf/aAAwDAQACEQMRAD8A8JyEmDl2nz6jrLO9J/R+ATohqKK0YA2GMYDaqd1NPGCnE2KH0E4ZFYPvQBqam9iFkxtBWp1mzFG0NcbRGjRMvZ0BR4qwcoBh9g4zo52DHdBiKZGzC18FEio0YDIrGip6KgYvlIMCpacT9aCCyJWLxBzY8o0n9EHoNkFUDfAURLQ2TAqK3WsPHpuV66FE9ViJVehDh4xjgpFqsArcSZDkQHH1f1pxxt7FXnQw6fg05fns2KsGCJxPLt1xMmBjlyiXXnd6xyGGsFnRvfjVREjWHDmAjlUy/wBVU2DK70G3SKnFyYIuA3a+MEMo0tP3Do6QVxOdo410yisJFSU4Lgivh48TmCxMjWLsyJoCJ5dHYOXfoOXKOdjtZqMGESCunwZAEjVtFvSiOTY1v9T+v+rBkqietVOxSY2KwBDZjTprUVoc7biuCiRc7g0zwF8YcHHfqxqNPDGi5BUWI5R1sRymA54KtNgiUco6YmwSuVbdXZ2nMGUWBdSCeU7TeP8AjoLVRFiuPqbVcRHSdN6GiNHGbRQVFIihVTtcRxWEXxXsxzho2qVcrlFQF6m2VNYBQ1sR+hKqo5XDqOVGda1NbU8qI1GtfE2KitTR4Ngmp4ukqJFQFy6UT10wURs7HZRTFSJmK4gYuVMrCusprlx9WNGGVHZgHezUtaCOSI6VNmDNjSjlYPWzsBnXgVy8RRE30RWamqgvqFgTDaJRdaCLiuN6Rqpcg0sYJTqCp42iUCukVO3OVcvQGtvYYXVSr4uUVLgsqqkfrRaGmtb0Lek2iHZ/G3pGtohqfTvQ0GTTRVRP00fW0RP3yi1dF8EbiRDgQmJsbiK6QM1FMXK5worprTlEa2guVtRqusA0aACuVRazUBa29Dl40ohAvrXQY1MhETfGVfExQ/TWZAT1V8ZlSN8aMyNFPIso0MZkFX4KGFaKnjMBjRmBI+hhDy8TCwVq1ZhGhZhUcxxZlH//2Q=='); background-size:cover; background-repeat:no-repeat;">

<h2>Update Employee Info</h2>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="name" >Name:</label>
    <input type="text" id="name" name="name" style=" background-color:plum;" value="<?php echo $row['name']; ?>"><br><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" style=" background-color:plum;" value="<?php echo $row['email']; ?>"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" style=" background-color:plum;" value="<?php echo $row['password']; ?>"><br><br>
    <label for="mobile">Mobile:</label>
    <input type="text" id="mobile" name="mobile" style=" background-color:plum;" value="<?php echo $row['mobile']; ?>"><br><br>
    <label for="role">Role:</label>
    <input type="text" id="role" name="role" style=" background-color:plum;"value="<?php echo $row['role']; ?>"><br><br>
    <label for="task">Task:</label>
    <input type="text" id="task" name="task" style=" background-color:plum;" value="<?php echo $row['task']; ?>"><br><br>
    <label for="address">Address:</label>
    <textarea id="address" name="address" style=" background-color:plum;"><?php echo $row['address']; ?></textarea><br><br>
    <input type="submit" name="submit" value="Update" style="background-color:violet;">
</form>

</body>
</center>
</html>