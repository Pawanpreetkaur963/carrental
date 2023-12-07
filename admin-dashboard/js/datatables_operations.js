$(document).ready(function () {

                $('#ordersTable').DataTable({
                    //      "pagingType": "full_numbers",
                    //"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

                    "processing": true,
                    "serverSide": true,
                    "ajax": "inc/records_products.php",
                    "columnDefs": [
                        {
                            "data": null,
                            "defaultContent": "<button type='button' class='btn btn-primary editAction actionBtn '><i class='fa fa-pencil-square-o'></i></button>",
                            "targets": -1
                        },
                        {
                            "data": null,
                            "defaultContent": "<button type='button' class='btn btn-danger deleteAction actionBtn'><i class='fa fa-trash'></i></button>",
                            "targets": -2
                        },
                 
                       
                    ],
                });
                
                
                var table1 = $('#ordersTable').DataTable();
                $('#ordersTable tbody').on('click', 'button', function () {
                    var row = $(this).closest("tr");
                    var cellData = table1.row(row).data();
                    var id = cellData[7];
                    
                    //Is it update or delete?
                    var editAction = $(this).hasClass("editAction");
                    var deleteAction = $(this).hasClass("deleteAction");
                    if(editAction){
                        
                       // alert("Edit Meds "+id);
                        window.location.href='products_update.php?pid='+id;
                    } 
                    
                        else if(deleteAction){
                            if(confirm('Are you sure you want to delete?'))
                            {
                                $.ajax({
				url:'ajax_functions.php',
				method:'GET',
				type:'json',
				data: {deleteUser:true, pid:id},
				success:function(data){
					//Decoding Response data from php file
					//alert('Product Deleted!');
                                        $(row).remove();
				}
			});
                        //alert("Delete Meds "+id);}
                        
                    }
                }
                    
    
                });
              
            });