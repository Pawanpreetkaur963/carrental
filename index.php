<?php
include 'includes/dbconnect.php';
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>
<main>
<?php include 'includes/navbar.php'; ?>
 
<section class="banner">
<div class="carousel">
    <div class="carousel-inner">
        <div class="carousel-item"><img src="assets/images/slide-1.jpg" alt="Image 1"></div>
        <div class="carousel-item"><img src="assets/images/slide-2.jpg" alt="Image 2"></div>
        <div class="carousel-item"><img src="assets/images/slide-3.jpg" alt="Image 3"></div>
        <!-- Add more carousel items as needed -->
    </div>
    <a class="prev" onclick="prevSlide()">&#10094;</a>
    <a class="next" onclick="nextSlide()">&#10095;</a>
</div>
</section>

<section class="section">
<div class="center mb-40"><h2>Car By Brands</h2></div>
<div class="grid-container center">
<?php
$stmt = $conn->query("SELECT * FROM tblbrands");
while ($row = $stmt->fetch()) {
  
?>
    <a href="view-list.php?brand=<?php echo base64_encode($row['brandid']); ?>"><div class="grid-item"><?php echo $row['name']; ?></div></a>
	<?php
}
?> 
  </div>
</section>

<section class="section bglite">
<div class="center mb-40"><h2>Available For Rent</h2></div>
<div class="grid-container  center">
<?php
$car_stmt = $conn->query("SELECT * FROM tblvehicle LIMIT 4");
while($cars = $car_stmt->fetch())
{
?>
	<a href="view.php?vid=<?php echo base64_encode($cars['vehicleid']); ?>">
    <div class="grid-item">
	<img src="assets/images/<?php echo $cars['vehicleid'].".jpg"; ?>" class="w100">
	<?php echo $cars['vehiclename']; ?>
	</div>
	</a>
	<?php
	}
	?>
	 
  </div>
</section>
<?php include 'includes/footer.php'; ?>
</main>
</body>
</html>
 <script>
let currentIndex = 0;

    function showSlide(index) {
        const carouselInner = document.querySelector('.carousel-inner');
        const totalSlides = document.querySelectorAll('.carousel-item').length;

        if (index >= totalSlides) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 1;
        } else {
            currentIndex = index;
        }

        const translateValue = -100 * currentIndex + '%';
        carouselInner.style.transform = 'translateX(' + translateValue + ')';
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }
  </script>