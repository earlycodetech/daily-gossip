<?php
    include "../classes/user.class.php";

    class UserController extends User{
        private $fname;
        private $email;
        private $phone;
        private $country;
        private $dob;
        private $gender;
        private $pass;


        public function __construct($fname,$email,$phone,$country,$dob,$gender,$pass)
        {
            $this->fname = $fname;
            $this->email = $email;
            $this->phone = $phone;
            $this->country = $country;
            $this->dob = $dob;
            $this->gender = $gender;
            $this->pass = $pass;
        }

        private function checkEmptyInput(){
            if (trim($this->fname) === "" || trim($this->email) === "" || trim($this->phone) === "" || trim($this->country) === "" || trim($this->dob) === "" || trim($this->gender) === "" || trim($this->pass) === "") {
                return false;
                exit();
            }
        }
        private function checkValidEmail(){
            if (!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
                return false;
                exit();
            }
        }
        private function matchPassword($con){
            if ($this->pass != $con) {
                return false;
                exit();
            }
        }
        // private function checkReg(){
        //     if (!preg_match("[a-Z0-9]",$this->pass)) {
        //         return false;
        //         exit();
        //     }
        // }

        public function Validate($con){
            if ($this-> checkEmptyInput() === false) {
                $_SESSION['error'] = "You cannot have empty inputs!";
                header("Location: ../../signup");
            }
            elseif($this->checkValidEmail()  === false){
                $_SESSION['error'] = "Invalid Email!";
                header("Location: ../../signup");
            }
            elseif($this->matchPassword($con)  === false){
                $_SESSION['error'] = "Passwords do not match";
                header("Location: ../../signup");
            }
            // elseif($this->checkReg()  === false){
            //     $_SESSION['error'] = "Passwords must contain a letter and a number";
            //     header("Location: ../../signup");
            // }
            else{
                $_SESSION['success'] = "Congrats";
                header("Location: ../../signup");
            }
        }
    }
