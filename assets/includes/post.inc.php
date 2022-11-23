<?php
    require "../controller/PostController.controller.php";
    if (isset($_POST['newPost'])) {
        $title = $_POST['title'];
        $details= $_POST['post'];
        $file = $_FILES['file'];

        $post = new PostController;
        $post->addNewPost($title,$details,$file);
    }
    elseif (isset($_GET['del'])) {
         $id =  $_GET['del'];
         $post = new PostController;
         $post ->deletePosts($id);
    }