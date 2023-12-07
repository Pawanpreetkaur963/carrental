<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
if(isset($_GET['uid']))
{
	$uid = $_GET['uid'];
	$conn->prepare("DELETE FROM tbluser WHERE user_id=?")->execute([$uid]);
	echo "<script>alert('Vehicle Deleted');window.location='user.php';</script>";
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
                             User Details  <span class="pull-right"><a class="btn btn-success" href="add-user.php"><i class="fa fa-plus"></i> Add New User</a> <a href="javascript:void();" class="btn btn-warning" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a></span>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data">
                                     
                                    
			 <table class='table table-responsive table-striped table-bordered display' id="ordersTable">
			
                                            <thead>
                                            <tr>
                                                <!--<th>Select</th>-->
                                                <th>User ID</th>
                                                <th> Name</th>
                                                <th>Phone</th>
												<th>Email</th>
                                                
                                                <th>Country</th>
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                        <?php
                                         $stmt = $conn->query("SELECT * FROM tbluser");
											while ($veh = $stmt->fetch()) 
											{
 
                                            ?>


                                                <tr>
                                                     
                                                    <td><?php echo $veh['user_id']; ?></td>
                                                    <td><?php echo $veh['fullname']; ?></td>
                                                    <td><?php echo $veh['contactno']; ?></td>
													<td><?php echo $veh['user_mail']; ?></td>
                                                     
                                                    <td><?php echo $veh['country']; ?></td>
                                                   
													
                                                    <td>
													<a href="edit-user.php?uid=<?php echo  $veh['user_id']; ?>" class="btn btn-primary">Edit</a>
													
													<a href="user.php?uid=<?php echo  $veh['user_id']; ?>" class="btn btn-danger">Delete</a>
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
