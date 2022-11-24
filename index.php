<?php
require "assets/includes/class.autoload.php";
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
    <section id="hero" class="mt-5">
        
        <div class="container">
            <div class="row">
                <?php
                $blog = new Posts();
                $blog->showTrendPost();

                ?>

            </div>
        </div>
    </section>

    <!-- Recent Posts -->

    <section id="recent">
        <div class="container">
            <p class="fs-3 fw-bold">Recent Posts</p>

            <div class="owl-carousel">
                <!-- Start -->
                <?php
                $post = new Posts();
                $post->showAllPosts();
                ?>
                <!-- End -->
            </div>
        </div>
    </section>




    <!-- Footer -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/lib/owl-carousel/js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            center: true,
            items: 2,
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
</body>

</html>