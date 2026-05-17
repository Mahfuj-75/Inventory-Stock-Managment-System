<?php

class UserModel{

    private $conn;

    function __construct($conn){

        $this->conn = $conn;
    }

    function login($email){

        $sql = "SELECT * FROM users
                WHERE email=? AND role='purchasing'";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("s",$email);

        $stmt->execute();

        return $stmt->get_result();
    }

    function getProfile($id){

        $sql = "SELECT * FROM users
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i",$id);

        $stmt->execute();

        return $stmt->get_result();
    }

}

?>