
$(document).ready(function(){
	function rounding(input, decimal){
		return Math.round(input * decimal) / decimal;
	}
	
	$('#element_12').change(function(){
		var percentSolids = parseFloat($('#element_12').val());
		var percentWater = parseFloat($('#element_11').val());
		var netWeight = parseInt($('#element_10').val(), 10);
		
		//Calculate Product Yield
		var productYield = 100 - percentSolids - percentWater;
		var productYieldTest = rounding(100 - percentSolids - percentWater, 100);
		var MUIVol = percentSolids + percentWater;
		$('#element_13').val(productYieldTest);
		
 
		
		
		//Calculate Finish Weight
		var finishWeight = netWeight * productYield / 100;
		var finishWeightTest = rounding(finishWeight, 100);
		$('#element_15').val(finishWeightTest);
		
		
		//Water Mass Calculate
		
/*  		alert('Oil Vol:' + productYield); // This is giving the wrong value
		alert('MUIVol: ' + MUIVol);
		alert('Percent Water:' + percentWater);
		alert('Percent Solids:' + percentSolids);  */
		
		var waterMass = Math.round((percentWater * 9.163) / ((MUIVol * 9.163) + (productYield * 7.56)) * 100 * 10000) / 10000;
		var solidMass = Math.round((percentSolids * 9.163) / ((MUIVol * 9.163) + (productYield * 7.56)) * 100 * 10000) / 10000;


		var oilMass = 100 - waterMass - solidMass;
		var muiMass = 100 - oilMass;
		var adjustWeight = Math.round(netWeight * oilMass / 100, 10);
		$('#element_18').val(waterMass);
		$('#element_19').val(solidMass);
		$('#element_17').val(adjustWeight);
		
		var muiDeduction = Math.round(-1 * ( (adjustWeight - netWeight) / netWeight) * 100 * 100, 10) / 100;
		$('#element_16').val(muiDeduction);
		
		//want to add a final product yeild, which is the MIU deduction - 100
		var finalProductYield = 100 - muiDeduction;
		$('#element_25').val(finalProductYield);


		
	});
	
	
	//Calculate Customer Price
	$('#element_20').change(function(){
		var pricePerPound = parseFloat($('#element_20').val());
		var adjustWeightElement  = parseFloat($('#element_17').val());
		var freightCharge = parseFloat($('#element_22').val());
		var supplier = $('#element_1 option:selected').text();

		var percentSolids = parseFloat($('#element_12').val());
		var percentWater = parseFloat($('#element_11').val());
		var miu = percentSolids + percentWater;
		switch(supplier){
			case 'U Div':
					//add 85 percent of the jake
				var customerPrice = Math.round(pricePerPound * .85 * 100000) / 100000;
				customerPrice = Math.round(customerPrice * 10000) / 10000;
				var customerTotal = Math.round(((customerPrice * adjustWeightElement) + freightCharge ) * 100) / 100;
				$('#element_21').val(customerPrice);
				$('#element_23').val(customerTotal);
				break;
								
			case 'Disneyland':
					//add 85 percent of the jake
				var customerPrice = Math.round(pricePerPound * .85 * 100000) / 100000;
				customerPrice = Math.round(customerPrice * 10000) / 10000;
				var customerTotal = Math.round(((customerPrice * adjustWeightElement) + freightCharge ) * 100) / 100;
				$('#element_21').val(customerPrice);
				$('#element_23').val(customerTotal);
				break;	
				
			case 'New-Com':
				if (miu <= 2){
						customerPrice = Math.round(pricePerPound * 10000) / 10000;
				} else if (miu <=4){
						customerPrice = Math.round((pricePerPound - 0.005) * 10000) / 10000;
				} else if (miu <= 6){
						customerPrice = Math.round((pricePerPound - 0.01) * 10000) / 10000;
				} else if (miu <= 8){
						customerPrice = Math.round((pricePerPound - 0.02) * 10000) / 10000;
				} else if (miu <=10){
						customerPrice = Math.round((pricePerPound - 0.03) * 10000) / 10000;
				} else {
						customerPrice = Math.round((pricePerPound - 0.05) * 10000) / 10000;
					//customerPrice = pricePerPound;
					//alert("Is the price really above a dollar?");
				};
				
				customerPrice = Math.round(customerPrice * 10000) / 10000;
				var customerTotal = Math.round(((customerPrice * adjustWeightElement) + freightCharge ) * 100) / 100;
				$('#element_21').val(customerPrice);
				$('#element_23').val(customerTotal);						
				break;		
				
			//Changed 3/22/19
			//Added 
			case 'New-Wave':
				if (miu <= 2){
						customerPrice = Math.round(pricePerPound * 10000) / 10000;
				} else if (miu <=4){
						customerPrice = Math.round((pricePerPound - 0.005) * 10000) / 10000;
				} else if (miu <= 6){
						customerPrice = Math.round((pricePerPound - 0.01) * 10000) / 10000;
				} else if (miu <= 8){
						customerPrice = Math.round((pricePerPound - 0.02) * 10000) / 10000;
				} else if (miu <=10){
						customerPrice = Math.round((pricePerPound - 0.03) * 10000) / 10000;
				} else {
						customerPrice = Math.round((pricePerPound - 0.05) * 10000) / 10000;
					//customerPrice = pricePerPound;
					//alert("Is the price really above a dollar?");
				};
				
				customerPrice = Math.round(customerPrice * 10000) / 10000;
				var customerTotal = Math.round(((customerPrice * adjustWeightElement) + freightCharge ) * 100) / 100;
				$('#element_21').val(customerPrice);
				$('#element_23').val(customerTotal);						
				break;				
				
				
			case 'Atlas Pumping':
				var customerPrice = Math.round(pricePerPound * .7 * 100000) / 100000;
				customerPrice = Math.round(customerPrice * 10000) / 10000;
				var customerTotal = Math.round(((customerPrice * adjustWeightElement) + freightCharge ) * 100) / 100;
				$('#element_21').val(customerPrice);
				$('#element_23').val(customerTotal);
				break;
				
			case 'T&R':
				var customerPrice = Math.round(pricePerPound * .65 * 100000) / 100000;
				customerPrice = Math.round(customerPrice * 10000) / 10000;
				var customerTotal = Math.round(((customerPrice * adjustWeightElement) + freightCharge ) * 100) / 100;
				$('#element_21').val(customerPrice);
				$('#element_23').val(customerTotal);
				break;
				
			case 'Best Western':
				var customerPrice = Math.round(pricePerPound * .73 * 1000000) / 1000000;
				customerPrice = Math.round(customerPrice * 100000000) / 100000000;
				var customerTotal = Math.round(((customerPrice * adjustWeightElement) + freightCharge ) * 100) / 100;
				$('#element_21').val(customerPrice);
				$('#element_23').val(customerTotal);
				break;		
				
			default:
				alert('Supplier not selected!');
			
			
		};
		//TO DO make the form update info if a change happens to the price manually 
	});
	
	
	//Update the total based on 
	$('#element_22').change(function(){
		var freightCharge = parseFloat($('#element_22').val());
		var customerTotal = parseFloat($('#element_23').val());
		var freightUpdatedTotal = freightCharge + customerTotal;
		$('#element_23').val(freightUpdatedTotal);
	});
	
});



