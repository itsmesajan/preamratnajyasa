<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo/logo.jpg" type="image/x-icon">
    <title>Login</title>

    <?php
    include('includes/style-links.php');
    ?>
</head>

<body>
    <div id="content" class="home_black_version">
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row my-5">
                <div class="col-lg-3 col-md-3 mx-auto">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="mb-4">LOGIN</h2>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i>Login to make a purchase</i>
                            <p>
                            <form action="login_submit.php" method="POST">
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" autofocus="on" name="e-mail" required="true">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                </div>

                                <button type="submit" name="submit" class="btn w-100 custom-btn">Login</button><br><br>
                                <?php if (isset($_GET['error'])) echo $_GET['error']; ?>
                            </form><br />
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'includes/footer.php'; ?>
    </div>



    <?php include 'includes/script-links.php'; ?>
</body>

</html>