(function($){

	$.fn.swapActive= function(id){

		alert(id);
		return this;
	};
})(jQuery);


function swapActive(id){

	if(id=="search"){
		var ser= document.getElementById(id);
		//alert(ser.classList);
		ser.classList.add("Active");
		//alert(ser.classList);
	}

}