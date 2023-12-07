<?php
include 'includes/dbconnect.php';
include 'includes/header.php';
$status = 0;
if(isset($_GET['brand']))
{
$brand_id = base64_decode($_GET['brand']);	
$stmt = $conn->prepare("SELECT * FROM tblvehicle WHERE brandid=?");
$stmt->execute([$brand_id]); 


}
if(isset($_POST['searchbtn']))
{
 $brand_id = "%".$_POST['searchinput']."%";	

$stmt = $conn->prepare("select * from tblvehicle where vehiclename like ?");
$stmt->execute([$brand_id]); 
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
<main>
<?php include 'includes/navbar.php'; ?>
 
<section class="section bglite">
<div class="center mb-40"><h2>Available For Rent</h2></div>
<div class="grid-container  center">
<?php
 
while($cars = $stmt->fetch())
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
  