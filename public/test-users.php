<?php

require_once "../config/database.php";

$sql = "SELECT * FROM users";

$stmt = $pdo->query($sql);

$users = $stmt->fetchAll();

echo "<pre>";
print_r($users);
echo "</pre>";