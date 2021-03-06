<?php include('server.php')?>

<?php
ini_set('display_errors', false);
session_start();
if($_SESSION['username']!=NULL && $_SESSION['success'])
{
?>



<!DOCTYPE html>
<html>
<head>
    <title>organica heaven</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="assets/fonts/sb-bistro/sb-bistro.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/o2system-ui/o2system-ui.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/owl-carousel/owl-carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/cloudzoom/cloudzoom.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/thumbelina/thumbelina.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/packages/bootstrap-touchspin/bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/theme.css">

</head>
<body>
    <div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index1.php" class="navbar-brand">
                    <img src="assets/img/logo/logo.jpg" alt="">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="shop.php" class="nav-link">Shop</a>
                        </li>
                      
                        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src="assets/img/logo/logo.jpg"></div> <?php echo $_SESSION['username'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.php">Transactions History</a>
                                <a class="dropdown-item" href="setting.php">Settings</a>
                                <a class="dropdown-item" href="logout.php">Sign Out</a>
                            </div>
                          </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary"></span>
                            </a>
                            <div class="dropdown-menu shopping-cart">
                                <ul>
                                    <li>
                                        <div class="drop-title">Your Cart</div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-list">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/chicken.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">Chicken</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">??? 200.0</span>
                                                        <span>??? 100.0</span>
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/fish.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">Fish</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">??? 200.0</span>
                                                        <span>??? 100.0</span>
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/avatar.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)">Dragon Fruit</a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">??? 150.0</span>
                                                        <span>??? 100.0</span>
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drop-title d-flex justify-content-between">
                                            <span>Total:</span>
                                            <span class="text-primary"><strong>??? 800.0</strong></span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between pl-3 pr-3 pt-3">
                                        <a href="cart.php" class="btn btn-secondary">View Cart</a>
                                        <a href="checkout.php" class="btn btn-primary">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
    <div id="page-content" class="page-content"><!-- video-->
        <div class="banner">
            <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
                <video width="100%" preload="auto" loop autoplay muted>
                    <source src='assets/media/trail1.mp4' type='video/mp4' />
                    
                </video>
                <div class="container">
                    <h1 class="pt-5">
                        Eat Best<br>
                        Forget The Rest.
                    </h1>
                    <p class="lead">
                        Organica Heaven.
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-shopping-basket"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        HEAVEN
                                    </h4>
                                    <p class="card-text">
                                        Simply Click The Buy Button And The Rest You Eat is Heaven.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        FARMING
                                    </h4>
                                    <p class="card-text">
                                        Our team ensures the produce quality is up to our standard and delivers to your door within 24 hours of harvest day.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        RIGHT TO YOUR DOOR STEP
                                    </h4>
                                    <p class="card-text">
                                        Farmers receive your orders two days in advance so they can prepare for harvest exactly as your orders ??? no wasted produce.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="why">
            <h2 class="title">Why SHOULD YOU CHOOSE Organica Heaven</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Straight from the Farm
                                </h4>
                                <p class="card-text">
                                    I feel an important part of beauty is not only what you do on the outside but also what you put into the inside,we help your beauty by giving fresh farm foods
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fa fa-question"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Know Your Farmers
                                </h4>
                                <p class="card-text">
                                    The farmer is the only man in our economy who buys everything at retail, sells everything at wholesale, and pays the freight both ways.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-smile"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Improving agriculture
                                </h4>
                                <p class="card-text">
                                    Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve .
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5 text-center">
                        <a href="shop." class="btn btn-primary btn-lg">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="categories" class="pb-0 gray-bg">
            <h2 class="title">Categories</h2>
            <div class="landing-categories owl-carousel">
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/vegetables.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Vegetables</h4> -->
                            <a href="shop.php" class="btn btn-primary btn-lg">Vegetables</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/fruits.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Fruits</h4> -->
                            <a href="shop.php" class="btn btn-primary btn-lg">Fruits</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/meats.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Meats</h4> -->
                            <a href="shop.php" class="btn btn-primary btn-lg">Meats</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/fish.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Fishes</h4> -->
                            <a href="shop.php" class="btn btn-primary btn-lg">Sea Food</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/dryfruits.jpg">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Package</h4> -->
                            <a href="shop.php" class="btn btn-primary btn-lg">Dry Fruits</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About</h5>
                    <p>Organica Heaven is about helping you make the right food choices. We even have an array of ready-to-eat snacks that work for you and your body at all times, even on-the-go. As Indian consumers we are becoming more and more conscious about our health. Organic ingredients and hand-made food, serve as a promising alternative for machine made and processed food, made from high amounts of chemical infusions.</p>
                </div>
                <div class="col-md-3">
                    <h5>Links</h5>
                    <ul>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="privacy.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                     <h5>Contact</h5>
                     <ul>
                         <li>
                            <a href="tel:+620892738334"><i class="fa fa-phone"></i> 8919456552</a>
                        </li>
                        <li>
                            <a href="mailto:team15@gmail.com"><i class="fa fa-envelope"></i>team15@gmail.com</a>
                         </li>
                     </ul>

                     <h5>Follow Us</h5>
                     <ul class="social">
                         <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-facebook-f"></i></a>
                         </li>
                         <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a>
                         </li>
                         <li>
                            <a href="javascript:void(0)" target="_blank"><i class="fab fa-youtube"></i></a>
                         </li>
                     </ul>
                </div>
                <div class="col-md-3">
                     <h5>Get Our App</h5>
                     <ul class="mb-0">
                         <li class="download-app">
                             <a href="#"><img src="assets/img/playstore.png"></a>
                         </li>
                         <li style="height: 200px">
                             <div class="mockup">
                                 <img src="assets/img/logo/logo.jpg>
                             </div>
                         </li>
                     </ul>
                </div>
            </div>
        </div>
        <p class="copyright">&copy;2021 ORGANICA HEAVEN. All rights reserved.</p>
    </footer>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate.js"></script>
    <script type="text/javascript" src="assets/packages/bootstrap/libraries/popper.js"></script>
    <script type="text/javascript" src="assets/packages/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="assets/packages/o2system-ui/o2system-ui.js"></script>
    <script type="text/javascript" src="assets/packages/owl-carousel/owl-carousel.js"></script>
    <script type="text/javascript" src="assets/packages/cloudzoom/cloudzoom.js"></script>
    <script type="text/javascript" src="assets/packages/thumbelina/thumbelina.js"></script>
    <script type="text/javascript" src="assets/packages/bootstrap-touchspin/bootstrap-touchspin.js"></script>
    <script type="text/javascript" src="assets/js/theme.js"></script>
</body>
</html>


<?php } 
else{
  echo "<script>location.href='register1.php'</script>";
}
?>