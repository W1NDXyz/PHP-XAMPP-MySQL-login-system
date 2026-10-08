<?php
//PHP sessions allow the server to remember information about the current user between different requests.
session_start();

require_once "../config/database.php";

$_SESSION["login_attempts"] = $_SESSION["login_attempts"] ?? 0;
$_SESSION["login_blocked_until"] = $_SESSION["login_blocked_until"] ?? 0;

if(!isset($_SESSION["csrf_token"])){
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32)); //This generates 32 cryptographically secure random bytes
}

if(time() < $_SESSION["login_blocked_until"]){
    echo "<p> Too many failed attempts. Please try again later.</p>";
    exit;
}


if($_SERVER["REQUEST_METHOD"] === "POST"){

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $csrf_token = $_POST["csrf_token"] ?? "";

    if(!hash_equals($_SESSION["csrf_token"], $csrf_token)){
        echo "<p> Invalid CSRF token. </p>";
        exit;
    }

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$email]);
    $user = $stmt->fetch();

    if($user && password_verify($password, $user["password_hash"])){

        if(password_needs_rehash( $user["password_hash"], PASSWORD_DEFAULT)){
            $new_hash = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            $sql = "UPDATE users
                SET password_hash = ?
                WHERE id =?";
                
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $new_hash,
                $user["id"]
            ]);
        }

        $_SESSION["login_attempts"] = 0;
        $_SESSION["login_blocked_until"] = 0;

        session_regenerate_id(true);
        
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        
        header("Location: dashboard.php");
        exit;
        
    } else {
        // login attemps block logic
        $_SESSION["login_attempts"]++;

        if($_SESSION["login_attempts"] >= 5){
            $_SESSION["login_blocked_until"] = time() + 60;
            echo"<p> Too many failed attempts. Please try again in 60 seconds. </p>";
            exit;
        }

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

        <input
            type = "hidden"
            name = "csrf_token"
            value="<?php echo htmlspecialchars($_SESSION["csrf_token"]); ?>"
        >

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