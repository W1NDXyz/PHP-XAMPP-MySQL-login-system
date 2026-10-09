
<?php

require_once __DIR__ . "/session.php";
require_once __DIR__ . "/../config/database.php";

//headers instruct browers and intermediary caches not to store th eprotecteed respone for later reuse,
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// 1. Check whether the user is logged in.
if (!isset($_SESSION["user_id"])) {

    header("Location: ../public/login.php");
    exit;
}

// 2. Retrieve the user's current account status.
$sql = "SELECT id, username, status
        FROM users
        WHERE id = ?
        LIMIT 1";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_SESSION["user_id"]
]);

$user = $stmt->fetch();

// 3. Reject missing or unauthorized accounts.
if (!$user || $user["status"] !== "active") {

    session_unset();
    session_destroy();

    header("Location: ../public/login.php?reason=account");
    exit;
}

// 4. Refresh the username from the database.
$_SESSION["username"] = $user["username"];
