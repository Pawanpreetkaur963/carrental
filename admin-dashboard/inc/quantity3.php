
<div class="pro-actions" style="position:absolute;bottom:30px;">
                                    <div class="actions-secondary">
<div class="row no-gutters">
											<div class="col-sm-6 col-8">
												<div class="input-group" style="margin-left: 5px;" >
										
											<button style="padding: 0px 5px;" id="down" class="btn btn-default" onclick=" down3(<?php echo $psliderec['productid'];  ?>,'1')"><span class="fa fa-minus"></span></button>
										
										<input type="text" id="qty--<?php echo $psliderec['productid'];  ?>" style="padding:.0rem .75rem;" class="form-control input-number" value="1" />
									
											<button id="up" style="padding: 0px 5px;" class="btn btn-default" onclick="up3(<?php echo $psliderec['productid'];  ?>,'5')"><span class="fa fa-plus"></span></button>
									
									</div>
											</div>
											
											<div class="col-sm-6 col-4">
												<a class="add-cart" href="javscript:void();" data-toggle="tooltip" title="Add to Cart" onclick="fun('<?php echo $psliderec['productid'];?>','<?php echo $psliderec['productname'];?>','<?php echo 'qty'.$psliderec['productid'];?>','<?php echo $psliderec['mrp'];?>','<?php echo $netprice;  ?>')"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a>
											</div>
										</div>
										</div>
										</div>
										<script>
	function up3(obj,max) {
		var quantity="qty--"+obj;
    document.getElementById(quantity).value = parseInt(document.getElementById(quantity).value) + 1;
    if (document.getElementById(quantity).value >= parseInt(max)) {
        document.getElementById(quantity).value = max;
    }
}
function down3(obj,min) {
	var quantity="qty--"+obj;
    document.getElementById(quantity).value = parseInt(document.getElementById(quantity).value) - 1;
    if (document.getElementById(quantity).value <= parseInt(min)) {
        document.getElementById(quantity).value = min;
    }
}

	</script>