<?php
//PHP sessions allow the server to remember information about the current user between different requests.
session_start();

require_once "../config/database.php";

//$errors =[];

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$email]);
    $user = $stmt->fetch();

    if($user && password_verify($password, $user["password_hash"])){

        session_regenerate_id(true);
        
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];

        header("Location: dashboard.php");
        exit;
        
    } else {
        echo htmlspecialchars("Invalid email or password.");
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

</head>

<body>

    <h1>Login</h1>

    <form method="POST" action="login.php">

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

        <button type="submit">Login</button>

    </form>

</body>

</html>