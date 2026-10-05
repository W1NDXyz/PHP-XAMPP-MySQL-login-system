<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]== "POST"){

            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == "admin" && $password == "pass123"){
                echo "<p>Login successful! Welcome, $username.</p>";
            } else {
                echo "<p>Invalid username or password. Please try again.</p>";
            }
        }   

    ?>

</body>
</html>