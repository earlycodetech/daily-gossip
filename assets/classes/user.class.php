<?php
    // session_start();
    // class User {
    //     private $name = "sam122";
    //     public static $old = 12345;


    //     public function __construct($newName)
    //     {
    //         echo "Old Name: ".$this->name;
    //         $this ->name = $newName;
    //     }

    //     public function __destruct()
    //     {
    //         echo  '<br> New UserName: '.$this->name;
    //     }

    //     public static function showName(){
    //         echo self::$old;
    //     }
    // }


    // User::showName();
    include "dbh.class.php";
    class User extends Dbh {
     

       protected function signUp($fname,$email,$phone,$country,$dob,$gender,$pass,$news,$date){
        $sql = $this->connect()->prepare("INSERT INTO users(fname,email,phone,country,dob,gender,passwords,news,date_created) VALUES(?,?,?,?,?,?,?,?,?)");
        if ($sql->execute(array($fname,$email,$phone,$country,$dob,$gender,$pass,$news,$date))) {
            $sql = null;
            return true;
            exit();
        }else{
            $sql = null;
            return false;
            exit();
        }
       }

       protected function userLogin($email,$pass){
            $sql = $this->connect()->prepare("SELECT * FROM users WHERE email = ?");
           if(!$sql->execute(array($email))){
            return false;
            exit();
           };
           $numRow = $sql->rowCount();

           if ($numRow != 1) {
                $_SESSION['error'] = "Email does not exist!";
                return false;
                exit();
           }
           $row = $sql-> fetch();

           if (!password_verify($pass,$row['passwords'])) {
            $_SESSION['error'] = "Incorrect Password!";
            return false;
            exit();
           }
           
           $sql = null;
           return $row;
       }

       public  function getUser($id){
        $sql = $this ->connect()->prepare("SELECT * FROM users WHERE id = ?");
        if ($sql->execute(array($id))) {
            return $sql->fetch();
            $sql = null;
            exit();
        }else{
            $sql = null;
            return null;
            exit();
        };
       }
       protected function updateUser($fname,$phone,$dob,$gender,$news,$id){
            $sql = $this->connect()->prepare("UPDATE users SET fname = ?, phone = ?, dob = ?, gender = ?, news = ? WHERE id = ?");
            if($sql->execute(array($fname,$phone,$dob,$gender,$news,$id))){
                $sql = null;
                return true;
                exit();
            }else{
                $sql = null;
                return false;
                exit();
            }
       }
       protected function updateUserAvatar($pic,$id){
            $sql = $this->connect()->prepare("UPDATE users SET avatars = ? WHERE id = ?");
            if($sql->execute(array($pic,$id))){
                $sql = null;
                return true;
                exit();
            }else{
                $sql = null;
                return false;
                exit();
            }
       }
       
    }