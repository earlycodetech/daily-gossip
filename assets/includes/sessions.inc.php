<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
    session_start();

   function errorMsg(){
    if (isset($_SESSION['error'])) {
        $output = " <div class=\"alert alert-danger alert-dismissible text-center fade show\" role=\"alert\">
        <strong>";
        $output .= htmlentities($_SESSION['error']);
        $output .= "</strong>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>";
        $_SESSION['error'] = null;

        return $output;
    }
   }
   function successMsg(){
    if (isset($_SESSION['success'])) {
        $output = " <div class=\"alert alert-success alert-dismissible text-center fade show\" role=\"alert\">
        <strong>";
        $output .= htmlentities($_SESSION['success']);
        $output .= "</strong>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>";
        $_SESSION['success'] = null;

        return $output;
    }
   }
