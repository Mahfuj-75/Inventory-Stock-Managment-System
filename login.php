<?php

session_start();

include('Config/database.php');

$error = "";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email=? AND role='purchasing'";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s",$email);

    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){

        $user = $result->fetch_assoc();

        if($password == $user['password_hash']){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            header("location: Views/Purchasing/dashboard.php");

        }else{

            $error = "Wrong Password";
        }

    }else{

        $error = "Invalid Email or password";
    }

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<style>

body{

    margin:0;
    padding:0;
    background:#f4f4f4;
    font-family:Arial;
}

.login-box{

    width:350px;
    background:white;
    margin:100px auto;
    padding:30px;
    border-radius:5px;
    box-shadow:0px 0px 10px lightgray;
}

.login-box h2{

    text-align:center;
    margin-bottom:30px;
}

input{

    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:4px;
}

button{

    width:100%;
    padding:12px;
    background:#333;
    color:white;
    border:none;
    border-radius:4px;
    cursor:pointer;
}

button:hover{

    background:black;
}

.error{

    color:red;
    text-align:center;
    margin-top:15px;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Inventory Management System</h2>

<form method="POST">

<input
type="email"
name="email"
placeholder="Enter Email"
required>

<input
type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit" name="login">

Login

</button>

</form>

<div class="error">

<?php echo $error; ?>

</div>

</div>

</body>
</html>