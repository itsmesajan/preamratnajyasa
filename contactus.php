<?php
include('includes/common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="logo/logo.jpg" type="image/x-icon">
  <title>Contact Us</title>

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
          <h2 class="mb-4" style="color: white;">Contact Us</h2>
          <p>If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.</p>
          <form action=" contactus.php" method="post">
            <div class="form-group mb-3">
              <label>Name</label>
              <input class="form-control" type="text" name="name" required="" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Email</label>
              <input class="form-control" type="text" name="email" class="form-control" required="">

            </div>
            <div class="form-group mb-3">
              <label>Subject</label>
              <input class="form-control" type="text" name="submit" class="form-control" required="">
            </div>
            <div class="form-group mb-3">
              <label>Massage</label>
              <textarea class="form-control" name="massage"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn w-100 custom-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- footer section starts  -->
    <?php
    include("includes/footer.php");
    ?>
    <!-- footer section   -->

</body>

</html>

<?php
if (isset($_POST['submit'])) {
  $senderName = $_POST['name'];
  $senderEmail = $_POST['email'];
  $senderSubject = $_POST['subject'];

  $receiverEmail = "PremRatnaJyasa@gmail.com";
  mail($receiverEmail, $senderName, $senderSubject, $senderMassage, $senderEmail);
  //customer mail
  $email = $_POST['email'];
  $subject = "Welcome to our website";
  $msg = "I shall get you soon , thanks for sending email";
  $from = "PremRatnaJyasa@gmail.com";
  mail($email, $subject, $msg, $from);
  echo "<h2 align='center'>Your mail sent</h2>";
}
?>