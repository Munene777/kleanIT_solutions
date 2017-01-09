jQuery(document)
		.ready(
				function($) {
					
					
				/*start the date picker*/

   $("#readyDate").datepicker({dateFormat: 'yy-mm-dd'});


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