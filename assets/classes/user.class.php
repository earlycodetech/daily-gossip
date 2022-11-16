<?php
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
            return true;
            $sql = null;
            exit();
        }else{
            return false;
            $sql = null;
            exit();
        }
       }
    }