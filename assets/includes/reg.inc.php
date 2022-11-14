<?php
    include "sessions.inc.php";
    include "../controller/user.controller.php";


    if (!isset($_POST['register'])) {
        header("Location: ../../signup");
    }else{
         $fname = $_POST['fname'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $country = $_POST['country'];
         $dob = $_POST['dob'];
         $gender = $_POST['gender'];
         $pass = $_POST['pass'];
         $con_pass = $_POST['con_pass'];


         $user = new UserController($fname,$email,$phone,$country,$dob,$gender,$pass);
         $user->Validate($con_pass);
    }