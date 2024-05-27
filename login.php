<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styl.css">
</head>
<center>
<body style="background-image:url('https://img.freepik.com/free-photo/business-woman-working-laptop-office_1303-31704.jpg?size=626&ext=jpg&ga=GA1.1.1700460183.1709424000&semt=ais' ); background-size:cover; background-repeat:no-repeat;">     
   <h2 style="color:black;">Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required style="border-radius:10px; background-color:darkgray;"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="one" name="password" required  style="border-radius:10px; background-color:darkgray;"><br><br>
            <button type="submit" name="login" style="background-color:gray;">Login</button>
        </form>

        <?php
        if (isset($_POST['login'])) {
            include 'config.php';

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['username'] = $username;
                    header("Location: emp.php");
                } else {
                    echo "Incorrect password.";
                }
            } else {
                echo "No user found with that username.";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</center>
</html>