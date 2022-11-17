<?php
    require "../assets/includes/sessions.inc.php";
    require_once "../assets/includes/class.autoload.php";

    authGuard();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="900; url=../assets/includes/logout.inc.php">
    <title>Daily Gossip | Profile</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Logo -->
    <link rel="shortcut icon" href="../assets/img/logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/lib/fontawesome/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../assets/lib/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/lib/owl-carousel/css/owl.theme.default.min.css">
</head>
<body>
    <div id="loader">
        <div class="loading">
            <span style="--i: 1.12s;">L</span>
            <span style="--i: 1.13s;">O</span>
            <span style="--i: 1.14s;">A</span>
            <span style="--i: 1.15s;">D</span>
            <span style="--i: 1.16s;">I</span>
            <span style="--i: 1.17s;">N</span>
            <span style="--i: 1.18s;">G</span>
            <span style="--i: 1.19s;">.</span>
            <span style="--i: 1.19s;">.</span>
            <span style="--i: 1.19s; ">.</span>
        </div>
    </div>
    <!-- Navbar -->
    <?php include_once "../assets/includes/das-nav.php" ?>
    <!-- Main Content -->
    <main class="main-content">
    
    </main>



    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>