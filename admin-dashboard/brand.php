<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
if(isset($_GET['bid']))
{
	$bid = $_GET['bid'];
	$conn->prepare("DELETE FROM tblbrands WHERE brandid=?")->execute([$bid]);
	echo "<script>alert('Brand Deleted');window.location='brand.php';</script>";
}
 

?>

<style>
.table>tbody>tr>td,.table>tbody>tr>th 
{
	padding:0px;
}
.btn1 
{
	padding:0px 10px 0px 10px;
}
.custom_input tr td input
{
	width:100%;
}
</style>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Brand Details  <span class="pull-right"><a class="btn btn-success" href="add-brand.php"><i class="fa fa-plus"></i> Add New Brand</a> <a href="javascript:void();" class="btn btn-warning" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a></span>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
                                     
                                    
			 <table class='table table-responsive table-striped table-bordered display' id="ordersTable">
			
                                            <thead>
                                            <tr>
                                                <!--<th>Select</th>-->
                                                <th>Brand ID</th>
                                                <th>Brand Name</th>
                                                <th>Vehicle Manufacturer</th>
												<th>Main Featurer</th>
                                                 
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                        <?php
                                         $stmt = $conn->query("SELECT * FROM tblbrands");
											while ($veh = $stmt->fetch()) 
											{
 
                                            ?>


                                                <tr>
                                                     
                                                    <td><?php echo $veh['brandid']; ?></td>
                                                    <td><?php echo $veh['name']; ?></td>
                                                    <td><?php echo $veh['vehicle_manufacturer']; ?></td>
													<td><?php echo $veh['main_featurer']; ?></td>
                                                     
                                                    <td>
													<a href="edit-brand.php?bid=<?php echo  $veh['brandid']; ?>" class="btn btn-primary">Edit</a>
													
													<a href="brand.php?bid=<?php echo  $veh['brandid']; ?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                             
                                            ?>


                                            </tbody>
                                        </table>
                                       
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

  <!-- container section end -->
   <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->

	
       
 <script>
            $(document).ready(function () {
			
                $('#ordersTable').DataTable({
                   
                    "pagingType": "full_numbers",
                    "iDisplayLength": 10
                   
                });



            });</script> 

<!--custome script for all page-->
    <script src="js/scripts.js"></script>    
  </body>
</html>
