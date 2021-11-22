<?php
session_start();
include ('assets/php/connection.php');
include ('assets/php/utils.php');
include ('assets/php/credentials.php');
if(isset($_SESSION['reply'])){
    if($_SESSION['reply'] === "logged"){
        $reply = "You're logged in!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - driverless</title>
    <meta name="description" content="Driverless is an informative website that updates its customers on new developments of autonomous vehicles and the Artificial intelligence technology used to run them.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <!--- navbar -->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">driverless</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="home.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="promotion.php">Promotion</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="newsletter.php">Newsletter</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--- landing -->
    <main class="page landing-page">
    <!--- Slider -->
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Welcome <?php echo $fullname; ?></h2>
                    <?php if (isset($_SESSION['reply'])){ ?>
                        <p style="color: blue;"><?= $reply; ?></p>
                    <?php unset($_SESSION['reply']); } ?>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/cars/tesla-roadster.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/cars/tesla-truck.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/cars/tesla-semi.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
    <!--- Products -->
        <section class="clean-block clean-pricing dark" id="products">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Product Table</h2>
                    <span>CyberTruck promotion ends in:</span> 
                    <p id="countdown" class="text-info"></p>
                </div>
                <div class="row justify-content-center">
                    <!-- product -->
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Tesla Roadster</h3>
                                <img src="assets/img/cars/tesla-roadster.jpg" class="img-fluid">
                            </div>
                            <div class="features">
                                <h4><span class="feature"><a href="https://www.tesla.com/autopilot">Auto pilot:&nbsp;</a></span><span>Yes</span></h4>
                                <h4><span class="feature">Range:&nbsp;</span><span>620 miles</span></h4>
                                <h4><span class="feature">Capacity:&nbsp;</span><span>2 seats</span></h4>
                            </div>
                            <div class="price">
                                <h4>$200,000</h4>
                            </div>
                            <a href="https://www.tesla.com/null_MW/roadster/reserve#payment" class="btn btn-outline-primary btn-block">RESERVE</a>
                        </div>
                    </div>
                    <!-- product -->
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="ribbon"><span>Best Value</span></div>
                            <div class="heading">
                                <h4>Tesla CyberTruck</h4>
                                <img src="assets/img/cars/tesla-truck.jpg" class="img-fluid">
                            </div>
                            <div class="features">
                                <h4><span class="feature"><a href="https://www.tesla.com/autopilot" style="color: green;">Auto pilot:&nbsp;</a></span><span>Yes</span></h4>
                                <h4><span class="feature">Range:&nbsp;</span><span>300 miles</span></h4>
                                <h4><span class="feature">Capacity:&nbsp;</span><span>5 seats</span></h4>
                            </div>
                            <div class="price">
                                <h4 style="color: green;">$39, 900</h4>
                            </div>
                            <a href="https://www.tesla.com/cybertruck" class="btn btn-outline-success btn-block">ORDER</a>
                        </div>
                    </div>
                    <!-- product -->
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Tesla Semi</h3>
                                <img src="assets/img/cars/tesla-semi.jpg" class="img-fluid">
                            </div>
                            <div class="features">
                                <h4><span class="feature"><a href="https://www.tesla.com/autopilot">Auto pilot:&nbsp;</a></span><span>Yes</span></h4>
                                <h4><span class="feature">Range:&nbsp;</span><span>400 miles</span></h4>
                                <h4><span class="feature">Capacity:&nbsp;</span><span>1 seat</span></h4>
                            </div>
                            <div class="price">
                                <h4>$150,000</h4>
                            </div>
                            <a href="https://www.tesla.com/teslasemi/reserve" class="btn btn-outline-primary btn-block">ORDER</a>
                        </div>
                    </div>
                    <!-- product -->
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h4>Mercedes F 015</h4>
                                <img src="assets/img/cars/mercedes-f015.jpg" class="img-fluid">
                            </div>
                            <div class="features">
                                <h4><span class="feature"><a href="https://www.mercedes-benz.com/en/innovation/autonomous/research-vehicle-f-015-luxury-in-motion/">Self-drive:&nbsp;</a></span><span>Yes</span></h4>
                                <h4><span class="feature">Range:&nbsp;</span><span>683 miles</span></h4>
                                <h4><span class="feature">Capacity:&nbsp;</span><span>4 seats</span></h4>
                            </div>
                            <div class="price">
                                <h4>$10Million</h4>
                            </div>
                            <a href="https://www.mbusa.com/en/future-vehicles/f-015" class="btn btn-outline-primary btn-block">RESERVE</a>
                        </div>
                    </div>
                    <!-- product -->
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Lucid air</h3>
                                <img src="assets/img/cars/lucid-air.jpg" class="img-fluid">
                            </div>
                            <div class="features">
                                <h4><span class="feature"><a href="https://www.carshowroom.com.au/news/lucid-air-to-be-self-driving-capable-thanks-to-mobileye/">Self-drive:&nbsp;</a></span><span>Yes</span></h4>
                                <h4><span class="feature">Range:&nbsp;</span><span>517 miles</span></h4>
                                <h4><span class="feature">Capacity:&nbsp;</span><span>5 seats</span></h4>
                            </div>
                            <div class="price">
                                <h4>$69, 900</h4>
                            </div>
                            <a href="https://www.lucidmotors.com/air/reserve/?trim=air&configurator=zl_2d&configuratorMode=web" class="btn btn-outline-primary btn-block">RESERVE</a>
                        </div>
                    </div>
                    <!-- product -->
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Nissan IMs</h3>
                                <img src="assets/img/cars/nissan-ims.jpg" class="img-fluid">
                            </div>
                            <div class="features">
                                <h4><span class="feature"><a href="https://www.nissanusa.com/vehicles/future-concept/ims-autonomous-car.html" style="color: red;">Self-drive:&nbsp;</a></span><span>Yes</span></h4>
                                <h4><span class="feature">Range:&nbsp;</span><span>380 miles</span></h4>
                                <h4><span class="feature">Capacity:&nbsp;</span><span>3 seats</span></h4>
                            </div>
                            <div class="price">
                                <h4 style="color: red;">PENDING</h4>
                            </div>
                            <a href="https://www.nissanusa.com/vehicles/future-concept/ims-autonomous-car.html" class="btn btn-outline-danger btn-block">RESERVE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--- footer -->
    <?php include ('footer.php'); ?>
    <!--- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jun 20 2021 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();
            
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Output the result in an element with id="demo"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
            
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</body>

</html>