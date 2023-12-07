<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
$today=date('Y-m-d');
if(isset($_GET['bid']))
{
	$bid = $_GET['bid'];
	$stmt = $conn->prepare("SELECT * FROM tblbrands WHERE brandid=?");
	$stmt->execute([$bid]); 
	$rec = $stmt->fetch();
	 
}
?>
<script src="js/mobilevalidation.js"></script>
<?php
 
if(isset($_POST['addnew']))
{

	$brand=$_POST['brand'];
	$vehicle_manufacturer=$_POST['vehicle_manufacturer'];
	$main_featurer=$_POST['main_featurer'];
	 
	 
	$id =$bid;
	
	$sql = "UPDATE tblbrands SET name=?, vehicle_manufacturer=?, main_featurer=? WHERE brandid=?";
	$conn->prepare($sql)->execute([$brand, $vehicle_manufacturer, $main_featurer, $id]);
			echo "<script> alert('Brand Updated !!!');window.location='brand.php'; </script>";

		
}

 
?>


      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Brand <a href="add-brand.php" class="btn btn-warning pull-right" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
										  
										  <div class="form-group">
										   
										  <label   class="control-label col-md-2">Brand Name</label>
                                          <div class="col-md-3">
                                              <input type="text" class="form-control"  id="brand" name="brand" value="<?php echo $rec['name']; ?>" required>
											  
                                          </div>
										  
										  <label   class="control-label col-md-2">Vehicle Manufacturer</label>
                                          <div class="col-md-5">
                                              <input type="text" class="form-control"  id="vehicle_manufacturer" name="vehicle_manufacturer" value="<?php echo $rec['vehicle_manufacturer']; ?>"  required>
											  
                                          </div>
										  
										  </div>
										   <div class="form-group">
										   </hr>
										   </div>
										   
										   <div class="form-group">
										   
										  <label   class="control-label col-md-2">Main Featurer</label>
                                          <div class="col-md-10">
                                              <input type="text" class="form-control"  id="main_featurer" name="main_featurer" value="<?php echo $rec['main_featurer']; ?>"   required>
											  
                                          </div>
										   
										  </div>
										  
										   
                                      <div class="form-group">
									  <br/>
                                          <div class="col-md-offset-2 col-md-10">
                                            
											  <button class="btn btn-success" type="submit" name="addnew"><i class="fa fa-plus"></i> Update Brand</button>
                                     
											  
											  
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
