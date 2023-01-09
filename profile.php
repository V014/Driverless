<?php
session_start();
include ('assets/php/connection.php');
include ('assets/php/utils.php');
include ('assets/php/credentials.php');

if(isset($_SESSION['reply'])){
    if($_SESSION['reply'] === "used"){
        $reply = "username already in use!";
    }

    if($_SESSION['reply'] === "error"){
        $reply = "Failed to update profile!";
    }

    if($_SESSION['reply'] === "updated"){
        $reply = "Profile updated!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - driverless</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="profile.php">Profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="promotion.php">Promotion</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="newsletter.php">Newsletter</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark" style="background-image: url(&quot;assets/img/tech/tech_bg.png&quot;);background-size: cover;background-attachment: fixed;">
            <div class="container">
                <div class="block-heading">
                    <?php if (isset($_SESSION['reply'])){ ?>
                        <h2 class="text-info"><?= $reply; ?></h2>
                    <?php unset($_SESSION['reply']); } else { ?>
                        <h2 class="text-info">Profile</h2>
                    <?php } ?>
                </div>
                <form method="post" action="assets/php/profile.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control item" type="text" required="" name="fullname" value="<?php echo $fullname; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control item" type="email" required="" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Date of birth</label>
                        <input class="form-control" required="" name="dob" type="date" value="<?php echo $dob; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Username</label>
                        <input class="form-control" type="text" required="" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control item" type="password" required="" name="password" value="<?php echo $password; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Postal address</label>
                        <textarea class="form-control" required="" name="address"><?php echo $address; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="password">Postcode</label>
                        <input class="form-control" type="text" required="" name="postcode" value="<?php echo $postcode ?>">
                    </div>
                        <input type="submit" class="btn btn-primary btn-block" name="update" value="Update">
                </form>
            </div>
        </section>
    </main>
    <?php include ('footer.php'); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>