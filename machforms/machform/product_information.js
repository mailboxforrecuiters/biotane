$(document).ready(function(){
	$('#element_39').change(function(){
		var gross = parseInt($('#element_38').val());
		var tare = parseInt($('#element_39').val());
		$('#element_40').val(gross - tare);
	});
});

//This file was missing from the server 
//https://inet.iwpusa.com/proddistrib.js
//3/8/19