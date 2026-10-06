<?php

require_once "../config/database.php";

$username = "Max";
$email = "max@gmail.com";
$password = "12345678";

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password_hash)
        VALUES (?, ?, ?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $username,
    $email,
    $password_hash
]);

echo "User inserted successfully!";