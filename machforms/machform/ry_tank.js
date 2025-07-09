$(function(){

	//code below will be executed when the submit button being clicked
	$('form.appnitro').submit(function() {	
		
		//TO DO get a way for when an entry is submitted again the correct check point is highlighted, currently 
		//The text 'Incorrect Text entered!' is being appended every time. 
		//$("#element_38").parentsUntil("ul").last().removeClass("error");
		
		//Need to make all of this inside an If statement to check to see if the value exists, there is a 
		//problem when getting into a form you have to click on the enter a password to check the loads
		
		var water = parseInt($('#element_3').val());
		var solid = parseInt($('#element_4').val());
		var oil = parseInt($('#element_5').val());


		//console.log(water,solid,oil);
		
		

			
		if (isNaN(water) == false){
			if (water + solid + oil != 100){
				
				$("#element_3").parentsUntil("ul").last().addClass("error");			
				$("#element_4").parentsUntil("ul").last().addClass("error");			
				$("#element_5").parentsUntil("ul").last().addClass("error");
				alert("Error: Check  values for Water, Solid, & Oil \n Water + Solid + Oil Must Equal 100 \n Your Entry has not been submitted!");
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;
			} 

/* 			if (gross < tare){
				$("#element_28").parentsUntil("ul").last().addClass("error");			
				$("#element_29").parentsUntil("ul").last().addClass("error");			
				alert("Error: Check  values for Gross & Tare \n Your Entry has not been submitted!");			
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;
			} */
		}
		
/* 		if (isNaN(grossDest) == false){
			if (grossDest - tareDest != netDest){
				
				$("#element_9").parentsUntil("ul").last().addClass("error");			
				$("#element_10").parentsUntil("ul").last().addClass("error");			
				$("#element_11").parentsUntil("ul").last().addClass("error");
				alert("Error: Check  values for Destination Gross, Net, & Tare \n Your Entry has not been saved!");
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;		
			}	
		} */
	});
	
});


$(document).ready(function(){

	$("#element_3, #element_4, #element_5, #element_6").change(function(){
		
		var inchesOil =  118 - parseFloat($("#element_6").val());
		var lbsStuffRY = (inchesOil * 21462 / 118) * 7.56;
		var waterPercent = parseInt($("#element_3").val()) / 100;
		var solidPercent = parseInt($("#element_4").val()) / 100;
		
		var waterCalc = parseInt($("#element_3").val());
		var solidCalc = parseInt($("#element_4").val());
		var oilCalc = 100 - waterCalc - solidCalc;
		$("#element_5").val(oilCalc);
		
		
		
		var waterMass = (((waterPercent)*9.163))/(((waterPercent+solidPercent)*9.163)+((1-waterPercent-solidPercent)*7.56));
		var solidMass = (((solidPercent)*9.163))/(((waterPercent+solidPercent)*9.163)+((1-waterPercent-solidPercent)*7.56));
		console.log(inchesOil, lbsStuffRY, waterPercent, solidPercent, "Water Mass:", waterMass);
		console.log("Solid Mass", solidMass);
		
		var lbsOilPercent = 1 - waterMass - solidMass; 
		console.log("Percent of Oil", lbsOilPercent);
		

		
		var lbsOil = lbsStuffRY * lbsOilPercent;
		console.log("Lbs of Oil", lbsOil);
		
		$("#element_14").val(lbsStuffRY.toFixed(2));
		$("#element_7").val(lbsOil.toFixed(2));
		
	});
	
	
	$("#element_10_1").click(function(){
		
		var newbosLbs = parseFloat($("#element_8").val());
		var oilLbs = parseFloat($("#element_7").val());
		
		
		
		var waterPercent = parseInt($("#element_3").val()) / 100;
		var solidPercent = parseInt($("#element_4").val()) / 100;
		var waterMass = (((waterPercent)*9.163))/(((waterPercent+solidPercent)*9.163)+((1-waterPercent-solidPercent)*7.56));
		var solidMass = (((solidPercent)*9.163))/(((waterPercent+solidPercent)*9.163)+((1-waterPercent-solidPercent)*7.56));
		var lbsOilPercent = 1 - waterMass - solidMass; 
		$("#element_12").val(waterMass);
		$("#element_13").val(solidMass);
		
		if(isNaN(newbosLbs) == false){

			
			
			console.log(newbosLbs, oilLbs);
			difference = newbosLbs - oilLbs;
			console.log(difference);
			
			$("#element_9").val(difference);
			
			
		$.post("ry_tank_email.php",
			{
				postDifference: $("#element_9").val(),
				postDay: $("#element_1_1").val(),
				postMonth: $("#element_1_2").val(),
				postYear: $("#element_1_3").val(),
				postNewbos: $("#element_8").val(),
				postOilYard: $("#element_7").val()
				
			}, function(data,status){
			alert("Debug Testing: Disregard: Data: " + data + " " + status);
			});
			
			
			
			
		} else {
			alert("Missing Newbos Lbs! \n Calculations Not Done \n Email Not Sent!");
		
		}
		
	});
	
	

});



