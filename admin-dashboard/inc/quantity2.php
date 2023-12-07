<section class="details">
<p class="dtl"><span class="price">&#8377; <?php echo $netprice;  ?></span><del class="prev-price">&#8377;<?php echo $psliderec['mrp'];  ?></del></p>
                                <br>
<div class="pro-actions">
                                    <div class="actions-secondary">
<div class="row no-gutters" >
											<div class="col-7" style="padding-right:0px;">
												<div class="input-group" >
										
											<button style="padding: 0px 5px;" id="down2" class="btn btn-default" onclick=" down2(<?php echo $psliderec['productid'];  ?>,'1')"><span class="fa fa-minus"></span></button>
										
										<input type="text" id="qty-<?php echo $psliderec['productid'];  ?>" style="padding:.0rem .75rem;" class="form-control input-number" value="1" />
									
											<button id="up" style="padding: 0px 5px;" class="btn btn-default" onclick="up2(<?php echo $psliderec['productid'];  ?>,'5')"><span class="fa fa-plus"></span></button>
									
									</div>
											</div>
											
											<div class="col-5" style="padding-left:0px;padding-right:0px;">
												<a class="add-cart" href="javscript:void();" data-toggle="tooltip" title="Add to Cart" onclick="fun('<?php echo $psliderec['productid'];?>','<?php echo $psliderec['productname'];?>','<?php echo 'qty'.$psliderec['productid'];?>','<?php echo $psliderec['mrp'];?>','<?php echo $netprice;  ?>')"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a>
												
												
											</div>
										</div>
										</div>
										</div>
										</section>
										<script>
	function up2(obj,max) {
		var quantity="qty-"+obj;
    document.getElementById(quantity).value = parseInt(document.getElementById(quantity).value) + 1;
    if (document.getElementById(quantity).value >= parseInt(max)) {
        document.getElementById(quantity).value = max;
    }
}
function down2(obj,min) {
	var quantity="qty-"+obj;
    document.getElementById(quantity).value = parseInt(document.getElementById(quantity).value) - 1;
    if (document.getElementById(quantity).value <= parseInt(min)) {
        document.getElementById(quantity).value = min;
    }
}

	</script>