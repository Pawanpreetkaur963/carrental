<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
$today=date('Y-m-d');
?>
<script src="js/mobilevalidation.js"></script>
<?php
 
if(isset($_POST['addnew']))
{

	$vehname=$_POST['vehname'];
	$model=$_POST['model'];
	$fueltype=$_POST['fueltype'];
	$seat=$_POST['seat'];
	$brand=$_POST['brand'];	
	$stmt = $conn->query("SELECT ifnull(max(vehicleid),0)+1 FROM tblvehicle");
	$vehid = $stmt->fetch();
	$id =$vehid[0];
	$sel_file = basename($_FILES["image1"]["name"]);
	if(!empty($sel_file))
	{
		$target_dir = "../assets/images/";
		$target_file = $target_dir.$id.".jpg";
		move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file);
	}
	$sql = "INSERT INTO tblvehicle (vehicleid, vehiclename, model, fuel_type, seatingcapacity, brandid) VALUES (?,?,?,?,?,?)";
	$conn->prepare($sql)->execute([$id, $vehname, $model, $fueltype, $seat, $brand]);
	 
	 
			echo "<script> alert('New vehicle Added !!!');window.location='vehicle.php'; </script>";

		
}

 
?>


      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Vehicle <a href="add-vehicle.php" class="btn btn-warning pull-right" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
										
										<div class="form-group ">
                                          <label for="cname" class="control-label col-md-2">Vehicle Name </label>
                                          <div class="col-md-8">
                                              <input class="form-control"  name="vehname"  type="text" />
                                          </div>
										  </div>
										  
										  
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Model</label>
                                          <div class="col-md-3">
                                              <select class="form-control"  id="model" name="model" required>
											 
											  <option>2003</option>
											 
											  <option>2004</option>
											   <option>2007</option>
											 
											</select> 
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">Fuel Type</label>
                                          <div class="col-md-3">
                                              <select class="form-control"  id="fueltype" name="fueltype" required>
											 
											  <option>Petrol</option>
											 
											  <option>Diesel</option>
											   
											</select> 
                                          </div>
										   
										  </div>
										   <div class="form-group">
										   </hr>
										   </div>
										  <div class="form-group">
										   <label for="cname" class="control-label col-md-2">Seating Capacity </label>
                                          <div class="col-md-3">
                                              <input class="form-control"  name="seat"  type="text" />
                                          </div>
										  
										  <label for="cname" class="control-label col-md-2">Brand</label>
                                          <div class="col-md-3">
                                              <select class="form-control"  id="brand" name="brand" required>
											 <?php
											 $bstmt = $conn->query("SELECT * FROM tblbrands");
											while ($row = $bstmt->fetch()) {
												 
											?>
											  <option value="<?php echo $row['brandid']; ?>"><?php echo $row['name']; ?></option>
											 <?php
											}
											?>
											    
											</select> 
                                          </div>
										  
										  </div>
										  
										     <div class="form-group">
											  <div class="col-md-offset-2 col-md-10">
											 <label>Image</label>
											 <input type="file" name="image1">
											 </div>
											 </div>
                                      <div class="form-group">
									  <br/>
                                          <div class="col-md-offset-2 col-md-10">
                                            
											  <button class="btn btn-success" type="submit" name="addnew"><i class="fa fa-plus"></i> Add New Vehicle</button>
                                     
											  
											  
                                          </div>
                                      </div>
                                          </div>
										</div>  
											
                                      
									 
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              
                             
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
