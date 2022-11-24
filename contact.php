<?php 
    include "assets/includes/sessions.inc.php";
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
    <section >
       <div class="container">
            <?php echo successMsg(); echo errorMsg(); ?>
            <form class="card mx-auto bg-light  " action="assets/includes/mail.inc.php" method="POST">
                <div class="card-header">
                    <p class="fs-4 text-dark fw-bold">Contact Us</p>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" placeholder="Email" class="form-control bg-transparent ">
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="subject" name="sub" placeholder="Subject" autocomplete="off" class="form-control bg-transparent ">
                    </div>
                    <div class="col-12 my-3">
                        <textarea name="message" class="form-control" style="height: 300px;"></textarea>
                    </div>
                    <div class="col-12 py-3 d-md-flex justify-content-between">
                        <button type="submit" name="send_mail" class="btn btn-outline-dark">Send Message</button>
                       
                    </div>
                </div>
            </form>
       </div>
    </section>




    <!-- Footer -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>