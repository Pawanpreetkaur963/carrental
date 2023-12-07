<?php 
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";
$today=date('Y-m-d');
?>
<script src="js/mobilevalidation.js"></script>
<?php
$msg = '';
if(isset($_POST['submit']))
{
$name = $_POST['name'];	
$email = $_POST['email'];	
$pwd = $_POST['pass'];	
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$country = $_POST['country'];
$pass = md5($_POST['pass']);
$date = date('Y-m-d');
$stmt = $conn->prepare("SELECT * FROM tbluser WHERE user_mail=?");
$stmt->execute([$email]); 
$count = $stmt->rowCount();
if($count>0)
{
$msg = '<div class="alert alert-danger text-center">Email Already Exist</div>';	
}
 	
else
{
$sql = "INSERT INTO tbluser (fullname,password,contactno,user_mail,user_type,dob,country,register_date) VALUES (?,?,?,?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$name,$pass,$phone,$email,'user',$dob,$country,$date]);
echo "<script>alert('Registered!');window.location='user.php';</script>";
}
}
?>


      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                           
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add User <a href="add-user.php" class="btn btn-warning pull-right" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Back</a>
                          </header>
                          <div class="panel-body">
                              <div class="form">
							  <?php echo $msg; ?>
                                  <form class="form-validate form-horizontal" method="post" action="" enctype="multipart/form-data"  onsubmit="return pass_func()">
										
										<div class="form-group ">
                                          <label for="cname" class="control-label col-md-2">Name </label>
                                          <div class="col-md-10">
										 <input class="form-control" type="text" id="username" name="name" required>
                                               
                                          </div>
										  </div>
										  
										  
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Email</label>
                                          <div class="col-md-3">
                                              <input class="form-control" type="email" id="email" name="email" required>
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">Phone</label>
                                          <div class="col-md-3">
                                              <input class="form-control" type="number" id="phone" name="phone" required>
                                          </div>
										   
										  </div>
										  
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Dob</label>
                                          <div class="col-md-3">
                                             <input class="form-control" type="date" id="dob" name="dob" required>
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">Country</label>
                                          <div class="col-md-3">
                                              <input class="form-control" type="text" id="country" name="country" required>
                                          </div>
										   
										  </div>
										  
										  <div class="form-group">
										  <label   class="control-label col-md-2">Password</label>
                                          <div class="col-md-3">
                                             <input class="form-control" type="text" id="pass" name="pass" required>
                                          </div>
										  
										  
										  <label   class="control-label col-md-2">Retype</label>
                                          <div class="col-md-3">
                                             <input class="form-control" type="text" id="pass2" name="pass2" required>
                                          </div>
										   
										  </div>
										   <div class="form-group">
										   </hr>
										   </div>
										  
										   
                                      <div class="form-group">
									  <br/>
                                          <div class="col-md-offset-2 col-md-10">
                                            
											  <button class="btn btn-success" type="submit" name="submit"><i class="fa fa-plus"></i> Add User</button>
                                     
											  
											  
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