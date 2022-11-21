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
    <!-- <div id="loader">
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
    </div> -->
    <!-- Navbar -->
    <?php include_once "../assets/includes/das-nav.php" ?>
    <!-- Main Content -->
    <main class="main-content container">
        <?php 
            $user = new User;
            $row = $user->getUser($_SESSION['user']);
            // print_r($row);
            echo successMsg(); echo errorMsg();
        ?>
        <div class="card">
            <form action="../assets/includes/update.inc.php" method="post" enctype="multipart/form-data" class="card-body">
                <img src="../assets/img/logo.png" class="w-25 rounded">
                <input type="file" name="file" class="form-control my-2">
                <button name="updatePic" class="btn btn-primary">Submit</button>
            </form>

            <form action="../assets/includes/update.inc.php" onsubmit="return confirm('Are you sure?')" method="POST" class="card-body row">
                <div class="col-md-6 mb-3">
                    <label  class="form-lable mb-2">Full Name:</label>
                    <input type="text" value="<?php echo $row['fname']; ?>" name="fname" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label  class="form-lable mb-2">Email:</label>
                    <input type="email" value="<?php echo $row['email']; ?>" readonly class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label  class="form-lable mb-2">Phone:</label>
                    <input type="tel" name="phone" value="<?php echo $row['phone']; ?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label  class="form-lable mb-2">Dob:</label>
                    <input type="date" name="dob" value="<?php echo $row['dob']; ?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label  class="form-lable mb-2">Gender:</label>
                    <select name="gender" id="" class="form-select">
                        <option selected><?php echo $row['gender']; ?></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3 d-flex align-items-center gap-1">
                    <input type="checkbox" 
                        name="news"
                        class="form-check" 
                        value="subscribe"
                        <?php if($row['news'] == true){ ?>
                            checked
                        <?php } ?>
                    />
                    <label  class="form-lable mb-2">Subscribe to News Letter:</label>
                </div>

                <div class="col-12">
                    <button type="submit" name="update" class="btn btn-primary">Update </button>
                </div>
            </form>
        </div>
    </main>



    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>