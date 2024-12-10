<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
  header('locationS: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart | Life Style Store</title>

  <?php include 'includes/style-links.php' ?>
</head>

<body>
  <div class="container-fluid home_black_version" id="content">
    <?php include 'includes/header.php'; ?>
    <div class="row decor_bg">
      <div class="col-md-6 mx-auto">
        <table class="table table-striped">

          <!--show table only if there are items added in the cart-->
          <?php
          $sum = 0;
          $id = '';
          $user_id = !empty($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
          $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
          $result = mysqli_query($con, $query) or die($mysqli_error($con));
          if (mysqli_num_rows($result) >= 1) {
          ?>
            <thead>
              <tr class="text-white">
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = mysqli_fetch_array($result)) {
                $sum += $row["Price"];
                $id .= $row["id"] . ", ";
                echo "<tr class='text-white'><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
              }
              $id = rtrim($id, ", ");
              echo "<tr class='text-white' >
              <td></td>
              <td>Total</td>
              <td>Rs " . $sum . "</td>
              <td>
              <a href='success.php?itemsid=" . $id . "' class='cart_button checkout'>Confirm Order</a>
              </td>
              </tr>";
              ?>
            </tbody>
          <?php
          } else {

            echo "Heyy!! Your Cart is Empty. Please add items to the cart first!";
          }
          ?>

          <?php
          ?>
        </table>
      </div>
    </div>
    <?php include("includes/footer.php"); ?>
  </div>
  <?php include 'includes/style-links.php' ?>
</body>


</html>