<?php

include('../../Model/UserModel.php');

class ProfileController{

    private $userModel;

    function __construct($conn){

        $this->userModel = new UserModel($conn);
    }

    function profile($id){

        return $this->userModel->getProfile($id);
    }

}

?>