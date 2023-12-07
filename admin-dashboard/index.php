<?php
include "../includes/dbconnect.php";
include "adminheader.php";
include "adminsidebar.php";

?>

<style>
    .panel 
    {
            margin-bottom:15px;
    }
    .panel-body 
    {
        padding-top:8px;
        padding-bottom:8px;
    }
    .cards:hover
    {
        -webkit-box-shadow: 0px 0px 3px 1px rgba(122,121,122,1);
-moz-box-shadow: 0px 0px 3px 1px rgba(122,121,122,1);
box-shadow: 0px 0px 3px 1px rgba(122,121,122,1);
    }
    .card-content
    {
        background:#394a59;
        padding:5px 4px 10px 13px;
        color:#fff;
    }
    .cards .card-content h3
    {
        padding:0px; 
        margin:0px;
        font-weight:bold;
        font-size:28px;
    }
    .cards .view 
    {
        text-align:center;
        color:#fff;
        width:100%;
        font-size:1.3em;
        padding:5px;
        background:#2c3a46;
    }
    .cards .view a 
    {
        color:#fff;
    }
    .view:hover 
    {
        background:#212c35 ;
        transition:0.3s ease;
        cursor:pointer;
    }
    
	
#chart-wrapper {
    display: inline-block; position: relative; height: 400px; width: 100%;
}

</style>


<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
       
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                               Summary
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <div class="row">
                                        <div class="col-sm-3" >
                                            <div class="cards ">
                                            <div class="card-content blue">
                                            <h4>Total Bookings</h4>
											<?php
											$query = "select ifnull(count(*),0) from tblbooking";
											$stmt= $conn->query($query);
												$stmt->execute(); 
												$count = $stmt->rowCount();  
											 
											?>
                                            <h3><?php echo $count; ?></h3>
                                            </div>
                                            <a href="booking.php" target="_blank">
                                            <div class="view blue-view">View</div>
                                            </a>
                                            </div> 
                                        </div>
                                   
                                        
                            </div>
							
                            </div>
							
                        </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

<script>

  const ctx = document.getElementById('chart').getContext('2d');

  const chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'bar',
       data: {
        labels: ["Total", "Pending", "Progress", "Delivered"],
        datasets: [{
            label: '# Order Summary',
            data: [<?php echo $totalorders1; ?>, <?php echo $totalpending1; ?>, <?php echo $totalprogess1; ?>, <?php echo $totaldelivery1; ?>,0],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
                
            ],
            borderWidth: 1
        }]
    },
      // Configuration options go here
      options: {
        responsive: true,
        scales: {
          xAxes: [{ticks: {beginAtZero: true}, gridLines: {zeroLineColor: 'red', drawBorder: true, display: true, zeroLineWidth: 5}}],
          // yAxes: [{ticks: {beginAtZero: true}, gridLines: {zeroLineColor: 'red', drawBorder: true, display: true, zeroLineWidth: 5}}]
          
        }
      }
  });
  
  
  //pie
  
  var oilCanvas = document.getElementById("oilChart");

//Chart.defaults.global.defaultFontFamily = "Lato";
//Chart.defaults.global.defaultFontSize = 18;

var oilData = {
    labels: [
        "Total",
        
        "Delivered"
    ],
    datasets: [
        {
            data: [<?php echo round((($totalorders1-$totaldelivery1)/$totalorders1)*100,2); ?>, <?php echo round($totaldelivery1/$totalorders1*100,2); ?>],
            backgroundColor: [
                "#FF6384",
               
                "#4bc0c0"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'pie',
  data: oilData
});
</script>

</body>
</html>
