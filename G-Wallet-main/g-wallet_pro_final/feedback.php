

<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['email']) && isset($_POST['fb']) ) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $fb = $_POST['fb'];
 

  $sql2 = 'INSERT INTO feedback(name, email, fb) VALUES( :name, :email,  :fb)';
  $statement2 = $connection->prepare($sql2);
  if ($statement2->execute([':name' => $name, ':email' => $email, 'fb' => $fb ])) {
    $message = 'data inserted successfully';
    header("location:home.php");
  }



}
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <style type="text/css">
      .contact-form h2{
        color:#ffd700;
      }
      .contact-info {
        color:#ffd700;
      }
      
    </style>
  </head>
  <body>


    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>GEC, Hassan, India</div>
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-phone"></i>+91 987654321</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Feedback</h2>
        <form class="contact" action="feedback.php" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="fb" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

  </body>
</html>