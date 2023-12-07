<?php
//connecting to database
$conn=mysqli_connect("localhost","motowebc_kraving","&xx#kZ!9eW}%","motowebc_kravings");
$compresult=mysqli_query($conn,"select * from company_info");
$compinfo=mysqli_fetch_array($compresult);
?>
