<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
$today=date('Y-m-d');
if(isset($_GET['bid']))
{
	$id = $_GET['bid'];
	
	$stmt = $conn->prepare("SELECT tblbooking.*, tbluser.fullname, tblbooking.vehicle_id, tblvehicle.vehiclename as vehicle_name FROM tblbooking JOIN tbluser ON tblbooking.userid = tbluser.user_id JOIN tblvehicle ON tblbooking.vehicle_id = tblvehicle.vehicleid where tblbooking.booking_num=?");
	$stmt->execute([$id]); 
	$rec = $stmt->fetch();
}
?>
<script src="js/mobilevalidation.js"></script>
<?php
 
if(isset($_POST['addnew']))
{

	echo $cname=$_POST['cname'];
	$vehicle=$_POST['vehicle'];
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
	 
	$sql = "UPDATE tblbooking SET userid=?, vehicle_id=?, fromdate=?, todate=? WHERE booking_num=?";
	$stmt= $conn->prepare($sql);
	$stmt->execute([$cname, $vehicle, $fromdate, $todate, $id]);
			echo "<script> alert('Booking Updated !!!');window.location='booking.php'; </script>";

		
}

 
?>


      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Booking <a href="add-booking.php" class="btn btn-warning pull-right" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
										
										<div class="form-group ">
                                          <label for="cname" class="control-label col-md-2">Customer Name </label>
                                          <div class="col-md-10">
										  <select class="form-control"  id="cname" name="cname" required>
											 
											  <option value='<?php echo $rec['userid']; ?>'><?php echo $rec['fullname']; ?></option>
											  <?php
											  
											 $users = $conn->query("SELECT * FROM tbluser");
												while ($user = $users->fetch()) {
											   ?>
												 
											  <option value="<?php echo $user['user_id']; ?>"><?php echo $user['fullname']; ?></option>
											  <?php
												}
												?>
											    
											</select> 
                                               
                                          </div>
										  </div>
										  
										  
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Vehicle</label>
                                          <div class="col-md-2">
                                              <select class="form-control"  id="vehicle" name="vehicle" required>
											  <option value='<?php echo $rec['vehicle_id']; ?>'><?php echo $rec['vehicle_name']; ?></option>
											  <?php
											  
											 $vehicles= $conn->query("SELECT * FROM tblvehicle");
												while ($veh = $vehicles->fetch()) {
											   ?>
												 
											  <option value="<?php echo $veh['vehicleid']; ?>"><?php echo $veh['vehiclename']; ?></option>
											  <?php
												}
												?>
											</select> 
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">From Date</label>
                                          <div class="col-md-2">
                                              <input type="date" class="form-control"  id="fromdate" name="fromdate" value="<?php echo $rec['fromdate']; ?>" required>
											  
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">To Date</label>
                                          <div class="col-md-2">
                                              <input type="date" class="form-control"  id="todate" name="todate" value="<?php echo $rec['todate']; ?>"  required>
											  
                                          </div>
										   
										   
										  </div>
										   <div class="form-group">
										   </hr>
										   </div>
										  
										   
                                      <div class="form-group">
									  <br/>
                                          <div class="col-md-offset-2 col-md-10">
                                            
											  <button class="btn btn-success" type="submit" name="addnew"><i class="fa fa-plus"></i> Update Booking</button>
                                     
											  
											  
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
