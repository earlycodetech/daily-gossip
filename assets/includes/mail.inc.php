<?php
    session_start();

    if (!isset($_POST['send_mail'])) {
        header("Location: ../../index");
    }else{
        $email = $_POST['email'];
        $subject = $_POST['sub'];
        // $message = $_POST['message'];
        $message = "
            <img src=\"https://daily-gossip.apexassets.online/assets/img/logo.png\" height=\"100\"  />
            <video src=\"https://player.vimeo.com/external/527808435.sd.mp4?s=f9278972191c2be3cf49e1b7adc059fbe5f3aad3&profile_id=165&oauth2_token_id=57447761\" loop autoplay controls muted></video>
            <h1 style=\"border: 1px solid #00000; padding: 30px;\">$_POST[message]</h1>
        ";

        if (empty($email) || empty($subject) || empty($message)) {
            $_SESSION['error'] = "Fields Cannot Be Empty!";
            header("Location: ../../contact");
        }else{
            $to = $email;
            // $headers = "From: Daily Gossip <support@daily-gossip.com>";  //This is for Plain Emails
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: Daily Gossip <support@daily-gossip.com>";


            if(mail($to,$subject,$message,$headers)){
                $_SESSION['success'] = "Mail has been sent!";
                header("Location: ../../contact");
            }else{
                $_SESSION['error'] = "Mail has not been sent!";
                // header("Location: ../../contact");
            }
        }
    }