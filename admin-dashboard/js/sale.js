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
	
	
	$(document).on('click', '#removeRows', function(){
		$(".itemRow:checked").each(function() {
			console.log("deleted")
			$(this).closest('tr').remove();
			calculateTotal();
		});
		$('#checkAll').prop('checked', false);
		
	});		
	
	
	
	
});	
function calculateTotal(){

	
   		
   		//displaying total sqlfeet
		var textBoxAmt=document.getElementsByClassName("amt");

		var tamt=0;

		for(i=0;i<textBoxAmt.length;i++)
		{
			tamt=tamt+parseFloat(textBoxAmt[i].value);
			
		} 
		
   		$("#grandtotal1").val(tamt);
  	
	
}

 