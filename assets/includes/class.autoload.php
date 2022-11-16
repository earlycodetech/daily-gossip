<?php
    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
        //The url is the current path of the user
         $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

         
        if (!strpos($url, 'classes') !== false) {
            // When the url does not contain a string of classes
          $path = "assets/classes/";
        }
        else {
            // When the url does not contains a string of classes
          $path = "classes/";
        }
        
         
        $ext = ".class.php";
    
        // Check if the file Exist
          if(file_exists($path . $className . $ext)){
    
            require_once $path . $className . $ext;
          }
          elseif(file_exists("assets/controller/". $className . '.controller.php')){

            require_once "assets/controller/". $className . '.controller.php';

          }
          else{
            require_once "../classes/". $className . $ext;
    
          }
    
        //   echo $path . $className . $ext;
      }

