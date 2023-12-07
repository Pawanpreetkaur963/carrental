<?php
include 'includes/dbconnect.php';
include 'includes/header.php';
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
echo "<script>alert('Registered!');window.location='login.php';</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
<main>
<?php include 'includes/navbar.php'; ?>
 
<!--login section -->
<section class=" ">
<div class="login-container">
    <h2>Registration</h2>

    <form class="login-form" action="" method="post" onsubmit="return pass_func()">
      <div class="form-group">
        <label for="username">Name:</label>
        <input type="text" id="username" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
	   <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" required>
      </div>

	  <div class="form-group">
        <label for="dob">Dob:</label>
        <input type="date" id="dob" name="dob" required>
      </div>
	    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required>
      </div>
	  
	  <div class="form-group">
        <label for="pass">Password:</label>
        <input type="text" id="pass" name="pass" required>
      </div>
	  
	  <div class="form-group">
        <label for="pass2">Retype Password:</label>
        <input type="text" id="pass2" name="pass2" required>
      </div>
	   
      <div class="form-group">
        <button type="submit" name="submit">Register</button>
      </div>
    </form>
  </div>
</section>
<!-- end login section -->
 
</main>
<?php include 'includes/footer.php'; ?>
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