<?php
include("P:\\xampp\\htdocs\\jayadeepa\\config.php");
if(isset($_POST['submit']))
{
   $i=mysqli_real_escape_string($mysqli,$_POST['id']);
   $n=mysqli_real_escape_string($mysqli,$_POST['name']);
   $e=mysqli_real_escape_string($mysqli,$_POST['email']);
   $p=mysqli_real_escape_string($mysqli,$_POST['password']);
   $m=mysqli_real_escape_string($mysqli,$_POST['mobile']);
   $r=mysqli_real_escape_string($mysqli,$_POST['role']);
   $t=mysqli_real_escape_string($mysqli,$_POST['task']);
   $a=mysqli_real_escape_string($mysqli,$_POST['address']);

   $query="INSERT INTO employee_info VALUES ('$i','$n','$e','$p','$m','$r','$t','$a')";
   $result=mysqli_query($mysqli,$query);
   if($result){
    header('location:emp.php');
   }
   else{
    echo 'error:'. mysqli_error($mysqli);
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body background="https://img.freepik.com/free-vector/gradient-black-background-with-cubes_23-2149138432.jpg" style=" background-repeat: no-repeat;
    background-size: cover;">
    <form method="post">
        <center>
            <h1 style="color: palevioletred;">FORM</h1>
            <label style="color: darkorchid;">Employee Id: <input type="text" name="id" style="border-color: darkorchid;"></label><br><br>
                <label style="color: darkorchid;">Employee Name: <input type="text" name="name" style="border-color: darkorchid;"></label><br><br>
                <label style="color: darkorchid;">Employee Email:<input type="text" name="email" style="border-color: darkorchid;" ></label><br><br>
                <label style="color: darkorchid;">Employee Password:<input type="password" name="password" style="border-color: darkorchid;"></label><br><br>
                <label style="color: darkorchid;">Employee Mobile No:<input type="text" name="mobile" style="border-color: darkorchid;"></label><br><br>
                <label style="color:darkorchid;">Employee Role:<input type="text" name="role" style="border-color: darkorchid;"> </label><br><br>
                <label style="color:darkorchid;">Employee Task:<input type="text" name="task" style="border-color: darkorchid;"> </label><br><br>
                <label style="color:darkorchid;">Employee Address:<input type="text" name="address" style="border-color: darkorchid;"> </label><br><br>
<input type="submit" value="Submit" name="submit" style= "border-color: darkorchid; background-color:yellowgreen;">
        </center>
    </form>
    
</body>
</html>