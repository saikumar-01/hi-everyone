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
    <title>Organica store</title>
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
                                        <div class="drop-title">ABOUT US</div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-list">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="assets/img/logo/<?php echo $row['itemname']?>.jpg" width="60">
                                                <div class="media-body">
                                                    <h5><a href="javascript:void(0)"><?php echo $row['itemname']?></a></h5>
                                                    <p class="price">
                                                        <span class="discount text-muted">₹ <?php echo $row['itemname']?></span>
                                                       
                                                    </p>
                                                    <p class="text-muted">Qty: 1</p>
                                                </div>
                                            
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drop-title d-flex justify-content-between">
                                            <span>Total:</span>
                                            <span class="text-primary"><strong>₹ 800.0</strong></span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between pl-3 pr-3 pt-3">
                                        <a href="cart.php" class="btn btn-default">View Cart</a>
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
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        ABOUT US
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>
        <section class="bg-leaf">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center mb-3">
                        <h1 class="title text-uppercase mb-2">Organica Heaven</h1>
                        <h5>
                            Groceries Organic Store
                        </h5>
                    </div>
                    <div class="col-md-10">
                        <p class="text-justify">
                        Organica Heaven is about helping you make the right food choices. We even have an array of ready-to-eat snacks that work for you and your body at all times, even on-the-go. As Indian consumers we are becoming more and more conscious about our health. Organic ingredients and hand-made food, serve as a promising alternative for machine made and processed food, made from high amounts of chemical infusions.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-4">
                        <img src="assets/img/fruits.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h5>
                            Straight from the Farm
                        </h5>
                        <p>
                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                        </p>
                        <p>
                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                        </p>
                        <p>
                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center text-right mt-3">
                    <div class="col-md-6">
                        <h5>
                            Know Your Farmers
                        </h5>
                        <p>
                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                        </p>
                        <p>
                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                        </p>
                        <p>
                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/vegetables.jpg" class="img-fluid">
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-4">
                        <img src="assets/img/fish.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h5>
                            Improving Farmers’ Livelihood
                        </h5>
                        <p>
                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                        </p>
                        <p>
                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                        </p>
                        <p>
                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                        </p>
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
                                 <img src="assets/img/mockup.jpg">
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