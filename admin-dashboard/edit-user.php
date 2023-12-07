<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
$today=date('Y-m-d');
if(isset($_GET['uid']))
{
	$uid = $_GET['uid'];
	$stmt = $conn->prepare("SELECT * FROM tbluser WHERE user_id=?");
	$stmt->execute([$uid]); 
	$user = $stmt->fetch();
}
?>
<script src="js/mobilevalidation.js"></script>
<?php
$msg = '';
if(isset($_POST['submit']))
{
$name = $_POST['name'];	
$email = $_POST['email'];	
	
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$country = $_POST['country'];

$date = date('Y-m-d');

$sql = "UPDATE tbluser SET fullname=?, contactno=?, user_mail=?,dob=?,country=? WHERE user_id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$name, $phone, $email, $dob, $country, $uid]);
echo "<script>alert('Updated!');window.location='user.php';</script>";
}

?>


      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit User <a href="add-user.php" class="btn btn-warning pull-right" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a>
                          </header>
                          <div class="panel-body">
                              <div class="form">
							  <?php echo $msg; ?>
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data"  onsubmit="return pass_func()">
										
										<div class="form-group ">
                                          <label for="cname" class="control-label col-md-2">Name </label>
                                          <div class="col-md-10">
										 <input class="form-control" type="text" id="username" name="name" value="<?php echo $user['fullname']; ?>" required>
                                               
                                          </div>
										  </div>
										  
										  
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Email</label>
                                          <div class="col-md-3">
                                              <input class="form-control" type="email" id="email" name="email" value="<?php echo $user['user_mail']; ?>"  required>
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">Phone</label>
                                          <div class="col-md-3">
                                              <input class="form-control" type="number" id="phone" name="phone" value="<?php echo $user['contactno']; ?>"  required>
                                          </div>
										   
										  </div>
										  
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Dob</label>
                                          <div class="col-md-3">
                                             <input class="form-control" type="date" id="dob" name="dob"  value="<?php echo $user['dob']; ?>" required>
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">Country</label>
                                          <div class="col-md-3">
                                              <input class="form-control" type="text" id="country" name="country" value="<?php echo $user['country']; ?>"  required>
                                          </div>
										   
										  </div>
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Password</label>
                                          <div class="col-md-3">
                                             <input class="form-control" type="text" id="pass" name="pass" value="<?php echo $user['password']; ?>"  required readonly>
                                          </div>
										  
										  
										  </div>
										   <div class="form-group">
										   </hr>
										   </div>
										  
										   
                                      <div class="form-group">
									  <br/>
                                          <div class="col-md-offset-2 col-md-10">
                                            
											  <button class="btn btn-success" type="submit" name="submit"><i class="fa fa-plus"></i> Update User</button>
                                     
											  
											  
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
<script>
function pass_func() {
    var pass = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass2").value;

    if (pass !== pass2) {
        alert("Password mismatch! Please retype your password.");
        return false;  
    }

    return true;  
}
</script>