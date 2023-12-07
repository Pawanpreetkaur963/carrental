<?php
include 'includes/dbconnect.php';
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>
<main>
<?php include 'includes/navbar.php'; ?>
 
<section class=" ">
  <div class="about-container">
   
    <div class="about-image">
      <img src="assets/images/ford.jpg" alt="About Us Image">
    </div>
	
	 <div class="about-content">
      <h2>About Us </h2>
	  <br>
      <p>Welcome to Winnipeg Car Rentals, your premier destination for hassle-free and reliable car rental services in the heart of Manitoba. At Winnipeg Car Rentals, we take pride in providing an unparalleled experience to our customers, ensuring they explore the vibrant city of Winnipeg and beyond with comfort and convenience.</p>
    </div>
  </div>
</section>

<section class=" ">
  <div class="about-container">
    <div class="about-content">
      <h2>Our Mission</h2>
	  <br>
      <p>Our mission is to redefine the car rental experience by offering a diverse fleet of well-maintained vehicles, coupled with exceptional customer service. We understand that every journey is unique, and so are our customers' needs. Whether you're here for business, leisure, or just exploring the beautiful landscapes of Manitoba, we have the perfect vehicle for you.</p><br>
	  <p>At Winnipeg Car Rentals, we are conscious of our environmental impact. That's why we are actively working towards creating a more sustainable future. Our fleet includes fuel-efficient and eco-friendly vehicles, contributing to the reduction of our carbon footprint.</p>
    </div>
    <div class="about-image">
      <img src="assets/images/hyundai.jpg" alt="About Us Image">
    </div>
  </div>
</section>

<section class="section bglite">
<div class="center mb-40"><h2>Available For Rent</h2></div>
<div class="grid-container  center">
	<a href="">
    <div class="grid-item">
	<img src="assets/images/ford.jpg" class="w100">
	Ford
	</div>
	</a>
	<a href="">
    <div class="grid-item">
	<img src="assets/images/chevrolet.jpg" class="w100">
	Chevrolet
	</div>
	</a>
	<a href="">
    <div class="grid-item">
	<img src="assets/images/Toyota.jpg" class="w100">
	Toyota
	</div>
	</a>
	<a href="">
    <div class="grid-item">
	<img src="assets/images/Hyundai.jpg" class="w100">
	Hyundai
	</div>
	</a>
	<a href="">
    <div class="grid-item">
	<img src="assets/images/Mercedes-Benz.jpg" class="w100">
	Mercedes Benz
	</div>
	</a>
	<a href="">
    <div class="grid-item">
	<img src="assets/images/audi.jpg" class="w100">
	Audi
	</div>
	</a>
	
  </div>
</section>
<?php include 'includes/footer.php'; ?>
</main>
</body>
</html>
  