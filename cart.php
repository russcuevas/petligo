<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pet Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">

</head>

<body>


    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>

    <header>

        <div class="container-fluid">
            <hr class="m-0">
        </div>

        <div class="container">
            <nav class="main-menu d-flex navbar navbar-expand-lg ">

                <div class="d-flex d-lg-none align-items-end mt-3">
                    <ul class="d-flex justify-content-end list-unstyled m-0">
                        <li class="dropdown mx-3">
                            <a href="#" class="dropdown-toggle" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                                <li><a class="dropdown-item" href="register.html">Register</a></li>
                            </ul>
                        </li>


                        <li class="" onclick="window.location.href='cart.html';">
                            <a href="cart.html" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                                aria-controls="offcanvasCart">
                                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                    03
                                </span>
                            </a>
                        </li>

                    </ul>

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                    <div class="offcanvas-header justify-content-center">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body justify-content-between">
                        <div class="col-sm-4 col-lg-3 text-center text-sm-start">
                            <div class="main-logo">
                                <a href="index.php">
                                    <img style="height: 50px; border-radius: 50px;" src="images/new-logo.jpg" alt="LOGO IMAGE"
                                        class="img-fluid"> &nbsp; PETLIGO
                                </a>
                            </div>
                        </div>

                        <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="shop.php" class="nav-link">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a href="appointment.php" class="nav-link">Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>


                        </ul>

                        <div class="d-none d-lg-flex align-items-end">
                            <ul class="d-flex justify-content-end list-unstyled m-0">
                                <li class="dropdown mx-3">
                                    <a href="#" class="dropdown-toggle" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                        <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                                        <li><a class="dropdown-item" href="register.php">Register</a></li>
                                    </ul>
                                </li>


                                <li class="" onclick="window.location.href='cart.php';">
                                    <a href="cart.php" class="mx-3">
                                        <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                                        <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                            03
                                        </span>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </nav>



        </div>
    </header>

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php" style="color: white;">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-primary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="images/item2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="number" style="color: black;" class="form-control form-control-sm text-left" value="1">
                                </div>
                            </td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i>Remove</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="images/item2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="number" style="color: black;" class="form-control form-control-sm text-left" value="1">
                                </div>
                            </td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i>Remove</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="images/item2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="number" style="color: black;" class="form-control form-control-sm text-left" value="1">
                                </div>
                            </td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i>Remove</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="images/item2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="number" style="color: black;" class="form-control form-control-sm text-left" value="1">
                                </div>
                            </td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i>Remove</button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="images/item2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt</td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="number" style="color: black;" class="form-control form-control-sm text-left" value="1">
                                </div>
                            </td>
                            <td class="align-middle">₱150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i>Remove</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card border-primary mb-5">
                    <div class="card-header bg-primary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">₱150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">₱10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">₱160</h5>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <footer id="footer" class="my-5">
        <div class="container py-5 my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-menu">
                        <img style="height: 100px; border-radius: 50px;" src="images/new-logo.jpg" alt="LOGO IMAGE">
                        <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletter to get updates about our grand
                            offers.</p>
                        <div class="social-links">
                            <ul class="d-flex list-unstyled gap-2">
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                                    </a>
                                </li>
                                <li class="social">
                                    <a href="#">
                                        <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <div id="footer-bottom">
        <div class="container">
            <hr class="m-0">
            <div class="row mt-3">
                <div class="col-md-6 copyright">
                    <p class="secondary-font">© 2025</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="secondary-font"><a href="https://templatesjungle.com/" target="_blank"
                            class="text-decoration-underline fw-bold text-black-50"></a> Made by <a
                            href="https://themewagon.com/" target="_blank"
                            class="text-decoration-underline fw-bold text-black-50">Dave Corpuz</a></p>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>