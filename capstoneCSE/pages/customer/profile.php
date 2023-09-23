<?php 
    session_start();  
    if(isset($_SESSION['id']) ){
        header('location:../../');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style/global.css">
    <link rel="stylesheet" href="../../css/style/responsive.css">
    <link rel="stylesheet" href="../../css/style/customer/profile.css">
    <link rel="icon" type="image/x-icon" href="../../images/CSE.png">
    
    <title>Profile | Page</title>
</head>

<body>
    <!-- Start navbar -->
    <div class="main-container d-flex">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="../../images/CSE.png" class="logo" alt="Logo"></a>
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                    type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cart
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="purchase.php">Purchase</a></li>
                                <li><a class="dropdown-item" href="basket.php">My Basket</a></li>
                                <li><a class="dropdown-item" href="history.php">History</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="recipes.php">Recipes</a></li>
                                <li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
                                <li><a class="dropdown-item" href="services.php">Services</a></li>
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" id="btn-logout">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End-->

        <!-- Start Bottom Tab -->
        <div class="content">
            <div class="bottom-navigation">
                <nav>
                    <div class="nav container">
                        <div class="nav__menu" id="nav-menu">
                            <ul class="nav__list list-unstyled">

                                <li class="nav__item">
                                    <a href="../../pages/customer/home.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-house-door-fill nav__icon"></i>
                                        <span class="nav__name">Home</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/gallery.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-images nav__icon"></i>
                                        <span class="nav__name">Gallery</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/about.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-people-fill nav__icon"></i>
                                        <span class="nav__name">About</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/services.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-gear-wide nav__icon"></i>
                                        <span class="nav__name">Services</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/profile.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-person-circle nav__icon"></i>
                                        <span class="nav__name">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Bottom Tab -->

            <!-- Start Body -->
            <section class="Profile py-5">
                <div class="container mt-5">
                    <div class="bg-light d-block d-sm-flex rounded-4">
                        <div class="tab-content p-4 mb-5">
                            <div class="tab-pane fade show active" id="account">
                                <h1 class=" mb-5 text-center fw-bold">My Account</h1>
                                <div>
                                    <img src="../../images/carl.jpg" class="imgProfile mb-3" alt="">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 p-2">
                                        <div class="form-group mb-2">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['username'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <div class="form-group mb-2">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['email'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-danger">
                                        <small>Complete your information first.</small>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#update"
                                                    class="btn btn-sm btn-dark mx-1">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Body -->

            <!-- Modal Start -->
            <section>
                <div class="container">
                    <div class="modal mt-4" id="update">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content mt-4">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="form-area bg-white rounded-4">
                                        <h1 class="text-center text-warning">Complete your Information</h1>
                                        <form>
                                            <div class="mb-2 mt-4">
                                                <input type="text" class="form-control" placeholder="Enter First Name">
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Enter Last Name">
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Enter Number">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3"><a
                                                class="text-decoration-none text-dark"
                                                href="#">Update</a></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal End -->
        </div>
    </div>

    <script src="../../plugins/privacy/jquery.js"></script>
    <script src="../../plugins/privacy/logout.js"></script>

    <!--Start Bootstrap -->
    <script src="../../plugins/bundle/script.js"></script>
    <script src="../../plugins/bundle/collapse.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- End Bootstrap -->
    <script src="../../plugins/privacy/jquery.js"></script>
    <script src="../../plugins/privacy/forPagesCustomer.js"></script>
</body>

</html>