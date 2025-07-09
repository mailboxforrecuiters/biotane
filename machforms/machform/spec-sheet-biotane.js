
$(document).ready(function(){
	
	
	
	$('#element_31, #element_33, #element_20, #element_27').change(function(){
		
		var grossOil = parseInt($('#element_10').val());
		var waterMass = parseFloat($('#element_31').val());
		var solidMass = parseFloat($('#element_33').val());
		var MIUTotal = waterMass + solidMass;
		var shrink = 0;
		

		$('#element_34').val(rounding(MIUTotal,100));
		
		console.log(waterMass, grossOil);
		var waterWeight = waterMass * grossOil / 100;
		var solidWeight = solidMass * grossOil /100;
	

	
		$('#element_35').val(rounding(waterWeight,100));
		$('#element_32').val(rounding(solidWeight, 100));
		$('#element_36').val(rounding(grossOil - waterWeight - solidWeight, 1000));


		var netOilMinusMIU = parseFloat($('#element_36').val());

		switch(true){

			case  MIUTotal > 55:
				shrink = .10 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;

			case  MIUTotal > 50:
				shrink = .09 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;

			case  MIUTotal > 45:
				shrink = .08 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;

			case  MIUTotal > 40:
				shrink = .07 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;

			case  MIUTotal > 35:
				shrink = .06 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;
	
			case  MIUTotal > 25:
				shrink = .05 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;

			case  MIUTotal > 10:
				shrink = .04 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;

			case  MIUTotal > 5:
				shrink = .03 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;

			case  MIUTotal > 2.5:
				shrink = .025 * netOilMinusMIU;
				$('#element_37').val(shrink);
				break;
	
			default:
				shrink = .02 * netOilMinusMIU;
				$('#element_37').val(shrink);
		}

		var roundedShrink = rounding($('#element_37').val(), 10000);
		$('#element_37').val(roundedShrink);
		var netWeight = rounding($('#element_36').val() -  $('#element_37').val(), 10000);
		var netWeightRounded = rounding(netWeight, 10000);
		console.log(netWeightRounded);
		

		$('#element_38').val(netWeightRounded);

	
		var supplier = $('#element_1 option:selected').text();
		var pricePerPound = parseFloat($('#element_20').val());
		var freightCharge = 0;
		switch(supplier){
		
		case "Anita's Mexican Food":
			//.75 percent of jake
			var customerPrice = rounding((pricePerPound * .75), 10000);
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;
		
		case "California Churro":
			//30% of previous months average
			var pricePerPound = parseFloat($('#element_27').val());
			var customerPrice =  rounding((pricePerPound * .3), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;

		case "Colony Products":
			//30% of daily jake
			var customerPrice =  rounding((pricePerPound * .3), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;

		case "Disney Land":
			//30% of previous months average
			var pricePerPound = parseFloat($('#element_27').val());
			var customerPrice =  rounding((pricePerPound * .3), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;
			
		case "Los Pericos":
			//75% of previous months average
			var customerPrice = rounding((pricePerPound * .75), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;
			
		case "OSI":
			//flat .15
			var customerPrice = .15;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;

		case "Snak King":
			//50% of previous months average
			var customerPrice = rounding((pricePerPound * .50), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;

		case "Wing Hing":
			//flat .15
			var customerPrice = .15;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_21').val(customerPrice);
			$('#element_23').val(customerTotal);
			break;

			
		default:
			alert('Supplier not selected!');
			
			
		};
		//TO DO make the form update info if a change happens to the price manually 
	});	

function round(x, n) {
    return Math.round(x * Math.pow(10, n)) / Math.pow(10, n)
}

function rounding(input, decimal){
	return Math.round(input * decimal) / decimal;
}	

	
});

