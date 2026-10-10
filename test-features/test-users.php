<?php

require_once "../config/database.php";

$sql = "SELECT * FROM users";

$stmt = $pdo->query($sql);

$users = $stmt->fetchAll();

echo "<pre>";
print_r($users);
echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>

<body>

    <h1>Registered Users</h1>

    <?php foreach ($users as $user): ?>

        <p>
            ID: <?php echo $user["id"]; ?><br>
            Username: <?php echo $user["username"]; ?><br>
            Email: <?php echo $user["email"]; ?><br>
            Status: <?php echo $user["status"]; ?><br>
        </p>

        <hr>

    <?php endforeach; ?>

</body>
</html>