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
         $news = $_POST['news'];
         $con_pass = $_POST['con_pass'];
         if ($news === 'subscribe') {
            $news = true;
         }

         $user = new UserController;
         $user ->setVal($fname,$email,$phone,$country,$dob,$gender,$pass,$news);
         $user->Validate($con_pass);
    }