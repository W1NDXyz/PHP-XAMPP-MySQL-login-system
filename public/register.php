<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo"Password: " . $password . "<br>";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
</head>

<body>

    <h1>Create Account</h1>

    <form method="POST" action="register.php">
    <!--method = POST ,When the user submits this form, send the form data using an HTTP POST request.-->
        <div>
            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                required
            >
        </div>

        <br>

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                required
            >
        </div>

        <br>

        <div>
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >
        </div>

        <br>

        <button type="submit">Register</button>

    </form>

</body>
</html>