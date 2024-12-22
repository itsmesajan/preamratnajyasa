<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>

    <?php
    include('includes/style-links.php');
    ?>
</head>

<body>
    <div class="container-fluid decor_bg home_black_version" id="content">
        <?php include 'includes/header.php'; ?>
        <div class="row">
            <div class="container">
                <div class="col-lg-3 col-md-6 mx-auto my-5">
                    <h2 class="mb-4">SIGN UP</h2>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group mb-3">
                            <input class="form-control" placeholder="Name" autofocus="on" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder=" Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="e-mail" required="true"><?php if (isset($_GET['m1'])) echo $_GET['m1']; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" name="password" required="true">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Contact (ex. 8444844863)" maxlength="10" size="10" name="contact" required="true"><?php if (isset($_GET['m2'])) echo $_GET['m2']; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="City" name="city" required="true">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Address" name="address" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn w-100 custom-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </div>

    <?php
    include('includes/script-links.php');
    ?>
</body>

</html>