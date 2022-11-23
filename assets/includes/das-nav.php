<section>
        <nav class="navbar navbar-dark bg-light fixed-top align-items-center">
            <div class="container-fluid ">
                <button class="navbar-toggler order-1 order-md-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="fas fa-bars d-md-block d-none"></span>
                    <span class="fas fa-ellipsis-h d-md-none d-block"></span>
                </button>
                <!-- Desktop Search Start -->
                    <form class="d-md-flex d-none" role="search">
                        <input class="form-control bg-transparent text-white me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                <!-- Desktop  Search Ends -->

                <!-- Dropdown start-->
                <div class="dropdown me-5">
                    <a class="navbar-brand fs-6 order-0 order-md-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/avatars/<?php echo $_SESSION['img']; ?>" alt="avatar" width="40" height="40" class="rounded-circle">
                        <span><?php echo $_SESSION['name']; ?></span>
                      </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile"> 
                        <i class="fa fa-id-badge"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#">
                        <i class="fa fa-cog"></i> Settings</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../assets/includes/logout.inc.php"> 
                        <i class="fa fa-power-off"></i> Logout</a>
                    </li>
                    </ul>
                </div>
                <!-- Dropdown End-->

                <!-- Side bar Start -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" data-bs-backdrop="false" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="offcanvas-title" id="offcanvasNavbarLabel">
                            <img src="../assets/img/logo.png" height="50" alt="logo">  
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end lh-lg flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="dashboard">
                                     <span class="pe-4">Dashboard</span> 
                                     <i class="fa fa-book float-end"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile">
                                    <span class="pe-5">Profile</span> 
                                     <i class="fa fa-id-badge float-end"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="new-post">
                                    <span class="pe-4">New Post</span> 
                                     <i class="fa fa-scroll float-end"></i>
                                </a>
                            </li>
                        </ul>
                        
                         <!-- Search Start -->
                            <form class="d-md-none d-flex mt-5" role="search">
                                <input class="form-control bg-transparent text-light me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        <!-- Search Ends -->
                    </div>
                </div>
                <!-- Side bar End -->

            </div>
        </nav>
      
    </section>
