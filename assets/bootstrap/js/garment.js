jQuery(document)
		.ready(
				function($) {
					
					
			
					//new garment order
					$(".garmentOrder").click(function(){

						$("#newGarmentOrder").val($("#jobNoSearch").val());
						
					})
   //edit ready status


   	$(".editReady")
							.click(
									function() {
										// window.document.location =
										// $(this).data("href");

										//alert("it worked");

										$("#orderId")
												.val(
														$(this).closest('tr')
																.children()[0].textContent);

										$("#edit_ready")
												.val(
														$(this).closest('tr')
																.children()[5].textContent);
										$("#readyDate")
												.val(
														$(this).closest('tr')
																.children()[6].textContent);



											}
											);
					
					// Edit a garment

					$(".editGarment")
							.click(
									function() {
										// window.document.location =
										// $(this).data("href");

										//alert("it worked");

										$("#categoryId")
												.val(
														$(this).closest('tr')
																.children()[0].textContent);

										$("#edit_garmentype")
												.val(
														$(this).closest('tr')
																.children()[1].textContent);
										$("#edit_desc")
												.val(
														$(this).closest('tr')
																.children()[2].textContent);
										$("#edit_normal")
												.val(
														$(this).closest('tr')
																.children()[3].textContent);
												$("#edit_express")
												.val(
														$(this).closest('tr')
																.children()[4].textContent);

												$("#edit_special")
												.val(
														$(this).closest('tr')
																.children()[5].textContent);
												$("#edit_pressing")
												.val(
														$(this).closest('tr')
																.children()[6].textContent);
												$("#edit_others")
												.val(
														$(this).closest('tr')
																.children()[7].textContent);
										

									});

					

					// Delete a garment

					$(".delGarment")
							.click(
									function() {

										// alert("delete me, mmmhhhmmm
										// sure??!!");
										$("#del_categoryId")
												.val(
														$(this).closest('tr')
																.children()[0].textContent);
									

									});

				



});



function assignCharge(id){


	//alert(id);
	document.getElementById(id+"charge").value= document.getElementById(id).value;
}

function newJobOrder(){

		//$('#add_Order')[0].reset();
		$('#toggleJobNo').show();
		$('#toggleJobNoSearch').hide();
		$('#SearchcustomerName').hide();
		$('#newcustName').show();
		$('#submitOrder').prop('disabled',false);
		$('#garmentOrder').prop('disabled',true);
		$('#dropdate').val("");
		$('#pickdate').val("");
		$('#amount').val("");
		var table = $('#orderProcessing').DataTable();
 
table
    .clear()
    .draw();
	 $("#customerName").prop('readonly', false);
}

