<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
$today=date('Y-m-d');
if(isset($_GET['vehid']))
{
	$id = $_GET['vehid'];
	$stmt = $conn->prepare("SELECT tblvehicle.*, tblbrands.name as brand_name FROM tblvehicle JOIN tblbrands ON tblvehicle.brandid = tblbrands.brandid WHERE tblvehicle.vehicleid = ?");
	$stmt->execute([$id]); 
	$rec = $stmt->fetch();
}


 
if(isset($_POST['addnew']))
{
 
	$vehname=$_POST['vehname']; 
	$model=$_POST['model'];
	$fueltype=$_POST['fueltype'];
	$seat=$_POST['seat'];
	$brand=$_POST['brand'];	
	if(!empty($sel_file))
	{
		$target_dir = "../assets/images/";
		$target_file = $target_dir.$id.".jpg";
		move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file);
	}
	if(isset($_POST['chk']))
	{
		$target_dir = "../assets/images/";
		$target_file = $target_dir.$id.".jpg";
		unlink($target_file);
	}
	$sql = "UPDATE tblvehicle SET vehiclename=?, model=?, fuel_type=?, seatingcapacity=?, brandid=? WHERE vehicleid=?";
	$stmt= $conn->prepare($sql);
	$stmt->execute([$vehname, $model, $fueltype, $seat, $brand, $id]);
	
			echo "<script> alert('Vehicle Updated !!!');window.location='vehicle.php'; </script>";

		
}

?>
 

      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Vehicle <a href="add-vehicle.php" class="btn btn-warning pull-right" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
										
										<div class="form-group ">
                                          <label for="cname" class="control-label col-md-2">Vehicle Name </label>
                                          <div class="col-md-8">
                                              <input class="form-control"  name="vehname"  type="text" value="<?php echo $rec['vehiclename']; ?>"/>
                                          </div>
										  </div>
										  
										   <div class="form-group">
										  <label   class="control-label col-md-2">Model</label>
                                          <div class="col-md-3">
                                              <select class="form-control"  id="model" name="model" required>
											 
											  <option><?php echo $rec['model']; ?></option>
											  <option>2003</option>
											 
											  <option>2004</option>
											   <option>2007</option>
											 
											</select> 
                                          </div>
										  
										   <label   class="control-label col-md-2">Fuel Type</label>
                                          <div class="col-md-3">
                                              <select class="form-control"  id="fueltype" name="fueltype" required>
											 
											  <option><?php echo $rec['fuel_type']; ?></option>
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
                                              <input class="form-control"  name="seat"  type="text" value="<?php echo $rec['seatingcapacity']; ?>" />
                                          </div>
										  
										  <label for="cname" class="control-label col-md-2">Brand</label>
                                          <div class="col-md-3">
                                              <select class="form-control"  id="brand" name="brand" required>
											 
											  <option value="<?php echo $rec['brandid']; ?>"><?php echo $rec['brand_name']; ?></option>
											  <?php
											  
											  $brand_res = $conn->query("SELECT * FROM tblbrands");
												while ($row = $brand_res->fetch()) {
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
											 <br>
											 <img src="../assets/images/<?php echo $id.".jpg"; ?>" width="100">
											 <label>Delete Image <input type="checkbox" name="chk"></label>
											 </div>
											 </div>
										   
                                      <div class="form-group">
									  <br/>
                                          <div class="col-md-offset-2 col-md-10">
                                            
											  <button class="btn btn-success" type="submit" name="addnew"><i class="fa fa-plus"></i> Update Vehicle</button>
                                     
											  
											  
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
