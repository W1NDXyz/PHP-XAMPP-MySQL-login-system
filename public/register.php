<?php

$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // ?? means null coalescing operator
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

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
    }

    if(empty($errors)){
        //No errors, proceed with registration logic
        echo "<p>Registration successful!</p>";
    }else{
        //Display errors
        echo "<ul>";
        foreach($errors as $error){
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }

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