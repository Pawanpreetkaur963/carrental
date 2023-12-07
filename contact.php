<?php
include 'includes/dbconnect.php';
include 'includes/header.php';
$successMsg = '';
if(isset($_POST['submit']))
{
	$successMsg = "<div class=' alert-success  center'>Thanks for contact us</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
<main>
<?php include 'includes/navbar.php'; ?>
 
<section class=" ">
  <div class="contact-container">
    <div class="contact-form">
      <h2>Contact Us</h2>
	  <?php echo $successMsg; ?>
      <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" name="submit">Send Message</button>
      </form>
    </div>
    <div class="">
      <img src="assets/images/ford.jpg" class="w100"> </div>
  </div>
</section>
 
<?php include 'includes/footer.php'; ?>
</main>
</body>
</html>
  