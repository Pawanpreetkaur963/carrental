<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
if(isset($_GET['bid']))
{
	$bookid = $_GET['bid'];
	$conn->prepare("DELETE FROM tblbooking WHERE booking_num=?")->execute([$bookid]);
	echo "<script>alert('Booking Deleted');window.location='booking.php';</script>";
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
                             Booking Details  <span class="pull-right"><a class="btn btn-success" href="add-booking.php"><i class="fa fa-plus"></i> Add New Booking</a> <a href="javascript:void();" class="btn btn-warning" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a></span>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
                                     
                                    
			 <table class='table table-responsive table-striped table-bordered display' id="ordersTable">
			
                                            <thead>
                                            <tr>
                                                <!--<th>Select</th>-->
                                                <th>Booking ID</th>
                                                <th>Customer Name</th>
                                                <th>Vehicle</th>
												<th>From date</th>
                                                
                                                <th>To Date</th>
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                        <?php
                                         $stmt = $conn->query("SELECT tblbooking.*, tbluser.fullname, tblvehicle.* FROM tblbooking JOIN tbluser ON tblbooking.userid = tbluser.user_id JOIN tblvehicle ON tblbooking.vehicle_id = tblvehicle.vehicleid");
											while ($rec = $stmt->fetch()) 
											{
 
                                            ?>


                                                <tr>
                                                     
                                                    <td><?php echo $rec['booking_num']; ?></td>
                                                    <td><?php echo $rec['fullname']; ?></td>
                                                    <td><?php echo $rec['vehiclename']; ?></td>
													<td><?php echo $rec['fromdate']; ?></td>
                                                     
                                                    <td><?php echo $rec['todate']; ?></td>
                                                   
													
                                                    <td>
													<a href="edit-booking.php?bid=<?php echo  $rec['booking_num']; ?>" class="btn btn-primary">Edit</a>
													
													<a href="booking.php?bid=<?php echo  $rec['booking_num']; ?>" class="btn btn-danger">Delete</a>
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
