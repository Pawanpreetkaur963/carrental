<?php
include 'includes/dbconnect.php';
include 'includes/header.php';
$status = 0;
if(isset($_GET['brand']))
{
$brand_id = base64_decode($_GET['brand']);	
$stmt = $conn->prepare("SELECT * FROM tblvehicle WHERE brandid=?");
$stmt->execute([$brand_id]); 
$cars = $stmt->fetch();
$status=1;
}

if(isset($_GET['vid']))
{
$id = base64_decode($_GET['vid']);	
$stmt = $conn->prepare("SELECT * FROM tblvehicle WHERE vehicleid=?");
$stmt->execute([$id]); 
$cars = $stmt->fetch();
$status=1;
}

if(isset($_POST['searchbtn']))
{
$s = $_POST['searchinput'];	
$sql = "select * from tblvehicle where vehiclename like ?";
$stmt = $conn->prepare($sql);	
$stmt->execute([$s]);
$cars = $stmt->fetch();
$status=1;
}
if($status==0)
{
	$sql = "select * from tblvehicle";
	$stmt = $conn->query($sql);
	$cars = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
<main>
<?php include 'includes/navbar.php'; ?>
 
<section class="">
 <div class="car-details-container">
    <div class="car-details-content">
      <h2><?php echo $cars['vehiclename']; ?></h2>
      
      <p>Key Features:</p>
      <ul>
        <li>Powerful Engine</li>
        <li>Luxurious Interior</li>
        <li>Advanced Safety Features</li>
        <li>Fuel Efficiency</li>
      </ul>
      <p>Fuel Type: <?php echo $cars['fuel_type']; ?></p>
      <p>Seating Capacity: <?php echo $cars['seatingcapacity']; ?></p>
      <button>Model: <?php echo $cars['model']; ?></button>
	  <?php
	  if(isset($_SESSION['uid']))
	  {
	  ?>
      <a href="admin-dashboard/book-now.php?cid=<?php echo $cars['vehicleid']; ?>">Book Now</a>
	  <?php
	  }
	  ?>
    </div>
    <div class="car-details-image">
      <img src="assets/images/<?php echo $cars['vehicleid'].".jpg"; ?>" alt="<?php echo $cars['vehicleid'].".jpg"; ?>">
    </div>
  </div>

   
</section>
<?php include 'includes/footer.php'; ?>
</main>
</body>
</html>
  