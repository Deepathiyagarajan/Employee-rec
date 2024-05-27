<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<center>
<body style="background-image:url('https://www.activescreening.com/wp-content/uploads/2019/07/about_02-1080x581.jpg'); background-size:cover; background-repeat:no-repeat;">
    <h2>Register</h2>
   
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required style="border-radius:10px";><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required style="border-radius:10px";><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required style="border-radius:10px;"><br><br>
        <button type="submit" name="register" style="border-color:10px; background-color:gray; "><h3>Register</h3></button>
    </form>

    <?php
    if (isset($_POST['register'])) {
        include 'config.php';

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    
</body>
</center>
</html>