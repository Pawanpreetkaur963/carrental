<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
if(isset($_GET['cid']))
{
	$vid = $_GET['cid'];
}
$today=date('Y-m-d');
?>
<script src="js/mobilevalidation.js"></script>
<?php
 
if(isset($_POST['addnew']))
{

	$cname=$_POST['cname'];
	$vehicle=$_POST['vehicle'];
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
	 
	$stmt = $conn->query("SELECT ifnull(max(booking_num),0)+1 FROM tblbooking");
	$bookid = $stmt->fetch();
	$id =$bookid[0];
	
	$sql = "INSERT INTO tblbooking (booking_num, userid, vehicle_id, fromdate, todate) VALUES (?,?,?,?,?)";
	$conn->prepare($sql)->execute([$id, $cname, $vehicle, $fromdate, $todate]);
			echo "<script> alert('Thanks for booking !!!');window.location='../index.php'; </script>";

		
}

 
?>


      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Book Now
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
										
										<div class="form-group ">
                                          <label for="cname" class="control-label col-md-2">Customer Name </label>
                                          <div class="col-md-10">
										  <select class="form-control"  id="cname" name="cname" required>
											 
											  <option value='<?php echo $_SESSION['uid']; ?>'><?php echo $_SESSION['uname']; ?></option>
											   
											</select> 
                                               
                                          </div>
										  </div>
										  
										  
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Vehicle</label>
                                          <div class="col-md-3">
                                              <select class="form-control"  id="vehicle" name="vehicle" required>
											  
											  <?php
											  
											 $vehicles= $conn->query("SELECT * FROM tblvehicle where vehicleid = '$vid'");
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
                                              <input type="date" class="form-control"  id="fromdate" name="fromdate" required>
											  
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">To Date</label>
                                          <div class="col-md-2">
                                              <input type="date" class="form-control"  id="todate" name="todate" required>
											  
                                          </div>
										   
										   
										  </div>
										   <div class="form-group">
										   </hr>
										   </div>
										  
										   
                                      <div class="form-group">
									  <br/>
                                          <div class="col-md-offset-2 col-md-10">
                                            
											  <button class="btn btn-success" type="submit" name="addnew"><i class="fa fa-plus"></i> Add Booking</button>
                                     
											  
											  
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
