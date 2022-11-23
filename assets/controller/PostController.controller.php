<?php
    require "../classes/posts.class.php";
    class PostController extends Posts {
        
        public function addNewPost($title,$post,$file)
        {
            $fileName = $file['name'];
            $fileTMPname = $file['tmp_name'];
            $fileError = $file['error'];
            $fileSize = $file['size'];


            $ext = explode('.',$fileName);
            $ext = end($ext);
            $ext = strtolower($ext);

            $allowedFiles = array('jpg','jpeg','png','gif');

            session_start();
            if (empty($title) || empty($post) || $fileSize < 1) {
                $_SESSION['error'] =  'Fields cannot be empty!';
                header("Location: ../../blog/new-post"); 
            }
            elseif (!in_array($ext,$allowedFiles)) {
                $_SESSION['error'] =  'Please upload valid files, jpg,png,jpeg or gif ';
                header("Location: ../../blog/new-post"); 
            }
            elseif ($fileError > 0) {
                $_SESSION['error'] =  'File is corrupted';
                header("Location: ../../blog/new-post"); 
            }
            elseif($fileSize > 5000000){
                $_SESSION['error'] =  'File is too large, max: 5mb';
                header("Location: ../../blog/new-post"); 
            }
            else{
                // Generate a new name for the file
                $newName = time().'.'.$ext;
                $storageLocation = "../img/posts/";
                if (!move_uploaded_file($fileTMPname,$storageLocation.$newName)) {
                    $_SESSION['error'] =  'Error uploading file';
                    header("Location: ../../blog/new-post"); 
                }else{
                   if ($this -> newPost($title,$newName,$post,$_SESSION['user'])) {
                    $_SESSION['success'] =  'Post Uploaded Successfully';
                    header("Location: ../../blog/new-post"); 
                   }else{
                    $_SESSION['error'] =  '!Ooops, Something Went wrong!';
                    header("Location: ../../blog/new-post"); 
                   }

                }
            }
        }

        public function deletePosts($id)
        {
            if ($this->delPost($id) === true) {
                $_SESSION['success'] =  'Post Deleted Successfully';
                header("Location: ../../blog/dashboard"); 
               }else{
                $_SESSION['error'] =  '!Ooops, Something Went wrong!';
                header("Location: ../../blog/dashboard"); 
               }
        }
    }