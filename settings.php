<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings | Life Style Store</title>

    <?php include('includes/style-links.php') ?>
</head>

<body>
    <div class="container-fluid home_black_version" id="content">
        <?php include 'includes/header.php'; ?>
        <div class="row">
            <div class="container">
                <div class="col-lg-3 col-md-6 mx-auto my-5">
                    <h2 class="mb-4">change Password</h2>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password" placeholder="Old Password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1" placeholder="Re-type New Password" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn w-100 custom-btn">Change</button>
                        <?php if (isset($_GET['error'])) echo $_GET['error']; ?>
                    </form>
                </div>
            </div>
            <?php include("includes/footer.php"); ?>
        </div>
        <?php include('includes/script-links.php') ?>

</body>

</html>