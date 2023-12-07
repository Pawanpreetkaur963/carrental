<?php
include 'includes/dbconnect.php';
include 'includes/header.php';
$msg = '';
 
if(isset($_POST['submit']))
{
$user_mail = $_POST['usermail'];
$pwd = md5($_POST['pwd']);
$role = $_POST['role'];
$query = "select * from tbluser where user_mail=? and password=? and user_type=?";
$stmt= $conn->prepare($query);
$stmt->execute([$user_mail,$pwd,$role]); 
$count = $stmt->rowCount();  

if($count>0)
{
	$rec = $stmt->fetch();
	
	$_SESSION['uid'] = $rec['user_id'];
	 $_SESSION['uname'] = $rec['fullname'];

	 
	if(strtoupper($rec['user_type']) == "ADMIN")
	{
	
		header('location: admin-dashboard/');
	}
	else
	{
	header('location: index.php');
	}
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
    <h2>Login</h2>
<?php echo $msg; ?>
    <form class="login-form" action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="email" id="useremail" name="usermail" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="pwd" name="pwd" required>
      </div>
	  <div class="form-group">
        <label for="password">Login Type</label>
        <select class="" name="role" required>
		<option selected value='' disabled>Choose Login Type</option>
		<option value='user'>User</option>
		<option value='admin'>Admin</option>
		</select>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Login</button>
      </div>
    </form>
  </div>
</section>
<!-- end login section -->
 
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>
