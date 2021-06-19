<?php include('server1.php') ?>
<?php
$amount = 1000;
require_once('config_2.php');
?>
<?php
ini_set('display_errors', false);
session_start();
$total = 0;
$sql = "SELECT * FROM addcart";
$result = $db->query($sql);
if ($_SESSION['username'] != NULL && $_SESSION['success']) {
    $uname = $_SESSION['username'];

    $item = $_POST['item'];
    $sql1 = "DELETE from addcart where username='$uname' AND itemname='$item'";
    $result1 = $db->query($sql1);

    $itemdec = $_POST['quantdec'];
    $sql6 = "SELECT * from addcart where username='$uname' AND itemname ='$itemdec'";
    $result6 = $db->query($sql6);
    $rows6 = $result6->fetch_assoc();
    $dec = $rows6['quantity'] - 1;
    if ($dec > 0) {
        $sql7 = "UPDATE addcart SET quantity = '$dec' where username='$uname' AND itemname='$itemdec'";
        $result7 = $db->query($sql7);
    } else {
        $sql10 = "DELETE from addcart where username='$uname' AND itemname='$itemdec'";
        $result10 = $db->query($sql10);
    }

    $iteminc = $_POST['quantinc'];
    $sql8 = "SELECT * from addcart where username='$uname' AND itemname ='$iteminc'";
    $result8 = $db->query($sql8);
    $rows8 = $result8->fetch_assoc();
    $inc = $rows8['quantity'] + 1;
    $sql9 = "UPDATE addcart SET quantity = '$inc' where username='$uname' AND itemname='$iteminc'";
    $result9 = $db->query($sql9);
?>


    <!DOCTYPE php>
    <php>

        <head>
            <title>ORGANICA HEAVEN</title>
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
            <style>
      .razorpay-payment-button {
        height:3.5rem;
  width: 25rem;
  background: green;
  text-align: center;
  color:blue;
  font-size: 1.5rem;
  cursor: pointer;
  margin:1rem 0;
  box-shadow: 0 .3rem .5rem #2196F3;
  opacity: .9;
  color: #f8f8f8;
  border-radius: 19px;
      }
    </style>
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
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary">5</span>
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
                                                                <span class="discount text-muted">₹ 200.0</span>
                                                                <span>₹ 150.0</span>
                                                            </p>
                                                            <p class="text-muted">Qty: 1</p>
                                                        </div>
                                                        <div class="media">
                                                            <img class="d-flex mr-3" src="assets/img/logo/fish.jpg" width="60">
                                                            <div class="media-body">
                                                                <h5><a href="javascript:void(0)">Fish</a></h5>
                                                                <p class="price">
                                                                    <span class="discount text-muted">₹ 600.0</span>
                                                                    <span>₹ 550.0</span>
                                                                </p>
                                                                <p class="text-muted">Qty: 1</p>
                                                            </div>
                                                        </div>
                                                        <div class="media">
                                                            <img class="d-flex mr-3" src="assets/img/logo/avatar.jpg" width="60">
                                                            <div class="media-body">
                                                                <h5><a href="javascript:void(0)">Dragon Fruit</a></h5>
                                                                <p class="price">
                                                                    <span class="discount text-muted">₹ 150.0</span>
                                                                    <span>₹ 100.0</span>
                                                                </p>
                                                                <p class="text-muted">Qty: 1</p>
                                                            </div>
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
                                Checkout
                            </h1>
                            <p class="lead">
                                Save time and leave the groceries to us.
                            </p>
                        </div>
                    </div>
                </div>

                <section id="checkout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <div style="text-align:center;">
                                    <h5 class="mb-3">BILLING DETAILS</h5>
                                    <!-- Bill Detail of the Page -->

                                    <form action="#" class="bill-detail" action="checkout.php">
                                        <?php include('errors.php'); ?>

                                        <fieldset>
                                            <div style="text-align:center;">
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <input class="form-control" name="uname" placeholder="Name" type="text">
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" name="lastname" placeholder="Last Name" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="uaddress" placeholder="Address"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" name="city" placeholder="Town / City" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" name="pincode" placeholder="Postcode / Zip" type="text">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <input class="form-control" name="email" placeholder="Email Address" type="email">
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" name="phone" placeholder="Phone Number" type="tel">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="notes" placeholder="Order Notes"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" name="reg" class="btn btn-primary btn-block text-uppercase">save</button>
                                                </div>
                                                <h5 class="mb-3">PAYMENT METHODS</h5>
                                                <div style="float:left" class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                        Default address
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                        Add new Address
                                                    </label>
                                                </div>
                                                <p class="text-right mt-3">
                                                    <input style="float:left" checked="" type="checkbox"><a style="float:left"> I’ve read and accepted the terms and conditions</a>
                                                </p>
                                           </form>
                                                <form action="index1.php" method="POST">

                                                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $razor_api_key; ?>" data-amount="<?php echo $_SESSION['price'] * 100 ?>" data-buttontext="Pay" data-name="PHPExpertise.com" data-description="Test Txn with RazorPay" data-image="https://your-awesome-site.com/your_logo.jpg" data-prefill.name="card holder name" data-prefill.email="abc@gmail.com" data-theme.color="#F37254"></script>
                                                    <input type="hidden" value="Hidden Element" name="hidden">
                                                </form>





                                        </fieldset>
                                    
                                    <!-- Bill Detail of the Page end class="razorpay-embed-btn"   data-text="Pay Now" data-color="#528FF0" data-size="medium"-->
                                </div>


                                <div class="clearfix">
                                </div>
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
            <script>
                function dec(val) {
                    $.ajax({
                        url: "cart.php",
                        method: "POST",
                        data: {
                            quantdec: val,
                        },
                        async: false,
                        success: function(result) {
                            location.reload();
                        }
                    });
                }


                function inc(val) {
                    $.ajax({
                        url: "cart.php",
                        method: "POST",
                        data: {
                            quantinc: val,
                        },
                        async: false,
                        success: function(result) {
                            location.reload();
                        }
                    });
                }


                function remove(val) {
                    $.ajax({
                        url: "cart.php",
                        method: "POST",
                        data: {
                            item: val,
                        },
                        async: false,
                        success: function(result) {
                            location.reload();
                        }
                    });
                }
            </script>
        </body>
    </php>

<?php } else {
    echo "<script>location.href='register1.php'</script>";
}
?>