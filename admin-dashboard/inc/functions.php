<?php
	session_start();
    //For angular inputs
    $data = json_decode(file_get_contents("php://input"));
    
    include_once '../connecttodb.php';
	
    
    if(isset($_POST['myVar'])){
         $result['response'] = "fail";
         $_SESSION['customer'] = $_POST['customer'];
         if($_SESSION['customer']==$_POST['customer']){
            $result['response'] = "success";
         }
        echo json_encode($result);
    }
    
    //Set Session
    if(isset($_POST['setInvoiceNo'])){
         $result['response'] = "fail";
         $_SESSION['invoice_no'] = $_POST['invoice_no'];
         if($_SESSION['invoice_no']==$_POST['invoice_no']){
            $result['response'] = "success";
         }
        echo json_encode($result);
    }
?>