<?php 
      require "assets/includes/class.autoload.php";
    if (!isset($_GET['search'])) {
        header('Location: index');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Gossip</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Logo -->
    <link rel="shortcut icon" href="assets/img/logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/fontawesome/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/lib/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owl-carousel/css/owl.theme.default.min.css">
</head>
<body>
    <!-- Navbar -->
    <?php include_once "assets/includes/nav.inc.php"; ?>

    <!-- Hero -->
    <section>
       <article class="container">
            <div class="card shadow mx-auto p-3">
                <div class="row">
                  
                <?php 
                   $post = new Posts;
                   $post->searchPost($_GET['search'])
                ?>
                </div>


            </div>
       </article>
    </section>




    <!-- Footer -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>