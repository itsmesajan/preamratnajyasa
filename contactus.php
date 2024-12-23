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
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <div class="col-lg-6 col-md-6 mx-auto my-5">
            <h2 class="mb-4" style="color: white;">Contact Us</h2>
            <p>If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.</p>
            <form action=" contactus.php" method="post">
              <div class="form-group mb-3">
                <input placeholder="Name" class="form-control" type="text" name="name" required="" class="form-control">
              </div>
              <div class="form-group mb-3">
                <input placeholder="Email" class="form-control" type="text" name="email" class="form-control" required="">

              </div>
              <div class="form-group mb-3">
                <input placeholder="Subject" class="form-control" type="text" name="submit" class="form-control" required="">
              </div>
              <div class="form-group mb-3">
                <textarea placeholder="Message" class="form-control" name="massage"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="submit" class="btn w-100 custom-btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 my-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.3295804909826!2d85.32067781809866!3d27.670124658305042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19d01fc6dff3%3A0xe786e373b3e4243a!2sTabahal%20Rd%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1734937767271!5m2!1sen!2snp" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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