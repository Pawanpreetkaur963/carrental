<?php include_once "../includes/dbconnect.php";;?>

<?php
date_default_timezone_set('Asia/Kolkata');
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location='../index.php'</script>";
        return;
}
 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Panel</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/font.css" rel="stylesheet" type="text/css">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="plugins/chosenselect/bootstrap-chosen.css" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo"><span class="lite" style="
    position: relative;
    left: -17px;top: -6px;">&nbsp;Winnipeg Wheels Car Rental</span><span style="display: block;
    font-size: 0.33em;
    color: #fff;
    font-weight: 600;
    position: relative;
    left: -3px;
    top: -4px;"></span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input type="hidden" class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">      
                 
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                       
                                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img width='30px' alt="" src="images/avatar1.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['uname'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i><?php echo $_SESSION['uname'];?></a>
                            </li>
                            
                            <li>
                                <a href="logout.php" onclick><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
