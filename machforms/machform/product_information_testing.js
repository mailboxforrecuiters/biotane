$(function(){

	$('form.appnitro').submit(function() {	
	
		var gross = parseInt($('#element_38').val());
		var tare = parseInt($('#element_39').val());
		var net = parseInt($('#element_40').val());


		var water = parseInt($("#element_23").val());
		var inter = parseInt($("#element_46").val());
		var solids = parseInt($("#element_24").val());
/* 		var conduct = $("#element_27").val();
		alert(conduct); */
		if (isNaN(water) == true){
			water = 0;
		}
		
		if (isNaN(inter) == true){
			inter = 0;
		}
		
		if (isNaN(solids) == true){
			solids = 0;
		}
		
		if (isNaN(gross) == false){
			if (gross - tare != net){
				
				$("#element_38").parentsUntil("ul").last().addClass("error");			
				$("#element_39").parentsUntil("ul").last().addClass("error");			
				$("#element_40").parentsUntil("ul").last().addClass("error");
				alert("Error: Check  values for Gross, Net, & Tare \n Your Entry has not been submitted!");
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;
			} 

			if (gross < tare){
				$("#element_38").parentsUntil("ul").last().addClass("error");			
				$("#element_39").parentsUntil("ul").last().addClass("error");			
				alert("Error: Check  values for Gross & Tare \n Your Entry has not been submitted!");			
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;
			}
			
			//if (product == 2){
				//alert("Grease Trap Selected!");
			if ($("#element_15_2").prop("checked")){
				if (water + inter + solids != 100){
					$("#element_23").parentsUntil("ul").last().addClass("error");			
					$("#element_46").parentsUntil("ul").last().addClass("error");			
					$("#element_24").parentsUntil("ul").last().addClass("error");
					alert("ERROR: Check Values for Water %, Interface %, and Solid % \n These must all equal to 100 \n Your Entry Has Not Been Submitted!");
					$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
					return false;
				}
				
/* 				if (isNaN(conduct) == true){
					$("#element_27").parentsUntil("ul").last().addClass("error");
					alert("ERROR: Conductivity Values Must Be Only Numbers \n Do Not Include MS or US");
					$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
					return false;
				}			 */		
			}	
			
			//TODO add a section to check for conductivity levels, currently the operators are putting MS/US at the end of hte information
			//They should not be doing that. 
		}	
	});
});




/* $(document).ready(function(){
	$('#element_39').change(function(){
		var gross = parseInt($('#element_38').val());
		var tare = parseInt($('#element_39').val());
		$('#element_40').val(gross - tare);
	});
}); */




$(document).ready(function(){
	$('#element_6').change(function(){
		var selection = $('#element_6 option:selected').text();
		
		switch (selection){
			case 'ABILITY':
				$('#element_59').val(200005);
				break;				
			case 'ACT ENVIRONMENTAL':
				$('#element_59').val(201270);
				break;				
			case 'ALPHA PETROLEUM':
				$('#element_59').val(201210);
				break;				
			case 'ALPHA PUMPING':
				$('#element_59').val(200015);
				break;					
			case 'AMBERWICK':
				$('#element_59').val(201029);
				break;				
			case 'Athens':
				$('#element_59').val(13899);
				break;		
			case 'ATLAS PUMPING':
				$('#element_59').val(200028);
				break;				
			case 'BAKER COMMODITIES':
				$('#element_59').val(200037);
				break;				
			case 'CARI RECYCLING':
				$('#element_59').val(200075);
				break;					
			case 'DIAMOND ENV. (Delivered)':
				$('#element_59').val(200122);
				break;				

			case 'Environmental & Chem Consult':
				$('#element_59').val(200154);
				break;				
			case 'HARBOR BIO':
				$('#element_59').val(201277);
				break;				
			case 'HAZ-MAT':
				$('#element_59').val(200210);
				break;					
			case 'INLAND PUMPING':
				$('#element_59').val(201248);
				break;				

			case 'JR GREASE':
				$('#element_59').val(201251);
				break;					
			case 'L & S PIPELINE':
				$('#element_59').val(200294);
				break;				
			case 'LIQUID ENV.':
				$('#element_59').val(200314);
				break;	
			
			case 'LSW ENTERPRISES':
				$('#element_59').val(201278);
				break;				
			case 'MAJOR CLEAN UP':
				$('#element_59').val(200801);
				break;				
			case 'MJC PUMPING':
				$('#element_59').val(16486);
				break;					
			case 'OC PUMPING':
				$('#element_59').val(201247);
				break;				
			case 'PIPE MAINT.':
				$('#element_59').val(200421);
				break;					
			case 'Pipe Maintenance':
				$('#element_59').val(200421);
				break;				


			case 'ROTO ROOTER':
				$('#element_59').val(200450);
				break;	
			case 'SB INDUSTRIAL':
				$('#element_59').val(15607);
				break;	
			case 'STRESS LESS ENV.':
				$('#element_59').val(200485);
				break;	
			case 'Sustainable Restaurant Services':
				$('#element_59').val(201263);
				break;	

			case 'T&R':
				$('#element_59').val(200496);
				break;	
			case 'TRIPLE A PUMPING':
				$('#element_59').val(201280);
				break;	
			case 'UNITED PUMPING':
				$('#element_59').val(201234);
				break;	
			case 'VENTURA FOODS':
				$('#element_59').val(16274);
				break;	

			case 'WHITE HOUSE':
				$('#element_59').val(200572);
				break;	
			case 'WHITE WAVE':
				$('#element_59').val(201279);
				break;			
			case 'WRIGHT':
				$('#element_59').val(200576);
				break;	
				
			default:
				//Sets value of Newbos number to any other company to blank
				$('#element_59').val("");
				break;
		}
	});
});





//This file was missing from the server 
//https://inet.iwpusa.com/proddistrib.js
//3/8/19