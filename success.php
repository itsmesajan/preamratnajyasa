<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
  header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_item SET status=2 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status= 1 ";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success | Life Style Store</title>
  <link rel="shortcut icon" href="logo/logo.jpg" type="image/x-icon">
  <!-- CSS only -->
  <?php
  include('includes/style-links.php');
  ?>
</head>

<body>
  <div class="home_black_version">
    <?php
    include('includes/header.php');
    include 'includes/check-if-added.php';
    ?>
    <section class="banner_fullwidth black_fullwidth">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="banner_text">
              <h2 align="center">YAY!! Your order is confirmed. <br>Thank you for shopping with us.</h2>
              <span>Best Design makes you more special.</span>
              <a href="product.php">Shop More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include("includes/footer.php");
    ?>
  </div>
  <?php
  include('includes/script-links.php');
  ?>
</body>

</html>