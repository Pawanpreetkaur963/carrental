<?php 
session_start();
session_destroy();
unset($_SESSION['center_nm']);
echo "<script>window.location='../index.php'</script>";
?>
