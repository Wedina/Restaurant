

$('select').change(function() {
	
	var productId = $(this).val();
	var url = getRequestUrl() + '/product';
	var params = {
		id: productId,	
	};

	$.get(url, params, function (html) {
		
		$('.detail_product').html(html);
	});

});

$('select').trigger('change');



$( ".ajouter" ).click(function() {
    var quantity = $('.quantity').val();
   var productId = $('select').val();

	var url = getRequestUrl() + '/cart';
	var params = {
		id: productId,
		quantity: quantity,
	};
	console.log(params);
		
	$.post(url, params, function (html) {
		
		$('#order-summary').html(html);
	});
	

});

function loadCart() {
	// load cart
	var url = getRequestUrl() + '/cart';

	$.get(url, function (html) {
		$('#order-summary').html(html);
	});	
}

loadCart();




$(document).on('click', '.btn-delete',function () {
	// var index;

	// var items = '.btn-delete';

 //            this.items.splice();

 //            this.save();

     
})


