<?php

require_once __DIR__."/security_hearders.php";

session_set_cookie_params([
    "httponly" => true,
    "secure" => false,
    "samesite" => "Lax"
]);

session_start();

$session_timeout = 900; //900/60 = 15 mins

if(isset($_SESSION["user_id"])){
    if(isset($_SESSION["last_activity"]) && (time() - $_SESSION["last_activity"]) > $session_timeout
    ){
    session_unset();
    session_destroy();

    header("Location: ../public/login.php");
    exit;
    }

    $_SESSION["last_activity"] = time();
}


?>