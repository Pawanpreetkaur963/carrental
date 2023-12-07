
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">                
            <li class="">
                <a class="" href="index.php">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
			
			
				 <li class="sub-menu ">
                    <a href="javascript:;" class="">
                        <i class="fa fa-user"></i>
                        <span>User</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">                          
                        <li><a class="" href="add-user.php">Add user</a></li>
                        <li><a class="" href="user.php">Edit/Delete User</a></li>
                        
						
                    </ul>
                </li>
				 <li class="sub-menu ">
                    <a href="javascript:;" class="">
                        <i class="fa fa-user"></i>
                        <span>Brand</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">                          
                        <li><a class="" href="add-brand.php">Add Brand</a></li>
                        <li><a class="" href="brand.php">Edit/Delete Brand</a></li>
                        
						
                    </ul>
                </li>
				
			 
				 <li class="sub-menu ">
                    <a href="javascript:;" class="">
                        <i class="fa fa-user"></i>
                        <span>Vehicles</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">                          
                        <li><a class="" href="add-vehicle.php">Add Vehicle</a></li>
                        <li><a class="" href="vehicle.php">Edit/Delete Vehicles</a></li>
                        
						
                    </ul>
                </li>
				
				 
				<li class="sub-menu ">
                    <a href="javascript:;" class="">
                        <i class="fa fa-user"></i>
                        <span>Bookings</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">                          
                        <li><a class="" href="add-booking.php">Add Booking</a></li>
                        <li><a class="" href="booking.php">Edit/Delete Booking</a></li>
                        
						
                    </ul>
                </li>
				
			 
                
        </ul>

        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<script src="js/jquery.js"></script>
<style>
#sidebar ul li a span{
	
	display:none;
}
#sidebar{
	width:50px;
}
.wrapper{
	margin-left:-130px;
	width:111%;
}
</style>

<script>
 
$(document).ready(function(){
	if ($(window).width() > 767) {
  $("aside").mouseleave(function(){
	  
    //$("#sidebar").animate({left: '-150px'});
	$("#sidebar").width("50px");
	$("#sidebar ul li a span").css({"display":"none"});
	$(".wrapper").css({"margin-left":"-130px","width":"111%"});
  });
  
   $("aside").mouseenter(function(){
	 
    //$("#sidebar").animate({left: '0px'});
	$("#sidebar ul li a span").css({"display":"inline"});
	$(".wrapper").css({"margin-left":"0px","width":"100%"});
	$("#sidebar").animate({"width":"188px"},100);
	
  });
	}
	else
	{
		$("#sidebar ul li a span").css({"display":"inline"});
	$(".wrapper").css({"margin-left":"0px","width":"100%"});
	$("#sidebar").css({"width":"100%"});
	}
});
</script>

<style>

@media only screen and (max-width: 767px) {
  .sidebar-menu {
    display:none;
  }
}
</style>