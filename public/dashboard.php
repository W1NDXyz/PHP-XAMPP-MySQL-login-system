<?php

session_set_cookie_params([
    "httponly" => true,
    "secure" => false,
    "samesite" => "Lax"
]);

session_start();

if(!isset($_SESSION["user_id"])){

header("Location: login.php");
exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1><?php echo htmlspecialchars("Dashboard"); ?></h1>

    <p>
        Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!
    </p>
    <!--force display in text not HTML or JavaScript-->

    <p><?php echo htmlspecialchars("You are successfully logged in."); ?></p>

    <a href="logout.php">Logout</a>

</body>
</html>