<?php

include('Config/database.php');
include('Config/config.php');

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $database = new Database();
    $conn = $database->connect();

    $query = "SELECT * FROM users WHERE email = ? AND role = 'purchasing'";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        // Simple password check
        if ($password == $user['password_hash']) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];

            header("Location: Public/dashboard.php");
            exit();
        } else {
            $error = "Wrong Password!";
        }

    } else {
        $error = "User Not Found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Purchasing Officer Login</title>

    <style>

        body{
            font-family: Arial;
            background:#f5f5f5;
        }

        .login-box{
            width:350px;
            background:white;
            margin:100px auto;
            padding:30px;
            border-radius:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:10px;
        }

        button{
            width:100%;
            padding:10px;
            margin-top:15px;
            background:blue;
            color:white;
            border:none;
        }

        .error{
            color:red;
        }

    </style>

</head>
<body>

<div class="login-box">

    <h2>Purchasing Officer Login</h2>

    <?php
        if($error != ""){
            echo "<p class='error'>$error</p>";
        }
    ?>

    <form method="POST">

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit">Login</button>

    </form>

</div>

</body>
</html>