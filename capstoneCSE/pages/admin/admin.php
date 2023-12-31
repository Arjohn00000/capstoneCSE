<?php 
    session_start();  
    if(!isset($_SESSION['user_id'])){
        header('location:../../');
    }
?>
<script src="./"></script>
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
    <title>Products | Page</title>
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
                            <a class="nav-link" href="d-owner.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="p-owner.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="o-owner.html">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="m-owner.html">Message</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="b-owner.html">Basket</a></li>
                                <li><a class="dropdown-item" href="r-owner.html">Recipes</a></li>
                                <li><a class="dropdown-item" href="g-owner.html">Gallery</a></li>
                                <li><a class="dropdown-item" href="adminProile.php">Profile</a></li>
                                <li><a class="dropdown-item" id="btn-logout">Logout</a></li>
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
                                    <a href="../../pages/customer/home.html" class="nav__link text-decoration-none">
                                        <i class="bi bi-house-door-fill nav__icon"></i>
                                        <span class="nav__name">Product</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/gallery.html" class="nav__link text-decoration-none">
                                        <i class="bi bi-images nav__icon"></i>
                                        <span class="nav__name">Order</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/about.html" class="nav__link text-decoration-none">
                                        <i class="bi bi-people-fill nav__icon"></i>
                                        <span class="nav__name">Basket</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/services.html" class="nav__link text-decoration-none">
                                        <i class="bi bi-gear-wide nav__icon"></i>
                                        <span class="nav__name">Message</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../pages/customer/profile.html" class="nav__link text-decoration-none">
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
            <section class="products" id="products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="section-header text-center pb-4">
                                <h1 class="fw-bold mt-5">Products List</h1>
                            </div>
                        </div>
                        <div class="search-container">
                            <input type="text" id="searchInput" placeholder="Search products..." onkeyup="searchProducts()">
                        </div>
                    </div>
                        <div id="div-container" class="row"></div>
                        <div class="col-12 col-md-12 col-lg-4 mb-2">
                            <div class="card text-center pb-2">
                                <div class="card-body">
                                    <div>
                                        <button class="btn btn-success btn-sm mt-3 mx-2" data-bs-target="#add"
                                            data-bs-toggle="modal" id="addP">Add Product</button>
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
                    <div class="modal fade" id="add" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                        tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="form-area bg-white rounded-4">
                                        <h1 class="text-center">Add New Product</h1>
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="mb-2 mt-4">
                                                <input type="file" name="image" id="image">
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" name="pname" id="pname"
                                                    placeholder="Product Name">
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" name="pprice" id="pprice"
                                                    placeholder="Product Price">
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" name="pkilo" id="pkilo"
                                                    placeholder="Product kilo">
                                            </div>
                                            <div class="mb-2">
                                                <input type="submit" value="upload" id="btn-rev">
                                            </div>
                                        </form>

                                    </div>
                                    <!-- <div class="modal-footer">
                                    <button class="btn btn-primary" id="btn-rev" data-bs-target="#exampleModalToggle2"
                                        data-bs-toggle="modal">Review</button>
                                </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="disp" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
                            tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="form-area bg-white rounded-4">
                                            <h1 class="text-center">Review Product</h1>
                                            <form>
                                                <!-- <div class="mb-2 mt-4">
                                                <input type="image" name="image">
                                            </div> -->
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" placeholder="Danggit"
                                                        readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" placeholder="300" readonly>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" placeholder="20kg" readonly>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer" id="review">
                                        <button class="btn btn-warning" data-bs-target="#exampleModalToggle"
                                            data-bs-toggle="modal">Edit</button>
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                            data-bs-toggle="modal">Add</button>
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

    <!--Start Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../plugins/privacy/jquery.js"></script>
    <script src="../../plugins/bundle/script.js"></script>
    <script src="../../plugins/bundle/collapse.js"></script>
    <script src="../../plugins/bundle/sweetalert.js"></script>
    <script src="../../plugins/privacy/forPagesAdmin.js"></script>
    <script src="../../plugins/privacy/logout.js"></script>
    <!-- <script>
        $("#order").click(function() {
            var InfoComplete = $("InfoComplete").val();
            
            if(InfoComplete == '') {
                swal({
                title: "Incomplete",
                text: "Please complete your Information",
                icon: "warning",
                button: "Okay",
                }); 
            }else {
                redirect('Order Modal')
            }
        });
    </script> -->
    <!-- End Bootstrap -->
</body>

</html>