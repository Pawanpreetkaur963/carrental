
<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Educan</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
    <!-- Google Font css -->
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet"> 

    <!-- mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- nivo slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- slick css -->
   <link rel="stylesheet" href="css/slick.css">
    <!-- price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <!-- fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">     
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- default css  -->
    <link rel="stylesheet" href="css/default.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper homepage">
        
        <!-- Header Area Start -->
        <header>
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->                        
                        <div class="col-lg-2 col-md-12 d-center d-none d-sm-block">
                            <div class="header-top-left">
                               <div class="logo">
                                <a href="index.php"><img src="img/logo/logo.png" alt="logo-image"></a>
                            </div>
                            </div>                        
                        </div>
                        <!-- Header Top left End -->
                        <!-- Search Box Start -->                                        
                        <div class="col-lg-7 col-md-6 ml-auto mr-auto">
                            <div class="search-box-view">
                                <form action="#">
                                    <input type="text" class="email" placeholder="Search Your Product" name="product">
                                    <button type="submit" class="submit"></button>
                                </form>
                            </div>                                           
                        </div>
                        <!-- Search Box End --> 
                        <!-- Header Top Right Start -->                                       
                        <div class="col-lg-3 col-md-12 d-none d-sm-block">
                            <div class="header-top-right">
                                <ul class="header-list-menu f-right">
                                    <!-- Login BTN-->
                                    <a class="button slider-btn" href="login.php">Login</a>  
								<!-- changed by anant 28 aug cart result div from ajax--->
									<div class="cart-box text-right" id="cart_result" style="display:inline-block;position:relative;top:-10px;">
									
									</div>
                                    <!-- Language End -->                                
                                    
                                    <!-- Currency End -->
                                </ul>
								
                                <!-- Header-list-menu End -->
                            </div>
                        </div>
                        <!-- Header Top Right End -->
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-sm-5 col-5 d-lg-none">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo/logocolor.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Primary Vertical-Menu End -->
						
                        <!-- Search Box Start -->
                        <div class="col-xl-12 text-center col-lg-7 d-none d-lg-block">
                            <div class="middle-menu ">
                                <nav>
                                    <ul class="middle-menu-list">
									<?php 
						$menuresult=mysqli_query($conn,"select * from nav_main where pageid=1");
						while($menurecord=mysqli_fetch_array($menuresult))
						{
							$navmenuhref=$menurecord['href'];
							
							
							$menuitemresult=mysqli_query($conn,"select * from nav_menu_items where menuid=".$menurecord['menuid']);
							if(mysqli_num_rows($menuitemresult)>0)
							{
								echo '<li><a>'.$menurecord['menu'].'<i class="fa fa-angle-down"></i></a>';
								echo '  <ul class="ht-dropdown home-dropdown">';
								while($menuitemrecord=mysqli_fetch_array($menuitemresult))
								{
									$navmenuitemhref=$menuitemrecord['href'];
									echo '<li><a href="'.$navmenuitemhref.'?cat='.$menuitemrecord['menuitem'].'">'.$menuitemrecord['menuitem'].'</a></li>';
								}
								echo ' </ul>';
							}
							else 
							{
								echo '<li><a href="'.$navmenuhref.'">'.$menurecord['menu'].'</a>';
							}
							echo ' </li>';
						}
						?>
                                                                               
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-sm-7 col-7 d-lg-none" >
                            <div class="cart-box text-right" id="cart_result1">
                                
                            </div>
							
				
                        </div>
                        <!-- Cartt Box End -->
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu pull-right" style="width:50%;">
								
                                <nav>
                                    <ul>
									<?php /*
						$menuresult=mysqli_query($conn,"select * from nav_main where pageid=1");
						while($menurecord=mysqli_fetch_array($menuresult))
						{
							$navmenuhref=$menurecord['href'];
							
							
							$menuitemresult=mysqli_query($conn,"select * from nav_menu_items where menuid=".$menurecord['menuid']);
							if(mysqli_num_rows($menuitemresult)>0)
							{
								echo '<li><a>'.$menurecord['menu'].'</a>';
								echo '  <ul>';
								while($menuitemrecord=mysqli_fetch_array($menuitemresult))
								{
									$navmenuitemhref=$menuitemrecord['href'];
									echo ' <li><a href="'.$navmenuitemhref.'">'.$menuitemrecord['menuitem'].'</a></li>';
								}
								echo ' </ul>';
							}
							else 
							{
								echo '<li><a href="'.$navmenuhref.'">'.$menurecord['menu'].'</a>';
							}
							echo ' </li>';
						}
						*/
						?>
                                         
                                    <li><a href="login.php">Login</a></li> 
									<li><a href="#">My Account</a></li>
									<li><a href="#">Offers</a></li>
                                    </ul>
                                </nav>
								-->
                            </div>
                        </div>
                        <!-- Mobile Menu  End -->                        
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End -->
        </header>
		<style>
		#nav-owl .item
		{
			border: 1px solid #cccaca;
			min-height:60px;
			vertical-align:middle;
			margin:5px 0px;
		}
		#nav-owl .item .media-left
		{
			width:40px;
		}
	
		#nav-owl .item .media-body
		{
			flex:2;
			padding-left:5px;
		}
		#nav-owl .item .media-body h6 
		{
			font-weight:600;
		}
		</style>
		<nav class="mobile-nav d-lg-none">
			<div class="container">
				<div class="row">
				<div class="owl-carousel owl-theme" id="nav-owl">
				<?php 
						$menuresult=mysqli_query($conn,"select * from nav_main where pageid=1");
						while($menurecord=mysqli_fetch_array($menuresult))
						{
							?>
							
						<div class="item  d-flex align-items-center">
						<div class="media   d-flex align-items-center">
  <div class="media-left  d-flex align-items-center">
   <img src="img/icon/item<?php echo $menurecord['menuid'] ?>.jpg"/>
  </div>
  <div class="media-body d-flex align-items-center">
    <h6 class=" d-flex align-items-center"><?php echo $menurecord['menu'] ?></h6>
  </div>
</div>
						
						
						</div>
						
						
				<?php } ?>
   
</div>
				</div>
			</div>
		</nav>
		
        <!-- Header Area End -->