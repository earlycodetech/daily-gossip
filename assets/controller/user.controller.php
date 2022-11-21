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
        private $news;


        public function setVal($fname,$email,$phone,$country,$dob,$gender,$pass,$news)
        {
            $this->fname = $fname;
            $this->email = $email;
            $this->phone = $phone;
            $this->country = $country;
            $this->dob = $dob;
            $this->gender = $gender;
            $this->pass = $pass;
            $this->news = $news;
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
            //    echo $date = date("Y-m-d h:i:s");
                session_start();
                $date = date("Y-m-d");
                $password = password_hash($this-> pass, PASSWORD_DEFAULT);

                if ($this->signUp($this->fname,$this->email,$this->phone,$this->country,$this->dob,$this->gender,$password,$this->news,$date) ===  true) {
                    $_SESSION['success'] = "Sign Up Successful!";
                    header("Location: ../../signup");
                }else{
                    $_SESSION['error'] = "Ooops! Something went wrong";
                    header("Location: ../../signup"); 
                }
            }
        }

        public  function Login($email,$pass){
            $this->email = $email;
            if ($this->checkValidEmail() === false) {
                echo $_SESSION['error'] = "Invalid Email!";
                header("Location: ../../signup");
            }
            elseif ($this->userLogin($email,$pass) === false) {
                header("Location: ../../signup"); 
            }else{
                session_start();
                $row = $this->userLogin($email,$pass);
                $_SESSION['user'] = $row['id'];
                $_SESSION['name'] = $row['fname'];
                header("Location: ../../blog/dashboard"); 
            }
        }
        public function updateUserDetails($fname,$phone,$dob,$gender,$news,$id){
            session_start();
            if (empty($fname) || empty($phone) || empty($dob) || empty($gender)) {
                $_SESSION['error'] = "Fields Cannot be empty!";
                header("Location: ../../blog/profile");
            }else{
                $this->updateUser($fname,$phone,$dob,$gender,$news,$id);
                $_SESSION['name'] = $fname;
                $_SESSION['success'] = "Update Successfull!";
                header("Location: ../../blog/profile"); 
            }
        }


        public function updatePic($file){
            $fileName = $file['name'];
            $fileTMPname = $file['tmp_name'];
            $fileError = $file['error'];
            $fileSize = $file['size'];


            $ext = explode('.',$fileName);
            $ext = end($ext);
            $ext = strtolower($ext);

            $allowedFiles = array('jpg','jpeg','png','gif');

            session_start();
            if (!in_array($ext,$allowedFiles)) {
                $_SESSION['error'] =  'Please upload valid files, jpg,png,jpeg or gif ';
                header("Location: ../../blog/profile"); 
            }
            elseif ($fileError > 0) {
                $_SESSION['error'] =  'File is corrupted';
                header("Location: ../../blog/profile"); 
            }
            elseif($fileSize > 5000000){
                $_SESSION['error'] =  'File is too large, max: 5mb';
                header("Location: ../../blog/profile"); 
            }
            else{
                // Generate a new name for the file
                $newName = "avatar".$_SESSION['user'].'.'.$ext;
                $storageLocation = "../img/avatars/";
                if (!move_uploaded_file($fileTMPname,$storageLocation.$newName)) {
                    $_SESSION['error'] =  'Error uploading file';
                    header("Location: ../../blog/profile"); 
                }else{
                   if ($this -> updateUserAvatar($newName,$_SESSION['user'])) {
                    $_SESSION['success'] =  'Profile Picture Updated';
                    header("Location: ../../blog/profile"); 
                   }else{
                    $_SESSION['error'] =  '!Ooops, Something Went wrong!';
                    header("Location: ../../blog/profile"); 
                   }

                }
            }
        }
    }
