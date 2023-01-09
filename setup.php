<?php
session_start();
if(isset($_SESSION['reply'])){
    if($_SESSION['reply'] === "deployed"){
        $reply = "System successfully deployed!";
    }

    if($_SESSION['reply'] === "gotoindex"){
        $reply = "System ready, now register!";
    }

    if($_SESSION['reply'] === "error"){
        $reply = "Something went wrong on database creation!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - driverless</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="setup.php">setup</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--- landing -->
    <main class="page login-page">
        <section class="clean-block clean-form dark" style="background-image: url(&quot;assets/img/tech/tech_bg.png&quot;);background-size: cover;background-attachment: fixed;">
            <div class="container">
                <div class="block-heading">
                    <?php if (isset($_SESSION['reply'])){ ?>
                        <h2 class="text-info"><?= $reply; ?></h2>
                        <?php
                            $created = array("<u>Created tables</u>", "customer", "faq", "feedback", "newsletter", "reply");
                            $count = count($created);
                            for($i = 0; $i < $count; $i++){
                                echo $created[$i] . "<br>";
                            }
                        ?>
                    <?php } else { ?>
                        <h2 class="text-info">Setup here</h2>
                    <?php } unset($_SESSION['reply']); ?>
                </div>
                <form method="post" action="assets/php/setup.php"><button class="btn btn-primary btn-block" type="submit" name="setup">Setup</button></form>
            </div>
        </section>
    </main>
    <!--- footer -->
    <?php include ('footer.php'); ?>
    <!--- scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>