$(document).ready(function(){
	$("#element_27_1").click(function(){
		
		//On click of create a paysheet, will move values from water/solids/FFA down to paysheet section
		//Per Richard Lopez going to move the water mass % not the strict percentages
		var waterMove = parseFloat($('#element_18').val());
		var solidsMove = parseFloat($('#element_19').val());
		var ffaMove = parseFloat($('#element_14').val());
		var miuTotalMove = waterMove + solidsMove;
		
		console.log(waterMove, solidsMove, ffaMove, miuTotalMove);
		
		$('#element_38').val(waterMove);
		$('#element_39').val(solidsMove);
		$('#element_40').val(ffaMove);
		$('#element_41').val(miuTotalMove);
		
	});
});




$(document).ready(function(){
		
		/*
	All old Elements
	28 = Gross Vehicle
	29 = Tare Vehicle 
	10 = Gross Oil Weight
	31 = Water Mass
	33 = solid Mass
	14 = FFA
	20 = Jake Price
	22 = Freight Charge
	27 = Previous Months Jake
	34 = MIU TOTal (Water & Solid)
	35 = Water Weight
	32 = Solids Weight
	36 = Net Oil - MIU
	37 = Shrink for MIU
	38 = Net Weight 
	21 = Customer Price
	23 = Total Due
	*/
	
	/*
	
	New 
	29 = Gross Vehicle
	36 = Tare Vehicle
	37 = Gross Oil
	38 = Water Mass %
	39 = Solid Mass %
	40 = Product FFA
	41 = MIU Total
	42 = Water Weight 
	43 = Solids Weight 
	44 = Net Oil Minus Oil 
	45 = Shrink for MIU
	46 = Net Weight
	47 = Jake Price ($)
	51 = Previous Month Jake
	48 = Customer Price
	49 = Freight Charge
	50 = Total Due 
	
	*/ 
	
	//31 -> 38 33 -> 39 20 -> 47 _51 -> 51
	$('#element_38, #element_39, #element_47, #element_51, #element_37').change(function(){
		
		//10 -> 37
		var grossOil = parseInt($('#element_37').val());
		//31 -> 38
		var waterMass = parseFloat($('#element_38').val());
		//33 -> 39
		var solidMass = parseFloat($('#element_39').val());
		var MIUTotal = waterMass + solidMass;
		var shrink = 0;
		

		$('#element_41').val(rounding(MIUTotal,100));
		
		console.log(waterMass, grossOil);
		var waterWeight = waterMass * grossOil / 100;
		var solidWeight = solidMass * grossOil /100;
	

	
		$('#element_42').val(rounding(waterWeight,100));
		$('#element_43').val(rounding(solidWeight, 100));
		//Update 36 - 
		$('#element_44').val(rounding(grossOil - waterWeight - solidWeight, 1000));


		var netOilMinusMIU = parseFloat($('#element_44').val());

		switch(true){

			case  MIUTotal > 55:
				shrink = .10 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;

			case  MIUTotal > 50:
				shrink = .09 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;

			case  MIUTotal > 45:
				shrink = .08 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;

			case  MIUTotal > 40:
				shrink = .07 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;

			case  MIUTotal > 35:
				shrink = .06 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;
	
			case  MIUTotal > 25:
				shrink = .05 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;

			case  MIUTotal > 10:
				shrink = .04 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;

			case  MIUTotal > 5:
				shrink = .03 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;

			case  MIUTotal > 2.5:
				shrink = .025 * netOilMinusMIU;
				$('#element_45').val(shrink);
				break;
	
			default:
				shrink = .02 * netOilMinusMIU;
				$('#element_45').val(shrink);
		}

		var roundedShrink = rounding($('#element_45').val(), 10000);
		$('#element_45').val(roundedShrink);
		var netWeight = rounding($('#element_44').val() -  $('#element_45').val(), 10000);
		var netWeightRounded = rounding(netWeight, 10000);
		console.log(netWeightRounded);
		

		$('#element_46').val(netWeightRounded);

	
		var supplier = $('#element_28 option:selected').text();
		var pricePerPound = parseFloat($('#element_47').val());
		var freightCharge = 0;
		switch(supplier){
		
		case "Anita's Mexican Food":
			//.75 percent of jake
			var customerPrice = rounding((pricePerPound * .75), 100);
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
			break;
		
		case "California Churro":
			//30% of previous months average
			var pricePerPound = parseFloat($('#element_51').val());
			var customerPrice =  rounding((pricePerPound * .3), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
			break;

		case "Colony Products":
			//30% of daily jake
			var customerPrice =  rounding((pricePerPound * .3), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
			break;

		case "Disney Land":
			//30% of previous months average
			var pricePerPound = parseFloat($('#element_51').val());
			var customerPrice =  rounding((pricePerPound * .3), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
			break;
			
		case "Los Pericos":
			//75% of previous months average
			var customerPrice = rounding((pricePerPound * .75), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
			break;
			
		case "OSI":
			//flat .15
			var customerPrice = .15;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
			break;

		case "Snak King":
			//50% of previous months average
			var customerPrice = rounding((pricePerPound * .50), 10000)
			customerPrice = Math.round(customerPrice * 10000) / 10000;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
			break;

		case "Wing Hing":
			//flat .15
			var customerPrice = .15;
			var customerTotal = Math.round(((customerPrice * netWeight) + freightCharge ) * 100) / 100;
			$('#element_48').val(customerPrice);
			$('#element_50').val(customerTotal);
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








































