<?php

session_start();

require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if ($password == $user['password_hash']) {

            $_SESSION['user_id'] = $user['id'];

            $_SESSION['role'] = $user['role'];

            $_SESSION['name'] = $user['name'];

            header("Location: Views/staff/dashboard.php");

            exit();

        } else {

            echo "Wrong Password";

        }

    } else {

        echo "User Not Found";

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<h1>Warehouse Login</h1>

<form method="POST">

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Login</button>

</form>

</body>
</html>