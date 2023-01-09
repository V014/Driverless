<?php
session_start();
$id = $_SESSION['id'];
include ('assets/php/faq.php');

if(isset($_POST['ask'])) {
    $_SESSION['message'] = $_POST['message'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FAQ - driverless</title>
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
                    <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="assets/php/logout.php">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="promotion.php">Promotion</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="newsletter.php">Newsletter</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="contact-us.php">Contact Us</a></li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page faq-page">
    <!--- FAQ -->
        <section class="clean-block clean-faq dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">FAQ</h2>
                    <p>If the answers below dont satify you, proceed or cancel</p>
                    <div class="btn-group" role="group">
                        <a href="assets/php/feedback.php" class="btn btn-outline-primary">Proceed</a>
                        <a href="contact-us.php" class="btn btn-outline-danger">Cancel</a>
                    </div>
                </div>
                <div class="block-content">
                    <?php while ($row = $result -> fetch_assoc()) {
                        $question = $row['question'];
                        $answer = $row['answer'];
                    ?>
                    <div class="faq-item">
                        <h4 class="question"><?php echo $question; ?></h4>
                        <div class="answer">
                            <p><?php echo $answer; ?></p>
                        </div>
                    <?php } ?>
                </div>
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