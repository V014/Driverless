<?php
session_start();
if(isset($_SESSION['reply'])){
    if($_SESSION['reply'] === "subscribed"){
        $reply = "Newsletter subscribed!";
    }

    if($_SESSION['reply'] === "unsubscribed"){
        $reply = "Newsletter unsubscribed!";
    }

    if($_SESSION['reply'] === "error"){
        $reply = "Something went wrong, try again later!";
    }

    if($_SESSION['reply'] === "listed"){
        $reply = "You're already subscibed!";
    }

    if($_SESSION['reply'] === "not listed"){
        $reply = "You haven't subscibed yet!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Newsletter - driverless</title>
    <meta name="description" content="Driverless is an informative website that updates its customers on new developments of autonomous vehicles and the Artificial intelligence technology used to run them.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">driverless</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="promotion.php">Promotion</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="newsletter.php">Newsletter</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page pricing-table-page">
        <!--- newsletter -->
        <section class="clean-block clean-info dark" style="background-image: url(&quot;assets/img/tech/tech_bg.png&quot;);background-size: cover;background-attachment: fixed;">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Newsletters</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/newsletter/newsletter.jpg"></div>
                    <div class="col-md-6">
                        <?php if (isset($_SESSION['reply'])){ ?>
                            <h3><?= $reply; ?></h3>
                        <?php unset($_SESSION['reply']); } else { ?>
                            <h3>Signup for our newsletter</h3>
                        <?php } ?>
                        <div class="getting-started-info">
                            <p>Get updates on the latest news about autonomous vehicles straight to your inbox, we do not spam, just inform.</p>
                        </div>
                        <form method="post" action="assets/php/newsletter.php">
                            <input type="submit" name="signup" class="btn btn-primary btn-lg" value="Signup">
                            <input type="submit" name="cancel" class="btn btn-danger btn-lg" value="Cancel">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include ('footer.php'); ?>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>