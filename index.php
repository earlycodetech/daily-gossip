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
                <a href="#" class="col-md-8 mb-3 ">
                    <div class="post-wrap">
                        <img src="assets/img/posts/news-1.jpg" class="img-fluid main-post h-100" alt="Trending">
                        <div class="overlay"></div>
                        <div class="caption">
                            <p class="fs-2 fw-bold title">This is the Latest News</p>
                            <p class="fs-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quibusdam blanditiis tempore at, dignissimos dolorem harum minus assumenda obcaecati repellat!...
                            </p>
                            <p class="fs-6">Date: 12th March 2022</p>
                        </div>
                    </div>
                </a>
                <div class="col-md-4 mb-2">
                    <div class="row">
                        <a href="#" class="col-12 mb-2">
                            <div class="post-wrap">
                                <img src="assets/img/posts/news-2.jpg" alt="" class="img-fluid side-post">
                                 <div class="overlay"></div>
                                 <div class="caption">
                                    <p class="fs-4 fw-bold title">This is the Latest News</p>
                                    <p class="fs-6">Date: 12th March 2022</p>
                                 </div>   
                            </div>
                        </a>
                        <a href="#" class="col-12 mb-2 post-wrap">
                            <div class="post-wrap">
                                <img src="assets/img/posts/news-2.jpg" alt="" class="img-fluid side-post">
                                 <div class="overlay"></div>
                                 <div class="caption">
                                    <p class="fs-4 fw-bold title">This is the Latest News</p>
                                    <p class="fs-6">Date: 12th March 2022</p>
                                 </div>   
                            </div>  
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Recent Posts -->

    <section id="recent">
        <div class="container">
            <p class="fs-3 fw-bold">Recent Posts</p>

            <div class="owl-carousel">
                <!-- Start -->
                <div class="item">
                    <div class="post-wrap">
                        <img src="assets/img/posts/news-1.jpg" alt="" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="caption">
                            <p class="fs-4 fw-bold">This is 1</p>
                            <p class="fs-6">
                                Date: 22nd March 2022
                            </p>
                        </div>
                    </div>
                </div>
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
            items:2,
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
    </script>
</body>
</html>