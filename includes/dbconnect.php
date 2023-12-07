<?php
session_start();
$host = 'localhost';
$db = 'carrental';
$username = 'root';
$password = '';

try {
    $conn_db = "mysql:host=$host;dbname=$db";
    $conn = new PDO($conn_db, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


if(isset($_SESSION['username']))
{
$_SESSION['loginstatus'] = 'Y';
$customerid = $_SESSION['id'];
}
else
{
$_SESSION['loginstatus'] = 'N';	
$customerid = '';
}
?>
