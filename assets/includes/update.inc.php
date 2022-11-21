<?php
    include "sessions.inc.php";
    include "../controller/user.controller.php";


    // This is to update database data
    if (isset($_POST['update'])) {
         $fname = $_POST['fname'];
         $phone = $_POST['phone'];
         $dob = $_POST['dob'];
         $gender = $_POST['gender'];
         $news = false;
         if (isset($_POST['news'])) {
            $news = true;
         }

         var_dump($_POST);
         $user = new UserController;
         $user->updateUserDetails($fname,$phone,$dob,$gender,$news,$_SESSION['user']);
         header("Location: ../../blog/profile");
    }

    // This will update profile picture
    elseif(isset($_POST['updatePic'])){
        $file = $_FILES['file'];

        $user = new UserController;
        $user->updatePic($file);
    }
    else{
        header("Location: ../../signup");
    }