jQuery(document)
		.ready(
				function($) {
					
					
				

					
					// Edit a customer

					$(".editCustomer")
							.click(
									function() {
										// window.document.location =
										// $(this).data("href");

										//alert("it worked");

										$("#customerId")
												.val(
														$(this).closest('tr')
																.children()[0].textContent);

										$("#edit_firstName")
												.val(
														$(this).closest('tr')
																.children()[1].textContent);
										$("#edit_lastName")
												.val(
														$(this).closest('tr')
																.children()[2].textContent);
										$("#edit_phone")
												.val(
														$(this).closest('tr')
																.children()[3].textContent);
										

									});

					

					// Delete a class rep

					$(".delCustomer")
							.click(
									function() {

										// alert("delete me, mmmhhhmmm
										// sure??!!");
										$("#del_customerId")
												.val(
														$(this).closest('tr')
																.children()[0].textContent);
									

									});

				



});