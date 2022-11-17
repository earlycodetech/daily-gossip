<?php
    include "../controller/user.controller.php";

    if (!isset($_POST['login'])) {
        header("Location: ../../signup");
    }else{
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $user = new UserController();
        $user->Login($email,$pass);
    }