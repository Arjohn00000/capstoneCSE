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
    <link rel="icon" type="image/x-icon" href="../../images/CSE.png">
    
    <title>Recipes | Page</title>
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
            <section class="products pb-5 mt-5" id="products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center pb-5">
                                <h1 class="fw-bold mt-5">Recipes Guide</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-4 mb-2">
                            <div class="card text-center pb-2">
                                <div class="card-body">
                                    <h3 class="card-title">Danggit</h3>
                                    <div class="img-area mb-4 text-center"><img class="fish" alt=""
                                            src="../../images/Danggit.jpg"></div>
                                    <div>
                                        <button data-bs-toggle="modal" data-bs-target="#recipes"
                                            class="btn btn-info btn-sm mt-3 mx-2">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mb-2">
                            <div class="card text-center pb-2">
                                <div class="card-body">
                                    <h3 class="card-title">Bangus</h3>
                                    <div class="img-area mb-4 text-center"><img class="fish" alt=""
                                            src="../../images/bangus.jpg"></div>
                                    <div>
                                        <button data-bs-toggle="modal" data-bs-target="#recipes"
                                            class="btn btn-info btn-sm mt-3 mx-2">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mb-2">
                            <div class="card text-center pb-2">
                                <div class="card-body">
                                    <h3 class="card-title">Tulingan</h3>
                                    <div class="img-area mb-4 text-center"><img class="fish" alt=""
                                            src="../../images/tulingan.jpg"></div>
                                    <div>
                                        <button data-bs-toggle="modal" data-bs-target="#recipes"
                                            class="btn btn-info btn-sm mt-3 mx-2">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mb-2">
                            <div class="card text-center pb-2">
                                <div class="card-body">
                                    <h3 class="card-title">Lapu-Lapu</h3>
                                    <div class="img-area mb-4 text-center"><img class="fish" alt=""
                                            src="../../images/lapu.jpg"></div>
                                    <div>
                                        <button data-bs-toggle="modal" data-bs-target="#recipes"
                                            class="btn btn-info btn-sm mt-3 mx-2">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mb-2">
                            <div class="card text-center pb-2">
                                <div class="card-body">
                                    <h3 class="card-title">Tamarong</h3>
                                    <div class="img-area mb-4 text-center"><img class="fish" alt=""
                                            src="../../images/tamarong.jpg"></div>
                                  <div>
                                        <button data-bs-toggle="modal" data-bs-target="#recipes"
                                            class="btn btn-info btn-sm mt-3 mx-2">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mb-2">
                            <div class="card text-center pb-2">
                                <div class="card-body">
                                    <h3 class="card-title">Tamban</h3>
                                    <div class="img-area mb-4 text-center"><img class="fish" alt=""
                                            src="../../images/tamban.jpg"></div>
                                    <div>
                                        <button data-bs-toggle="modal" data-bs-target="#recipes"
                                            class="btn btn-info btn-sm mt-3 mx-2">View</button>
                                    </div>
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
                    <div class="modal mt-4" id="recipes">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content mt-4">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="form-area bg-white rounded-4">
                                        <h1 class="text-center text-info">Viewing...</h1>
                                        <form>
                                            <div class="mb-2 mt-4">
                                                <input type="text" class="form-control" placeholder="Danggit" readonly>
                                            </div>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Tinola" readonly>
                                            </div>
                                            <div class="fw-bold">
                                                <p>Recipes List</p>
                                            </div>
                                            <ul>
                                                <li class="text-start" >Ahos</li>
                                                <li class="text-start">Sibuyas</li>
                                                <li class="text-start">Asin</li>
                                                <li class="text-start">Tubig</li>
                                                <li class="text-start">Hilo</li>
                                            </ul>
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
</body>

</html>