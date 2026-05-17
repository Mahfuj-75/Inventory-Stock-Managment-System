<?php

include('../Config/database.php');
include('../Model/UserModel.php');

class AuthController{

    private $userModel;

    function __construct($conn){

        $this->userModel = new UserModel($conn);
    }

    function login($email,$password){

        $result = $this->userModel->login($email);

        if($result->num_rows > 0){

            $user = $result->fetch_assoc();

            if($password == $user['password_hash']){

                session_start();

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                header("location: ../Views/Purchasing/dashboard.php");

            }else{

                return "Wrong Password";
            }

        }else{

            return "Email Not Found";
        }
    }

}

?>