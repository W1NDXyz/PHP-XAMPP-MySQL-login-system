<?php

require_once"../includes/session.php";
require_once "../config/database.php";

if(!isset($_SESSION["csrf_token"])){
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32)); //This generates 32 cryptographically secure random bytes
} //generate a random token using random_bytes() and convert it to a hexadecimal representation using bin2hex(). This token is stored in the session variable $_SESSION["csrf_token"].

$errors = [];
$success = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    // ?? means null coalescing operator
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $csrf_token = $_POST["csrf_token"] ?? "";

    // CSRF Token Validation
    if(!hash_equals($_SESSION["csrf_token"], $csrf_token)){
        $errors[] = "Invalid CSRF token.";
    }

    //Username validation
        //=== means strict comparison
    if($username === ""){
        $errors[] = "Username is required.";
    }

    //Email Validation
    if($email === "" ){
        $errors[] = "Email is required.";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Please enter a valid email address.";
    }

    //Password Validation
    if($password === ""){
        $errors[] = "Password is required.";
    }elseif(strlen($password) < 8){  //strlen() calculates the length of a string
        $errors[] = "Password must be at least 8 characters.";
    }elseif(strlen($password) > 72){
        $errors[] = "Password must not exceed 72 characters.";
    }

    if(empty($errors)){

        try{
        //No errors, proceed with registration logic
            $password_hash = password_hash( 
                $password, 
                PASSWORD_DEFAULT
            );
            //converts the password into a secure hash using a strong one-way hashing algorithm

            //SQL statment to insert user data into the database
            $sql = "INSERT INTO users (username, email, password_hash)
                VALUES (?,?,?)";

            //prepare sql
            $stmt = $pdo->prepare($sql);

            //execute SQL with user data
            $stmt->execute([
                $username,
                $email,
                $password_hash
            ]);


            $success = "Registration successful!";

        } catch (PDOException $e){
            $errors[] = "Username or email is already registered.";
        }
    
    }
}
?>

<?php if ($success !== ""): ?>

    <p>
        <?php echo htmlspecialchars($success); ?>
    </p>

<?php endif; ?>


<?php if (!empty($errors)): ?>

    <ul>

        <?php foreach ($errors as $error): ?>

            <li>
                <?php echo htmlspecialchars($error); ?>
            </li>

        <?php endforeach; ?>

    </ul>

<?php endif; ?>


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

        <input
            type="hidden"
            name="csrf_token"
            value="<?php echo htmlspecialchars($_SESSION["csrf_token"]);?>"
        >
        <!--hidden input field is used to include the CSRF token in the form submission. This token is generated on the server side and stored in the user's session. When the form is submitted, the server can compare the submitted token with the one stored in the session to verify that the request is legitimate and not a CSRF attack.-->

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
                minlength="8"
                maxlength="72"
                required
            >
        </div>

        <br>

        <button type="submit">Register</button>

    </form>

</body>
</html>