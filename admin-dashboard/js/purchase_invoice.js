 $(document).ready(function(){
	$(document).on('click', '#checkAll', function() {          	
		$(".itemRow").prop("checked", this.checked);
	});	
	$(document).on('click', '.itemRow', function() {  	
		if ($('.itemRow:checked').length == $('.itemRow').length) {
			$('#checkAll').prop('checked', true);
		} else {
			$('#checkAll').prop('checked', false);
		}
	});  
	var count = $(".itemRow").length;
	$(document).on('click', '#addRows', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
		htmlRows += '<td><input type="text" name="productCode[]" id="productCode_'+count+'" class="form-control" autocomplete="off"></td>';          
		htmlRows += '<td><input type="text" name="productName[]" id="productName_'+count+'" class="form-control" autocomplete="off"></td>';	
		htmlRows += '<td><input type="number" name="quantity[]" id="quantity_'+count+'" class="form-control quantity" autocomplete="off"></td>';   		
		htmlRows += '<td><input type="number" name="price[]" id="price_'+count+'" class="form-control price" autocomplete="off"></td>';		 
		htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#invoiceItem').append(htmlRows);
	}); 
	$(document).on('click', '#removeRows', function(){
		$(".itemRow:checked").each(function() {
			$(this).closest('tr').remove();
		});
		$('#checkAll').prop('checked', false);
		calculateTotal();
	});		
	$(document).on('blur', "[id^=quantity_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "[id^=quantityKgs_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "[id^=productName_]", function(){
		calculateTotal();
	});
	$(document).on('change', "[id^=productName_]", function(){
		calculateTotal();
	});
	$(document).on('click', "[id^=productName_]", function(){
		calculateTotal();
	});
	$(document).on('blur', "[id^=price_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "#taxRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#labourRate", function(){		
		calculateTotal();
	});	
	$(document).on('change', "#labourRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#stichingRate", function(){		
		calculateTotal();
	});	
	$(document).on('change', "#stichingRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#loadingRate", function(){		
		calculateTotal();
	});	
	$(document).on('change', "#loadingRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#mktRate", function(){		
		calculateTotal();
	});	
	$(document).on('change', "#mktRate", function(){		
		calculateTotal();
	});
	$(document).on('blur', "#prdfRate", function(){		
		calculateTotal();
	});	
	$(document).on('change', "#prdfRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#cancerRate", function(){		
		calculateTotal();
	});	
	$(document).on('change', "#cancerRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#amountPaid", function(){
		var amountPaid = $(this).val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {
			$('#amountDue').val(totalAftertax);
		}	
	});	
	$(document).on('click', '.deleteInvoice', function(){
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this?")){
			$.ajax({
				url:"action.php",
				method:"POST",
				dataType: "json",
				data:{id:id, action:'delete_invoice'},				
				success:function(response) {
					if(response.status == 1) {
						$('#'+id).closest("tr").remove();
					}
				}
			});
		} else {
			return false;
		}
	});
});	
function calculateTotal(){
	var totalAmount = 0; 
	var totalBags = 0;
	
	$("[id^='price_']").each(function() {
		var id = $(this).attr('id');
		id = id.replace("price_",'');
		var bagWeight = $('#bagWeight_'+id).val();
		var price = $('#price_'+id).val();
		var quantity  = $('#quantity_'+id).val();
		var quantityKgs  = $('#quantityKgs_'+id).val();
		if(!quantity) {
			quantity = 1;
		}
		
		var quintals=((parseFloat(bagWeight)*parseFloat(quantity))/100).toFixed(2);
		quintals=(parseFloat(quintals)+(parseFloat(quantityKgs)/100)).toFixed(2);
		$('#quintals_'+id).val(quintals);
		//var total = (price*quantity)/(100/bagWeight);
		var total = (price*quintals).toFixed(2);
		$('#total_'+id).val(parseFloat(total));
		totalAmount = parseFloat(totalAmount)+parseFloat(total);		
		
		
		if(quantity>1) totalBags += parseFloat(quantity);
		
	});
	
	//totalBags=totalBags;
	$('#totalBags').val(parseFloat(totalBags));
	
	$('#subTotal').val(parseFloat(totalAmount));	
	var taxRate = $("#taxRate").val();
	var totalBags = $("#totalBags").val();
	var labourRate = $("#labourRate").val();
	var stichingRate = $("#stichingRate").val();
	var loadingRate = $("#loadingRate").val();
	var mktRate = $("#mktRate").val();
	var prdfRate = $("#prdfRate").val();
	var cancerRate = $("#cancerRate").val();
	var subTotal = $('#subTotal').val();	
	if(subTotal) {
		var taxAmount = (subTotal*taxRate/100).toFixed(2);
		var totalLabour=(totalBags * labourRate).toFixed(2);
		var totalStiching=(totalBags * stichingRate).toFixed(2);
		var totalLoading=(totalBags * loadingRate).toFixed(2);
		var totalMkt = (subTotal*mktRate/100).toFixed(2);
		var totalPrdf = (subTotal*prdfRate/100).toFixed(2);
		var totalCancer = (subTotal*cancerRate/100).toFixed(2);
		$('#taxAmount').val(taxAmount);
		$('#labourAmount').val(totalLabour);
		$('#stichingAmount').val(totalStiching);
		$('#loadingAmount').val(totalLoading);
		$('#mktAmount').val(totalMkt);
		$('#prdfAmount').val(totalPrdf);
		$('#cancerAmount').val(totalCancer);
		subTotal = parseFloat(subTotal)+parseFloat(taxAmount)+parseFloat(totalLabour)+parseFloat(totalStiching)+parseFloat(totalLoading)+parseFloat(totalMkt)+parseFloat(totalPrdf)+parseFloat(totalCancer);
		$('#totalAftertax').val(subTotal);		
		var amountPaid = $('#amountPaid').val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {		
			$('#amountDue').val(subTotal);
		}
	}
}

 