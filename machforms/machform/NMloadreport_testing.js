/* $(document).ready(function () {
      $("#element_28, #element_29").change(function() {
var result = parseInt($('#element_28').val(), 10) - parseInt($('#element_29').val(), 10);
var rounded = result.toFixed(2);
           $('#element_30').val(rounded);
$('#element_30').prop('readonly', true);
     });
   }); */

$(function(){

	//code below will be executed when the submit button being clicked
	$('form.appnitro').submit(function() {	
		
		//TO DO get a way for when an entry is submitted again the correct check point is highlighted, currently 
		//The text 'Incorrect Text entered!' is being appended every time. 
		//$("#element_38").parentsUntil("ul").last().removeClass("error");
		
		//Need to make all of this inside an If statement to check to see if the value exists, there is a 
		//problem when getting into a form you have to click on the enter a password to check the loads
		
		var gross = parseInt($('#element_28').val());
		var tare = parseInt($('#element_29').val());
		var net = parseInt($('#element_30').val());

		var grossDest = parseInt($('#element_9').val());
		var tareDest = parseInt($('#element_10').val());
		var netDest = parseInt($('#element_11').val());


			
		if (isNaN(gross) == false){
			if (gross - tare != net){
				
				$("#element_28").parentsUntil("ul").last().addClass("error");			
				$("#element_29").parentsUntil("ul").last().addClass("error");			
				$("#element_30").parentsUntil("ul").last().addClass("error");
				alert("Error: Check  values for Gross, Net, & Tare \n Your Entry has not been submitted!");
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;
			} 

			if (gross < tare){
				$("#element_28").parentsUntil("ul").last().addClass("error");			
				$("#element_29").parentsUntil("ul").last().addClass("error");			
				alert("Error: Check  values for Gross & Tare \n Your Entry has not been submitted!");			
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;
			}
		}
		
		if (isNaN(grossDest) == false){
			if (grossDest - tareDest != netDest){
				
				$("#element_9").parentsUntil("ul").last().addClass("error");			
				$("#element_10").parentsUntil("ul").last().addClass("error");			
				$("#element_11").parentsUntil("ul").last().addClass("error");
				alert("Error: Check  values for Destination Gross, Net, & Tare \n Your Entry has not been saved!");
				$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);
				return false;		
			}	
		}
		

			
//code example from developer
/* 		if($("#element_38").val() != "978"){
		
			$("#element_38").parentsUntil("ul").last().addClass("error").append('<p class="error">Incorrect text entered!</p>');

	    //restore the submit button
			$("#li_buttons > input[type=submit],#li_buttons > input[type=image]").prop("disabled",false);

	    //cancel the form submission
			return false;
		} */
	});
});

/* $(document).ready(function(){
	$('#element_ */




//Old auto calculate for destination net
//Removed 3/27/19
/* $(document).ready(function () {
      $("#element_9, #element_10").change(function() {
var result = parseInt($('#element_9').val(), 10) - parseInt($('#element_10').val(), 10);
//var rounded = result.toFixed(2);
var rounded = Math.round(result * 100000) / 100000;
           $('#element_11').val(rounded);
$('#element_11').prop('readonly', true);
     });
   }); */

$(document).ready(function () { 
      $("#element_3").change(function() { 
var x = $('#element_3 option:selected').text();


		  var a1 = "F2 CATTLE CO INC";
		  if (x==a1) {
			  $("#element_4").val("16953");
			  $("#element_6_1").val("5438 County Road KK");
			  $("#element_6_3").val("Hereford");
			  $("#element_6_4").val("TX");
			  $("#element_6_5").val("79045");
			  $("#element_6_6 option:selected").text("United States");
		  } {
		  }



		  var a1 = "SOUTHWEST CATTLE, LLC";
		  if (x==a1) {
			  $("#element_4").val("16858");
			  $("#element_6_1").val("960 Road 50");
			  $("#element_6_3").val("Sublette");
			  $("#element_6_4").val("KS");
			  $("#element_6_5").val("67877");
			  $("#element_6_6 option:selected").text("United States");
		  } {
		  }




		  var a1 = "Meinke Farms";
		  if (x==a1) {
			  $("#element_4").val("16815");
			  $("#element_6_1").val("15460 Indian Hill RD");
			  $("#element_6_3").val("Amarillo");
			  $("#element_6_4").val("TX");
			  $("#element_6_5").val("79124");
			  $("#element_6_6 option:selected").text("United States");
		  } {
		  }


		  var a1 = "11 Ranch";
		  if (x==a1) {
			  $("#element_4").val("16816");
			  $("#element_6_1").val("10200 S Blessen RD");
			  $("#element_6_3").val("Amarillo");
			  $("#element_6_4").val("TX");
			  $("#element_6_5").val("79119");
			  $("#element_6_6 option:selected").text("United States");
		  } {
		  }


//Additions above

var a1 = "KUSTOM KARE"; 
if (x==a1) { 
$("#element_4").val("16803"); 
$("#element_6_1").val("5801 Menominee Road"); 
$("#element_6_3").val("Roswell"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "DOUBLE AUGHT DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("16576"); 
$("#element_6_1").val("222 E DARBY RD"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}			  
		  
		  
var a1 = "PIRTLE FARMS"; 
if (x==a1) { 
$("#element_4").val("16476"); 
$("#element_6_1").val("3001 E MCGAFFEY STREET"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}			  
		  
var a1 = "CHASE FARMS"; 
if (x==a1) { 
$("#element_4").val("16429"); 
$("#element_6_1").val("7591 CHEROKEE RD"); 
$("#element_6_3").val("HAGERMAN"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88232"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}		  
		  
var a1 = "VALLEYVIEW DAIRY"; 
if (x==a1) { 
$("#element_4").val("16404"); 
$("#element_6_1").val("15 N HAWTHORN RD"); 
$("#element_6_3").val("LAKE ARTHUR"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88253"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "Backwards 7 L Cattle Comp"; 
if (x==a1) { 
$("#element_4").val("16369"); 
$("#element_6_1").val("900 N Garden"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "JOHN BORBA & SONS DAIRY"; 
if (x==a1) { 
$("#element_4").val("15"); 
$("#element_6_1").val("9060 EDISON AVENUE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "CABALLERO FARMS"; 
if (x==a1) { 
$("#element_4").val("15051"); 
$("#element_6_1").val("1609 S WYOMING"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "J.D. HEISKELL/FREIGHT"; 
if (x==a1) { 
$("#element_4").val("16081"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "VAZ DAIRY"; 
if (x==a1) { 
$("#element_4").val("5651"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "BRAND WEST DAIRY"; 
if (x==a1) { 
$("#element_4").val("15704"); 
$("#element_6_1").val("159 LONGVIEW RD"); 
$("#element_6_3").val("LOVINGTON"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88260"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "HIWAY EXPRESS"; 
if (x==a1) { 
$("#element_4").val("15279"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "DICK DYKSTRA"; 
if (x==a1) { 
$("#element_4").val("58"); 
$("#element_6_1").val("10129 SCHAEFER AVENUE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91761"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "JAMES & JOHN JONGSMA DAIRY"; 
if (x==a1) { 
$("#element_4").val("93"); 
$("#element_6_1").val("9876 EDISON AVE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762-7213"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

















var a1 = "STUEVE GOLD DAIRY"; 
if (x==a1) { 
$("#element_4").val("148"); 
$("#element_6_1").val("2700 CR6"); 
$("#element_6_3").val("HERAFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MARVO HOLSTEINS DAIRY"; 
if (x==a1) { 
$("#element_4").val("710"); 
$("#element_6_1").val("P.O. BOX 829"); 
$("#element_6_3").val("LAKEVIEW"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("92567"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "IMPERIAL WESTERN PRODUCTS"; 
if (x==a1) { 
$("#element_4").val("716"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "CADILLAC RANCH"; 
if (x==a1) { 
$("#element_4").val("914"); 
$("#element_6_1").val("5616 W. GROVE COURT"); 
$("#element_6_3").val("VISALIA"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("93291"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "DOUBLE D DAIRY"; 
if (x==a1) { 
$("#element_4").val("950"); 
$("#element_6_1").val("2669 RIVER ROAD"); 
$("#element_6_3").val("CORONA"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91720"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "PASTIME LAKES"; 
if (x==a1) { 
$("#element_4").val("1095"); 
$("#element_6_1").val("34450 RAMONA EXPRESSWAY"); 
$("#element_6_3").val("LAKEVIEW"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("92567"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ANDY DYT DAIRY"; 
if (x==a1) { 
$("#element_4").val("1368"); 
$("#element_6_1").val("6207 ARCHIBALD AVENUE"); 
$("#element_6_3").val("CORONA"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("92880-9600"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MARIE MINABERRY DAIRY"; 
if (x==a1) { 
$("#element_4").val("1452"); 
$("#element_6_1").val("8888 EUCALYPTUS AVE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}







var a1 = "HARMSEN FAMILY DAIRY"; 
if (x==a1) { 
$("#element_4").val("1541"); 
$("#element_6_1").val("23920 COMMUNITY BLVD"); 
$("#element_6_3").val("HINKLEY,"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("92347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "PETE VANDERHAM"; 
if (x==a1) { 
$("#element_4").val("2350"); 
$("#element_6_1").val("4800 WINEVILLE ROAD"); 
$("#element_6_3").val("MIRA LOMA,"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91752"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "H & R WESTRA"; 
if (x==a1) { 
$("#element_4").val("2477"); 
$("#element_6_1").val("1551 S RR 10"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "PAHRUMP DAIRY"; 
if (x==a1) { 
$("#element_4").val("3585"); 
$("#element_6_1").val("14651 S. GROVE AVE."); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "NORTHVIEW DAIRY"; 
if (x==a1) { 
$("#element_4").val("3827"); 
$("#element_6_1").val("13191 HAVEN AVENUE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91761"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "PRO SERVE FEEDS"; 
if (x==a1) { 
$("#element_4").val("3886"); 
$("#element_6_1").val("901 EAST WASHINGTON #282"); 
$("#element_6_3").val("COLTON"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("92324"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "NORTHSTAR DAIRY"; 
if (x==a1) { 
$("#element_4").val("4120"); 
$("#element_6_1").val("12718 ROAD 144"); 
$("#element_6_3").val("TIPTON"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("93272"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "FRANK SOUZA DAIRY"; 
if (x==a1) { 
$("#element_4").val("4721"); 
$("#element_6_1").val("16185 S. EUCLID AVENUE"); 
$("#element_6_3").val("CHINO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91710"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "CHARLIE TADEMA CATTLE CO."; 
if (x==a1) { 
$("#element_4").val("4985"); 
$("#element_6_1").val("7145 EDISON AVENUE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MICHEL MINABERRY DAIRY"; 
if (x==a1) { 
$("#element_4").val("4991"); 
$("#element_6_1").val("8920 MERRILL AVE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "WESTWAY FEED PRODUCTS LLC / CA"; 
if (x==a1) { 
$("#element_4").val("5454"); 
$("#element_6_1").val("ATTENTION: ACCTS PAYABLE"); 
$("#element_6_3").val("FRESNO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("93722"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SAM SOUSA DAIRY"; 
if (x==a1) { 
$("#element_4").val("5458"); 
$("#element_6_1").val("7330 EDISON AVENUE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "JAQUES DAIRY/CHINO"; 
if (x==a1) { 
$("#element_4").val("5614"); 
$("#element_6_1").val("8710 PINE AVENUE"); 
$("#element_6_3").val("CHINO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91708"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ARROYO DAIRY"; 
if (x==a1) { 
$("#element_4").val("5644"); 
$("#element_6_1").val("3894 E. HOBSON"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "TULS DAIRY"; 
if (x==a1) { 
$("#element_4").val("15829"); 
$("#element_6_1").val("1120 N. WASHINGTON"); 
$("#element_6_3").val("LIBERAL"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67901"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "OASIS DAIRY FARMS INC."; 
if (x==a1) { 
$("#element_4").val("5645"); 
$("#element_6_1").val("4164 OASIS DRIVE"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "OASIS DAIRY FARMS INC. (LAGOON/DESLUDGE)"; 
if (x==a1) { 
$("#element_4").val("5978"); 
$("#element_6_1").val("4164 OASIS DRIVE"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DE GROOT DAIRY"; 
if (x==a1) { 
$("#element_4").val("5647"); 
$("#element_6_1").val("3715 LOVERS LANE"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "NATURE'S DAIRY"; 
if (x==a1) { 
$("#element_4").val("5648"); 
$("#element_6_1").val("P.O. BOX 5820"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88202"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "QUESO GRANDE DAIRY"; 
if (x==a1) { 
$("#element_4").val("5649"); 
$("#element_6_1").val("P.O. BOX 250"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SOUTHERN SKIES DAIRY"; 
if (x==a1) { 
$("#element_4").val("5650"); 
$("#element_6_1").val("3892 E. HOBSON"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BREEDYK DAIRY"; 
if (x==a1) { 
$("#element_4").val("5652"); 
$("#element_6_1").val("7150 VINEYARD"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "CHEYENNE DAIRY"; 
if (x==a1) { 
$("#element_4").val("5654"); 
$("#element_6_1").val("185 EAST CALUSA RD."); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "CHEYENNE #3"; 
if (x==a1) { 
$("#element_4").val("5654"); 
$("#element_6_1").val("185 EAST CALUSA RD."); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ROCKHILL DAIRY"; 
if (x==a1) { 
$("#element_4").val("5657"); 
$("#element_6_1").val("4 Sierra Blanca Circle"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "EPICENTER"; 
if (x==a1) { 
$("#element_4").val("5657"); 
$("#element_6_1").val("4 Sierra Blanca Circle"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}



var a1 = "SHAWNEE DAIRY"; 
if (x==a1) { 
$("#element_4").val("5658"); 
$("#element_6_1").val("P.O. BOX 220"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "COTTONWOOD SPRINGS DAIRY LLC"; 
if (x==a1) { 
$("#element_4").val("5659"); 
$("#element_6_1").val("491 WEST FUNK ROAD"); 
$("#element_6_3").val("LAKE ARTHUR"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88253"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "WAYNE E. PALLA DAIRY"; 
if (x==a1) { 
$("#element_4").val("5665"); 
$("#element_6_1").val("902 COLONIAL PARKWAY"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "CROSSWINDS DAIRY/NM"; 
if (x==a1) { 
$("#element_4").val("5667"); 
$("#element_6_1").val("795 NM 202"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "W DIAMOND DAIRY"; 
if (x==a1) { 
$("#element_4").val("5672"); 
$("#element_6_1").val("P.O. BOX  149"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "LAND O' LAKES A/P DEPT"; 
if (x==a1) { 
$("#element_4").val("5673"); 
$("#element_6_1").val("P.O. BOX 64102"); 
$("#element_6_3").val("ST. PAUL"); 
$("#element_6_4").val("MN"); 
$("#element_6_5").val("55164"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "T J DAIRY"; 
if (x==a1) { 
$("#element_4").val("5674"); 
$("#element_6_1").val("T FIGEROA, J SAPP, G GREATHOUS"); 
$("#element_6_3").val("AMHERST"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79312"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "JIM GRAY LIVESTOCK"; 
if (x==a1) { 
$("#element_4").val("5676"); 
$("#element_6_1").val("P.O. BOX 616"); 
$("#element_6_3").val("PLAINS"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79355"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "WESTWAY FEED PRODUCTS LLC"; 
if (x==a1) { 
$("#element_4").val("5681"); 
$("#element_6_1").val("ATTN:ACCTS PAYABLE"); 
$("#element_6_3").val("TOMBALL"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("77377"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "GOFF DAIRY"; 
if (x==a1) { 
$("#element_4").val("5682"); 
$("#element_6_1").val("11015 N. GOFF PLACE"); 
$("#element_6_3").val("HOBBS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88242"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "WALTERSCHEID HOLSTEINS"; 
if (x==a1) { 
$("#element_4").val("5686"); 
$("#element_6_1").val("3226 TIDWELL"); 
$("#element_6_3").val("CARLSBAD"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88220"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DE MAIO FEEDLOT"; 
if (x==a1) { 
$("#element_4").val("5688"); 
$("#element_6_1").val("1198 C R T"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "PRAIRIE VIEW"; 
if (x==a1) { 
$("#element_4").val("5689"); 
$("#element_6_1").val("513 CR 123"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BEETSTRA FAMILY DAIRY"; 
if (x==a1) { 
$("#element_4").val("5697"); 
$("#element_6_1").val("8313 DAIRY STREET"); 
$("#element_6_3").val("HOBBS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88240"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "S A S DAIRY"; 
if (x==a1) { 
$("#element_4").val("5700"); 
$("#element_6_1").val("506 STATE ROAD 467"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "STRUIKMANS DAIRY"; 
if (x==a1) { 
$("#element_4").val("5717"); 
$("#element_6_1").val("6530 ENCINA ST"); 
$("#element_6_3").val("CHINO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91710"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "LEPRINO FOODS"; 
if (x==a1) { 
$("#element_4").val("5747"); 
$("#element_6_1").val("ATTN: CORINA SALAS"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MAJESTIC #2"; 
if (x==a1) { 
$("#element_4").val("5752"); 
$("#element_6_1").val("NICK STRUIKMAN"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "DO-RENE DAIRY"; 
if (x==a1) { 
$("#element_4").val("5788"); 
$("#element_6_1").val("1461 CR. 6"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BONESTROO & SONS II"; 
if (x==a1) { 
$("#element_4").val("5791"); 
$("#element_6_1").val("326 B. N.M. HWY 467"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "COOPER LEGACY DAIRY"; 
if (x==a1) { 
$("#element_4").val("5794"); 
$("#element_6_1").val("663 N. ROOSEVELT RD 3"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "JAMES IDSINGA DAIRY"; 
if (x==a1) { 
$("#element_4").val("5795"); 
$("#element_6_1").val("2116 EAST THIRD STREET"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "HERITAGE DAIRY-NEW MEXICO"; 
if (x==a1) { 
$("#element_4").val("5800"); 
$("#element_6_1").val("650 CRF"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MILKY WAY DAIRY LLC"; 
if (x==a1) { 
$("#element_4").val("5803"); 
$("#element_6_1").val("3700 LOVERS LANE"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "VISTA GRANDE DAIRY"; 
if (x==a1) { 
$("#element_4").val("5804"); 
$("#element_6_1").val("1505 CO. ROAD Y"); 
$("#element_6_3").val("PLAINVIEW"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79072"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "EL DORADO DAIRY"; 
if (x==a1) { 
$("#element_4").val("5806"); 
$("#element_6_1").val("1331 COUNTY ROAD 6"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "DAY-STAR DAIRY"; 
if (x==a1) { 
$("#element_4").val("5809"); 
$("#element_6_1").val("1369 CR 7"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "RIDGECREST DAIRY"; 
if (x==a1) { 
$("#element_4").val("5814"); 
$("#element_6_1").val("1899 CRE"); 
$("#element_6_3").val("TEXICO"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88135"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "FLATLAND FEEDS"; 
if (x==a1) { 
$("#element_4").val("5868"); 
$("#element_6_1").val("975 C R H"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "HEARTLAND LIVESTOCK"; 
if (x==a1) { 
$("#element_4").val("5880"); 
$("#element_6_1").val("P.O. BOX 635"); 
$("#element_6_3").val("DIMMITT"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79027"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "CALVA PRODUCTS INCORPORATED"; 
if (x==a1) { 
$("#element_4").val("5998"); 
$("#element_6_1").val("P.O. BOX 126"); 
$("#element_6_3").val("ACAMPO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("95220"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BOS DAIRY"; 
if (x==a1) { 
$("#element_4").val("6098"); 
$("#element_6_1").val("303 STATE HWY 83"); 
$("#element_6_3").val("LOVINGTON"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88260"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MIDWAY DAIRY"; 
if (x==a1) { 
$("#element_4").val("6103"); 
$("#element_6_1").val("43241 U.S. 70"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DEXTER DAIRY"; 
if (x==a1) { 
$("#element_4").val("6167"); 
$("#element_6_1").val("4 Sierra Blanca Circle"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "CREEKSIDE"; 
if (x==a1) { 
$("#element_4").val("6168"); 
$("#element_6_1").val("304 OJIBWA"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "CREEKSIDE HEIFER"; 
if (x==a1) { 
$("#element_4").val("6168"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}



var a1 = "SUNRISE FARMS"; 
if (x==a1) { 
$("#element_4").val("6175"); 
$("#element_6_1").val("P.O. BOX 159"); 
$("#element_6_3").val("NAZARETH"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79063"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MESMAN DAIRY FARM"; 
if (x==a1) { 
$("#element_4").val("6330"); 
$("#element_6_1").val("546 CR 7"); 
$("#element_6_3").val("FARWELL"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79325"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "FRISIA WEST, LLC. **BK-11**"; 
if (x==a1) { 
$("#element_4").val("6433"); 
$("#element_6_1").val("10555 CR 44"); 
$("#element_6_3").val("HARTLEY"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79044"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "FOX DAIRY, LTD."; 
if (x==a1) { 
$("#element_4").val("6463"); 
$("#element_6_1").val("1241 W. US HIGHWAY 70"); 
$("#element_6_3").val("PLAINVIEW"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79072-0743"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "CONTECH CONSTRUCTION/PA"; 
if (x==a1) { 
$("#element_4").val("6493"); 
$("#element_6_1").val("600 N. WASHINGTON ST."); 
$("#element_6_3").val("GREEN CASTLE"); 
$("#element_6_4").val("PA"); 
$("#element_6_5").val("17225"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DAIRICONCEPTS,L.P."; 
if (x==a1) { 
$("#element_4").val("6505"); 
$("#element_6_1").val("ATTN: ACCOUNTS PAYABLE"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BENDORA DAIRY, LLC."; 
if (x==a1) { 
$("#element_4").val("6509"); 
$("#element_6_1").val("1551 US HIGHWAY 385"); 
$("#element_6_3").val("AMHURST"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79312"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "EVERGREEN FARMS"; 
if (x==a1) { 
$("#element_4").val("6593"); 
$("#element_6_1").val("2765 FM 303"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "T&K DAIRY"; 
if (x==a1) { 
$("#element_4").val("6629"); 
$("#element_6_1").val("3300 CR 461"); 
$("#element_6_3").val("SNYDER"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79549"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MANNA DAIRY"; 
if (x==a1) { 
$("#element_4").val("6651"); 
$("#element_6_1").val("9928 EDISON AVE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91762"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SWAGER RANCH"; 
if (x==a1) { 
$("#element_4").val("6652"); 
$("#element_6_1").val("1152 S. ROSEVELT RD. 10"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "LEGACY FARMS, LP"; 
if (x==a1) { 
$("#element_4").val("6744"); 
$("#element_6_1").val("P.O. BOX 1659"); 
$("#element_6_3").val("PLAINVIEW"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79073"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "RED ROCK DAIRY"; 
if (x==a1) { 
$("#element_4").val("6755"); 
$("#element_6_1").val("P.O. BOX 728"); 
$("#element_6_3").val("AMHERST"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79312"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "LAZBUDDIE FEEDERS, LTD"; 
if (x==a1) { 
$("#element_4").val("6799"); 
$("#element_6_1").val("P.O.BOX 38"); 
$("#element_6_3").val("LAZBUDDIE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79053-0038"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "WESTERN STAR DAIRY"; 
if (x==a1) { 
$("#element_4").val("6802"); 
$("#element_6_1").val("1369 CR7"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "WESTWAY FEED PROD LLC/HEREFORD"; 
if (x==a1) { 
$("#element_4").val("6914"); 
$("#element_6_1").val("PO BOX 2028"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "THREE AMIGOS DAIRY"; 
if (x==a1) { 
$("#element_4").val("6930"); 
$("#element_6_1").val("357 E. DARBY ROAD"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "WHITE RIVER RANCH"; 
if (x==a1) { 
$("#element_4").val("7080"); 
$("#element_6_1").val("2702 COUNTY RD 519"); 
$("#element_6_3").val("HART"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79043"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ROCKY TOP DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("7081"); 
$("#element_6_1").val("9800 W. GOFF RD"); 
$("#element_6_3").val("HOBBS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88242"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "ELVISTO DAIRY #2"; 
if (x==a1) { 
$("#element_4").val("7132"); 
$("#element_6_1").val("304 OJBWA"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SD FARMS"; 
if (x==a1) { 
$("#element_4").val("7172"); 
$("#element_6_1").val("P.O. BOX 510"); 
$("#element_6_3").val("BOVINA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79009"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "JT CATTLE CO."; 
if (x==a1) { 
$("#element_4").val("7189"); 
$("#element_6_1").val("1457 W. HWY 2013"); 
$("#element_6_3").val("FRIONA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79035"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "TRACK DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("7385"); 
$("#element_6_1").val("AIRPORT RD & US 84"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "COCHRAN COUNTY FEEDYARD"; 
if (x==a1) { 
$("#element_4").val("7400"); 
$("#element_6_1").val("2205 CR 110"); 
$("#element_6_3").val("MORTON"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79346"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "G H DAIRY"; 
if (x==a1) { 
$("#element_4").val("7406"); 
$("#element_6_1").val("2505 S. INDUSTRIAL AVENUE"); 
$("#element_6_3").val("YUMA"); 
$("#element_6_4").val("AZ"); 
$("#element_6_5").val("83364"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "IWP PORTALES STORAGE"; 
if (x==a1) { 
$("#element_4").val(""); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "IWP ABENGOA STORAGE"; 
if (x==a1) { 
$("#element_4").val(""); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "IWP HUGOTON STORAGE"; 
if (x==a1) { 
$("#element_4").val(""); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "LYLE FRAZE STORAGE"; 
if (x==a1) { 
$("#element_4").val(""); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "IWP ROSWELL STORAGE"; 
if (x==a1) { 
$("#element_4").val(""); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "IWP TEXICO STORAGE"; 
if (x==a1) { 
$("#element_4").val(""); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "ENTER NEW CUSTOMER"; 
if (x==a1) { 
$("#element_4").val(""); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}
var a1 = "CAPROCK DAIRY"; 
if (x==a1) { 
$("#element_4").val("7454"); 
$("#element_6_1").val("160 COUNTY ROAD 50"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "HIGH PLAINS DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("7464"); 
$("#element_6_1").val("1013 SRR 8"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "UNITED DAIRYMEN OF ARIZONA"; 
if (x==a1) { 
$("#element_4").val("7508"); 
$("#element_6_1").val("P.O. BOX 26877"); 
$("#element_6_3").val("TEMPE"); 
$("#element_6_4").val("AZ"); 
$("#element_6_5").val("85285-6877"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MILKY WAY DAIRY / TX"; 
if (x==a1) { 
$("#element_4").val("7565"); 
$("#element_6_1").val("5155 FM 1057"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "DEXTER (LAGOON/DESLUDGE)"; 
if (x==a1) { 
$("#element_4").val("6167"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "ROCKHILL (LAGOON/DESLUDGE)"; 
if (x==a1) { 
$("#element_4").val("5657"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "QUALITY LIQUID FEEDS/CLOVIS"; 
if (x==a1) { 
$("#element_4").val("8336"); 
$("#element_6_1").val("3586 HIGHWAY 23 NORTH"); 
$("#element_6_3").val("DODGEVILLE"); 
$("#element_6_4").val("WI"); 
$("#element_6_5").val("53533"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "HI-PRO (QLF)"; 
if (x==a1) { 
$("#element_4").val("8336"); 
$("#element_6_1").val("3586 HIGHWAY 23 NORTH"); 
$("#element_6_3").val("DODGEVILLE"); 
$("#element_6_4").val("WI"); 
$("#element_6_5").val("53533"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}



var a1 = "CIRCLE T DAIRY / TX"; 
if (x==a1) { 
$("#element_4").val("7714"); 
$("#element_6_1").val("5427 US HWY 385"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "OPPLIGER CATTLE COMPANY"; 
if (x==a1) { 
$("#element_4").val("14749"); 
$("#element_6_1").val("320 S POLK ST #500"); 
$("#element_6_3").val("ARMARILLO"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}






var a1 = "DEMAIO FARM & RANCH, INC."; 
if (x==a1) { 
$("#element_4").val("7725"); 
$("#element_6_1").val("1198 CRT"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DEL RIO DAIRY/TX"; 
if (x==a1) { 
$("#element_4").val("7739"); 
$("#element_6_1").val("1380 HWY 214"); 
$("#element_6_3").val("FRIONA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79035"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ROSWELL CALF RANCH"; 
if (x==a1) { 
$("#element_4").val("7744"); 
$("#element_6_1").val("119 PIER ROAD"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88200"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SEMINOLE GROWERS"; 
if (x==a1) { 
$("#element_4").val("7785"); 
$("#element_6_1").val("11430 LARIAT RD."); 
$("#element_6_3").val("DODGE CITY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67801"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "MESA INGREDIENT"; 
if (x==a1) { 
$("#element_4").val("7878"); 
$("#element_6_1").val("340 CURRY ROAD K"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "STATE LINE FEEDERS"; 
if (x==a1) { 
$("#element_4").val("8076"); 
$("#element_6_1").val("204 FM 2013"); 
$("#element_6_3").val("FRIONA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79035"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "VAN RYN JERSEY"; 
if (x==a1) { 
$("#element_4").val("8221"); 
$("#element_6_1").val("P.O. BOX 428"); 
$("#element_6_3").val("HARTLEY"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79044"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "QUALITY LIQUID FEEDS/HOLLYPLNT"; 
if (x==a1) { 
$("#element_4").val("8336"); 
$("#element_6_1").val("PO BOX 240"); 
$("#element_6_3").val("DODGEVILLE"); 
$("#element_6_4").val("WI"); 
$("#element_6_5").val("53533"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "WESTWAY FEED PROD. / STRATFORD"; 
if (x==a1) { 
$("#element_4").val("8355"); 
$("#element_6_1").val("14015 PARK DRIVE, SUITE 217"); 
$("#element_6_3").val("TOMBALL"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("77377"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "KETZNER FEEDS LLC"; 
if (x==a1) { 
$("#element_4").val("8358"); 
$("#element_6_1").val("BOX 261, 161 CO RD 30"); 
$("#element_6_3").val("BIRD CITY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67731"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ROBIN FARMS"; 
if (x==a1) { 
$("#element_4").val("8470"); 
$("#element_6_1").val("327 COUNTY FARM LANE"); 
$("#element_6_3").val("BROOKHAVEN"); 
$("#element_6_4").val("MS"); 
$("#element_6_5").val("39601"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "NEW TEX FEEDYARD INC."; 
if (x==a1) { 
$("#element_4").val("8486"); 
$("#element_6_1").val("P.O. BOX 195"); 
$("#element_6_3").val("FRIONA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79035"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "F&S LIVESTOCK"; 
if (x==a1) { 
$("#element_4").val("8490"); 
$("#element_6_1").val("350-A CR26"); 
$("#element_6_3").val("TEXICO"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88135"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "HART DAIRY #2"; 
if (x==a1) { 
$("#element_4").val("8491"); 
$("#element_6_1").val("1970 CR 622"); 
$("#element_6_3").val("HART"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79043"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "WEST TEX CATTLE FEEDER"; 
if (x==a1) { 
$("#element_4").val("8512"); 
$("#element_6_1").val("531 CR 153"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BOS DAIRY LLC NORTH"; 
if (x==a1) { 
$("#element_4").val("8513"); 
$("#element_6_1").val("303 STATE HWY 83"); 
$("#element_6_3").val("LOVINGTON"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88260"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "HI PLAINS FEED, LLC"; 
if (x==a1) { 
$("#element_4").val("8531"); 
$("#element_6_1").val("1650 N. SHERLOCK RD"); 
$("#element_6_3").val("GARDEN CITY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67846"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ROUTE 77 DAIRY"; 
if (x==a1) { 
$("#element_4").val("8540"); 
$("#element_6_1").val("45 CO RD. P"); 
$("#element_6_3").val("FARWELL"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79325"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "A-TEX DAIRY"; 
if (x==a1) { 
$("#element_4").val("8573"); 
$("#element_6_1").val("2076 HIGHWAY 86"); 
$("#element_6_3").val("FRIONA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79035"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "KEVIN URBANCZYK"; 
if (x==a1) { 
$("#element_4").val("8586"); 
$("#element_6_1").val("3799 CR 22"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "WILD WEST FARMS"; 
if (x==a1) { 
$("#element_4").val("8587"); 
$("#element_6_1").val("185 EAST CALUSA ROAD"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "HERRING FARMS"; 
if (x==a1) { 
$("#element_4").val("8590"); 
$("#element_6_1").val("680 CR J"); 
$("#element_6_3").val("FRIONA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79035"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "LAKESIDE DAIRY"; 
if (x==a1) { 
$("#element_4").val("8592"); 
$("#element_6_1").val("185 EAST CALUSA RD."); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "PALLA INC"; 
if (x==a1) { 
$("#element_4").val("16099"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}



var a1 = "AURORA ORGANIC DAIRY"; 
if (x==a1) { 
$("#element_4").val("8594"); 
$("#element_6_1").val("1401 WALNUT STREET"); 
$("#element_6_3").val("BOLDER"); 
$("#element_6_4").val("CO"); 
$("#element_6_5").val("80302"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "SCOTT JOHNSON FARM SVC."; 
if (x==a1) { 
$("#element_4").val("8595"); 
$("#element_6_1").val("120 US HWY 84"); 
$("#element_6_3").val("FARWELL"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79325"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "HART DAIRY # 1"; 
if (x==a1) { 
$("#element_4").val("8644"); 
$("#element_6_1").val("1970 COUNTY RD 622"); 
$("#element_6_3").val("HART"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79043"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "ABENGOA BIOENERGY CORP"; 
if (x==a1) { 
$("#element_4").val("8663"); 
$("#element_6_1").val("16150 MAIN CIRCLE DR."); 
$("#element_6_3").val("CHESTERFIELD"); 
$("#element_6_4").val("MO"); 
$("#element_6_5").val("63017"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SD FARMS II"; 
if (x==a1) { 
$("#element_4").val("8763"); 
$("#element_6_1").val("7233 CHINO AVENUE"); 
$("#element_6_3").val("ONTARIO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91761"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "CASWELL CATTLE CO."; 
if (x==a1) { 
$("#element_4").val("8775"); 
$("#element_6_1").val("1611 CR 1229"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DUTCH VALLEY FARMS"; 
if (x==a1) { 
$("#element_4").val("8819"); 
$("#element_6_1").val("1271 SR 288"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "PRESIDIO FARMS LLC"; 
if (x==a1) { 
$("#element_4").val("8838"); 
$("#element_6_1").val("2180 FM 145"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DOUBLE D FARMS"; 
if (x==a1) { 
$("#element_4").val("8849"); 
$("#element_6_1").val("795 NM 202"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "WESLEY RUNYAN"; 
if (x==a1) { 
$("#element_4").val("8953"); 
$("#element_6_1").val("200 MESILLA RD"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88201"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "D&J DAIRY"; 
if (x==a1) { 
$("#element_4").val("8964"); 
$("#element_6_1").val("4770 FM 1057"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "3-H DAIRY PROGRESS SITE"; 
if (x==a1) { 
$("#element_4").val("8973"); 
$("#element_6_1").val("2705 W. AMERICAN BLVD"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "JIM PAT CLAUNCH"; 
if (x==a1) { 
$("#element_4").val("8974"); 
$("#element_6_1").val("1740 ST. HWY 214"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "2 B FARMS"; 
if (x==a1) { 
$("#element_4").val("8989"); 
$("#element_6_1").val("9012 CR 3114"); 
$("#element_6_3").val("SNYDER"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79549"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MCCLAIN FEED YARD"; 
if (x==a1) { 
$("#element_4").val("8995"); 
$("#element_6_1").val("824 MULLINS LANE"); 
$("#element_6_3").val("BENTON"); 
$("#element_6_4").val("KY"); 
$("#element_6_5").val("42025"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "STRAIN RANCH"; 
if (x==a1) { 
$("#element_4").val("8996"); 
$("#element_6_1").val("8200 FM 2835"); 
$("#element_6_3").val("COLORADO CITY"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79512"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "RUSHELL FARMS"; 
if (x==a1) { 
$("#element_4").val("10055"); 
$("#element_6_1").val("P.O. BOX 40"); 
$("#element_6_3").val("WESTBROOK"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79565"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "BLACKRIDGE DAIRY"; 
if (x==a1) { 
$("#element_4").val("10107"); 
$("#element_6_1").val("2456 CR E"); 
$("#element_6_3").val("FRIONA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79035"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "NORTH MULESHOE DAIRY"; 
if (x==a1) { 
$("#element_4").val("10108"); 
$("#element_6_1").val("2705 W. AMERICAN BLVD"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MULESHOE FEEDERS, INC."; 
if (x==a1) { 
$("#element_4").val("10114"); 
$("#element_6_1").val("1581 FM 788"); 
$("#element_6_3").val("KRESS"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79052"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "PLAINVIEW FEEDERS II, INC"; 
if (x==a1) { 
$("#element_4").val("10175"); 
$("#element_6_1").val("1581 FM 788"); 
$("#element_6_3").val("KRESS"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79052"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "INTERNATIONAL INGREDIENT CORP."; 
if (x==a1) { 
$("#element_4").val("10371"); 
$("#element_6_1").val("150 LARKIN WILLIAMS INDUSTRIAL"); 
$("#element_6_3").val("FENTON"); 
$("#element_6_4").val("MO"); 
$("#element_6_5").val("63026"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "GRANDE VIDA DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("10458"); 
$("#element_6_1").val("42547 US 20"); 
$("#element_6_3").val("PORTALES"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88130"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "OPPORTUNITY DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("10486"); 
$("#element_6_1").val("1369 CR 7"); 
$("#element_6_3").val("CLOVIS"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88101"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}





var a1 = "MISSION DAIRY"; 
if (x==a1) { 
$("#element_4").val("10505"); 
$("#element_6_1").val("3850 COUNTY ROAD 21"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "CROSS COUNTRY DAIRY"; 
if (x==a1) { 
$("#element_4").val("10525"); 
$("#element_6_1").val("2157 S R 108"); 
$("#element_6_3").val("TEXICO"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88135"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "LARIOT DAIRY, INC"; 
if (x==a1) { 
$("#element_4").val("10611"); 
$("#element_6_1").val("P.O. BOX 1036"); 
$("#element_6_3").val("FARWELL"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79325"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "NORTH STAR DAIRY"; 
if (x==a1) { 
$("#element_4").val("10650"); 
$("#element_6_1").val("295 HWY 385"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BAILEY COUNTY FEEDER"; 
if (x==a1) { 
$("#element_4").val("10763"); 
$("#element_6_1").val("P.O. BOX 107"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "SPRINGLAKE DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("10846"); 
$("#element_6_1").val("2705 W AMERICAN BLVD"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "WOODCREST DAIRY / NM"; 
if (x==a1) { 
$("#element_4").val("10871"); 
$("#element_6_1").val("3105 SCHOOL RD"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SIDELINE DAIRY, LLC."; 
if (x==a1) { 
$("#element_4").val("10878"); 
$("#element_6_1").val("185 E. CALUSA RD"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "TODD & HONEY POLING"; 
if (x==a1) { 
$("#element_4").val("10960"); 
$("#element_6_1").val("996 DORSEY RD"); 
$("#element_6_3").val("CLAYTON"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88415"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "TIM FOOTE CATTLE"; 
if (x==a1) { 
$("#element_4").val("10984"); 
$("#element_6_1").val("2340 SR 108"); 
$("#element_6_3").val("TEXICO"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88135"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "OUTLOOK DAIRY"; 
if (x==a1) { 
$("#element_4").val("10997"); 
$("#element_6_1").val("303 STATE HWY 83"); 
$("#element_6_3").val("LOVINGTON"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88260"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BOVINA DAIRY"; 
if (x==a1) { 
$("#element_4").val("11058"); 
$("#element_6_1").val("2705 W. AMERICAN BLVD"); 
$("#element_6_3").val("MULESHOE"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79347"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MISC CASH SALE / NM"; 
if (x==a1) { 
$("#element_4").val("11351"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "MISC CASH SALE / TEXAS"; 
if (x==a1) { 
$("#element_4").val("11352"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MISC CASH SALE / OK"; 
if (x==a1) { 
$("#element_4").val("11436"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "PREMIER ALFALFA"; 
if (x==a1) { 
$("#element_4").val("15589"); 
$("#element_6_1").val("PO BOX 518"); 
$("#element_6_3").val("HUGOTON"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67951"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "KEITH WATSON"; 
if (x==a1) { 
$("#element_4").val("11508"); 
$("#element_6_1").val("6689 HWY 152"); 
$("#element_6_3").val("DUMAS"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79029"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SPANISH HILLS COUNTRY CLUB"; 
if (x==a1) { 
$("#element_4").val("11525"); 
$("#element_6_1").val("999 CRESTVIEW AVENUE"); 
$("#element_6_3").val("CAMARILLO"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("93010"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "GOLD STAR DAIRY LLC"; 
if (x==a1) { 
$("#element_4").val("11748"); 
$("#element_6_1").val("Gold Star Dairy"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "LOMA VISTA DAIRY"; 
if (x==a1) { 
$("#element_4").val("11757"); 
$("#element_6_1").val("LOMA VISTA DAIRY"); 
$("#element_6_3").val("FORT HANCOCK"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79839"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DAIRY FARMERS OF AMERICA"; 
if (x==a1) { 
$("#element_4").val("11812"); 
$("#element_6_1").val("10220 N. Ambassador Drive"); 
$("#element_6_3").val("KANSAS CITY"); 
$("#element_6_4").val("MO"); 
$("#element_6_5").val("64153"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "STARRY NIGHT DAIRY"; 
if (x==a1) { 
$("#element_4").val("12040"); 
$("#element_6_1").val("304 OJIBWA"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "RIVER VALLEY DAIRY,LLC"; 
if (x==a1) { 
$("#element_4").val("12183"); 
$("#element_6_1").val("P.O BOX 1929"); 
$("#element_6_3").val("ANTHONY"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88021"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "DAIRYLAND CATTLE CO."; 
if (x==a1) { 
$("#element_4").val("12370"); 
$("#element_6_1").val("HWY 543 MILE 33"); 
$("#element_6_3").val("GUYMAN"); 
$("#element_6_4").val("OK"); 
$("#element_6_5").val("73942"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "CIRCLE BAR HEIFER RANCH"; 
if (x==a1) { 
$("#element_4").val("12573"); 
$("#element_6_1").val("842 60TH ROAD"); 
$("#element_6_3").val("SATANTA"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67870"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "SYRACUSE DAIRY"; 
if (x==a1) { 
$("#element_4").val("12580"); 
$("#element_6_1").val("751 SE CR 36"); 
$("#element_6_3").val("SYRACUSE DAIRY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67878"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "FLOYD - SYRACUSE DAIRY"; 
if (x==a1) { 
$("#element_4").val("12580"); 
$("#element_6_1").val("751 SE CR 36"); 
$("#element_6_3").val("SYRACUSE DAIRY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67878"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "MORTON COUNTY - SYRACUSE DAIRY"; 
if (x==a1) { 
$("#element_4").val("12580"); 
$("#element_6_1").val("751 SE CR 36"); 
$("#element_6_3").val("SYRACUSE DAIRY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67878"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "TIMELINE DAIRY"; 
if (x==a1) { 
$("#element_4").val("12580"); 
$("#element_6_1").val("751 SE CR 36"); 
$("#element_6_3").val("SYRACUSE DAIRY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67878"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "WESTSIDE DAIRY"; 
if (x==a1) { 
$("#element_4").val("12580"); 
$("#element_6_1").val("751 SE CR 36"); 
$("#element_6_3").val("SYRACUSE DAIRY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67878"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "WEBBER DAIRY"; 
if (x==a1) { 
$("#element_4").val("12580"); 
$("#element_6_1").val("751 SE CR 36"); 
$("#element_6_3").val("SYRACUSE DAIRY"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67878"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "MISC CASH SALES / KANSAS"; 
if (x==a1) { 
$("#element_4").val("12627"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "MASCOW DAIRY"; 
if (x==a1) { 
$("#element_4").val("12649"); 
$("#element_6_1").val("1699 ROAD 20"); 
$("#element_6_3").val("MOSCOW"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67952"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "WAGONBED DAIRY"; 
if (x==a1) { 
$("#element_4").val("12649"); 
$("#element_6_1").val("1699 ROAD 20"); 
$("#element_6_3").val("MOSCOW"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67952"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}



var a1 = "MACO IMPORT & EXPORT, INC"; 
if (x==a1) { 
$("#element_4").val("12880"); 
$("#element_6_1").val("1820 S. RRESERVOIR ST"); 
$("#element_6_3").val("POMONA"); 
$("#element_6_4").val("CA"); 
$("#element_6_5").val("91766"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "RUMA-LIC ANIMAL PRODUCTS"; 
if (x==a1) { 
$("#element_4").val("13623"); 
$("#element_6_1").val("802 Mill St"); 
$("#element_6_3").val("ALVA"); 
$("#element_6_4").val("OK"); 
$("#element_6_5").val("73717"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "P7, LLC"; 
if (x==a1) { 
$("#element_4").val("13944"); 
$("#element_6_1").val("3832 E HOBSON"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "HIGH PLAINS RANCH, LLC"; 
if (x==a1) { 
$("#element_4").val("13958"); 
$("#element_6_1").val("12225 E. HWY 160"); 
$("#element_6_3").val("SATANTA"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67870"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "BAR G RANCH, LLC"; 
if (x==a1) { 
$("#element_4").val("13974"); 
$("#element_6_1").val("951 ROAD 13"); 
$("#element_6_3").val("HUGOTON"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67951"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "PRO AM"; 
if (x==a1) { 
$("#element_4").val("13974"); 
$("#element_6_1").val("951 ROAD 13"); 
$("#element_6_3").val("HUGOTON"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67951"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "DEERFIELD DAIRY, LLC"; 
if (x==a1) { 
$("#element_4").val("14023"); 
$("#element_6_1").val("2401 ROAD X"); 
$("#element_6_3").val("DEERFIELD"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67838"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}








var a1 = "DIMMIT VET CLINIC"; 
if (x==a1) { 
$("#element_4").val("14419"); 
$("#element_6_1").val("PO BOX 926"); 
$("#element_6_3").val("DIMMIT"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79029"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "WESTWAY FEED PROD LLC/CLOVIS"; 
if (x==a1) { 
$("#element_4").val("14426"); 
$("#element_6_1").val("PO BOX 2028"); 
$("#element_6_3").val("HEEFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "HARKINS CATTLE"; 
if (x==a1) { 
$("#element_4").val("14483"); 
$("#element_6_1").val("750 COUNTY RD 510"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}




var a1 = "CJM FARMS"; 
if (x==a1) { 
$("#element_4").val("14484"); 
$("#element_6_1").val("3402 FM 1412"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "WESTSIDE DAIRY TEXAS"; 
if (x==a1) { 
$("#element_4").val("15555"); 
$("#element_6_1").val("1061 FM 303"); 
$("#element_6_3").val("Brownford"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79316"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}







var a1 = "JESKO CAPROCK RANCH"; 
if (x==a1) { 
$("#element_4").val("14497"); 
$("#element_6_1").val("2886 FM 1058"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79045"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "CORRALES DAIRY"; 
if (x==a1) { 
$("#element_4").val("15433"); 
$("#element_6_1").val("3632 HOBSON RD"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "CAL-STAR DAIRY"; 
if (x==a1) { 
$("#element_4").val("15551"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "FB LARIAT DAIRY"; 
if (x==a1) { 
$("#element_4").val("15579"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "LAS UVAS VALLEY DAIRY"; 
if (x==a1) { 
$("#element_4").val("15558"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "NORTHFORK FEEDYARD"; 
if (x==a1) { 
$("#element_4").val("16199"); 
$("#element_6_1").val("2325 CLUCK RD"); 
$("#element_6_3").val("HART"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79043"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "MATHEWS DAIRY"; 
if (x==a1) { 
$("#element_4").val("15492"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}



var a1 = "PAR 5"; 
if (x==a1) { 
$("#element_4").val("16197"); 
$("#element_6_1").val("6839 OLD CHISUM TRL"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "N&N DAIRY"; 
if (x==a1) { 
$("#element_4").val("15096"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "SOUTHFORK DAIRY"; 
if (x==a1) { 
$("#element_4").val("15556"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "HAAKMA & SONS DAIRY"; 
if (x==a1) { 
$("#element_4").val("14556"); 
$("#element_6_1").val("P.O. BOX 664"); 
$("#element_6_3").val("FARWELL"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79325"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "ADELANIE FARMS"; 
if (x==a1) { 
$("#element_4").val("16108"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "LAMESA DELINTING"; 
if (x==a1) { 
$("#element_4").val("16145"); 
$("#element_6_1").val("210 CHICAGO DRIVE"); 
$("#element_6_3").val("LAMESA"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("79331"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "CNOSSEN DAIRY"; 
if (x==a1) { 
$("#element_4").val("15018"); 
$("#element_6_1").val("5155 Country RD EE"); 
$("#element_6_3").val("HEREFORD"); 
$("#element_6_4").val("TX"); 
$("#element_6_5").val("790485"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "WKP COMPOST"; 
if (x==a1) { 
$("#element_4").val("15105"); 
$("#element_6_1").val("P.O. BOX 548"); 
$("#element_6_3").val("BOISE CITY"); 
$("#element_6_4").val("OK"); 
$("#element_6_5").val("79333"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "CORY MARSH"; 
if (x==a1) { 
$("#element_4").val("14557"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "ROCKING HEIFER"; 
if (x==a1) { 
$("#element_4").val("14802"); 
$("#element_6_1").val("439 E. ROAD 4"); 
$("#element_6_3").val("ULYSSES"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67880"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "ARROYO DESLUDGE/LAGOON"; 
if (x==a1) { 
$("#element_4").val("5644"); 
$("#element_6_1").val("6402 PRICE'S LN"); 
$("#element_6_3").val("DEXTER"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88230"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}


var a1 = "KOLB MEYER"; 
if (x==a1) { 
$("#element_4").val("15812"); 
$("#element_6_1").val("3894 E HOBSON"); 
$("#element_6_3").val("ROSWELL"); 
$("#element_6_4").val("NM"); 
$("#element_6_5").val("88203"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}



var a1 = "ROCKING HEIFER - JOHNSON"; 
if (x==a1) { 
$("#element_4").val("14802"); 
$("#element_6_1").val("439 E. ROAD 4"); 
$("#element_6_3").val("ULYSSES"); 
$("#element_6_4").val("KS"); 
$("#element_6_5").val("67880"); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "CASH MISC SALES / CORONA"; 
if (x==a1) { 
$("#element_4").val("70009"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}

var a1 = "DIAMOND CATTLE FEEDERS"; 
if (x==a1) { 
$("#element_4").val("16207"); 
$("#element_6_1").val(""); 
$("#element_6_3").val(""); 
$("#element_6_4").val(""); 
$("#element_6_5").val(""); 
$("#element_6_6 option:selected").text("United States"); 
} { 
}





        }); 
  }); 

$(document).ready(function () {
      $("#element_49_1").click(function() {
//ORIGIN
var a = $("#element_38").val();
var b = $("#element_28").val();
var c = $("#element_29").val();
var d = $("#element_30").val();
//DESTINATION
var l = $("#element_62").val();
var m = $("#element_9").val();
var n = $("#element_10").val();
var o = $("#element_11").val();
//if origin blank, assume destination info
if (a=="") {
$("#element_38").val($("#element_62").val());
} {
}

if (b=="") {
$("#element_28").val($("#element_9").val());
} {
}

if (c=="") {
$("#element_29").val($("#element_10").val());
} {
}

if (d=="") {
$("#element_30").val($("#element_11").val());
} {
}
//if destination blank, assume origin info
if (l=="") {
$("#element_62").val($("#element_38").val());
} {
}

if (m=="") {
$("#element_9").val($("#element_28").val());
} {
}

if (n=="") {
$("#element_10").val($("#element_29").val());
} {
}

if (o=="") {
$("#element_11").val($("#element_30").val());
} {
}

});
   });

//$(document).ready(function () {
    //  $("#element_49_1").click(function() {

//var x = $("#element_31").val();
//if ($("#element_31_1").prop("checked")) {
//if (x = 1) {
//if (this.checked) {
//if 
//$("#element_60").val("WHY");
 

//} else {
//$("#element_60").val("WHEY");
 

//}
  //   });
  // });



$(document).ready(function () {
      $("#element_49_1").click(function() {

var x = $("#element_65 option:selected").text();

var a1 = "Felipe Carrera";
if (x==a1) {
  $("#element_64").val("16906");
}

var a1 = "Billy Torres"
if (x==a1) {
	$("#element_64").val("16906");
}




var a1 = "Dwaine Hamm"
if (x==a1) {
	$("#element_64").val("16809");
}


var a1 = "Norma Bowers"
if (x==a1) {
	$("#element_64").val("16767");
}

var a1 = "Joel Torres"
if (x==a1) {
	$("#element_64").val("16723");
}


var a1 = "Richard D Craft"
if (x==a1) {
	$("#element_64").val("16669");
}

var a1 = "Robert Rickard"
if (x==a1) {
    $("#element_64").val("16479");
}
 
var a1 = "R Marley, LLC"
if (x==a1) {
    $("#element_64").val("16593");
}


var a1 = "Rene Chavez"
if (x==a1) {
    $("#element_64").val("16426");
}


var a1 = "TLM Express Inc"
if (x==a1) {
    $("#element_64").val("6734");
}

var a1 = "Antonio Trujillo"
if (x==a1) {
 $("#element_64").val("14325");
} 

{
}
var a1 = "Brian Kirkpatrick"
if (x==a1) {
$("#element_64").val("11117");
 
}{
}

var a1 = "OVERTORK, LLC"
if (x==a1) {
$("#element_64").val("15683");
 
}{
}

var a1 = "Mario Morales"
if (x==a1) {
$("#element_64").val("16684");
 
}{
}

var a1 = "Jose Tejeda"
if (x==a1) {
$("#element_64").val("15379");
 
}{
}


var a1 = "Thomas Chavez"
if (x==a1) {
$("#element_64").val("15100");
 
}{
}

var a1 = "Kenner Carrasco"
if (x==a1) {
$("#element_64").val("15095");
 
}{
}

var a1 = "Casey Leroy Plowman"
if (x==a1) {
$("#element_64").val("12599");
 
}{
}

var a1 = "Anton Gaustad"
if (x==a1) {
$("#element_64").val("16191");
 
}{
}

var a1 = "Anton Gaustad"
if (x==a1) {
$("#element_64").val("16203");
 
}{
}

var a1 = "Rogelio Hernandez"
if (x==a1) {
$("#element_64").val("16163");
 
}{
}

var a1 = "Gerardo Zaragoza"
if (x==a1) {
$("#element_64").val("13685");
 
}{
}

var a1 = "Daniel Solis"
if (x==a1) {
$("#element_64").val("14965");
 
}{
}

var a1 = "Harvey Dale Barker"
if (x==a1) {
$("#element_64").val("6806");
 
}{
}

var a1 = "Kirk Switzer"
if (x==a1) {
$("#element_64").val("7257");
 
}{
}

var a1 = "Lee Reynolds"
if (x==a1) {
$("#element_64").val("14136");
 
}{
}

var a1 = "Les Danley"
if (x==a1) {
$("#element_64").val("6387");
 
}{
}

var a1 = "Michael Love"
if (x==a1) {
$("#element_64").val("16203");
 
}{
}


var a1 = "Jeremy O'Neal"
if (x==a1) {
$("#element_64").val("8382");
 
}{
}


var a1 = "Kenner Carrasco"
if (x==a1) {
$("#element_64").val("15095");
 
}{
}


var a1 = "Loren Schmidth"
if (x==a1) {
$("#element_64").val("15753");
 
}{
}

var a1 = "Clay Dannelley"
if (x==a1) {
$("#element_64").val("14294");
 
}{
}

var a1 = "Ray McFall"
if (x==a1) {
$("#element_64").val("14158");
 
}{
}

var a1 = "Rocky Hargrove"
if (x==a1) {
$("#element_64").val("14369");
 
}{
}
var a1 = "Shawn Klein"
if (x==a1) {
$("#element_64").val("5711");
 
}{
}
var a1 = "Troy Danley"
if (x==a1) {
$("#element_64").val("5887");
 
}{
}

var a1 = "Salim Carrera"
if (x==a1) {
$("#element_64").val("14932");
 
}{
}


var a1 = "BP Trucking"
if (x==a1) {
$("#element_64").val("14415");
 
}{
}

var a1 = "Hiway Express"
if (x==a1) {
$("#element_64").val("15279");
 
}{
}

var a1 = "Dickie Horner"
if (x==a1) {
$("#element_64").val("16038");
 
}{
}

var a1 = "Other Driver"
if (x==a1) {
$("#element_64").val("9000");
 
}{
}
var a1 = "Waltershield"
if (x==a1) {
$("#element_64").val("9000");
 
}{
}

var a1 = "Stacy's Trucking"
if (x==a1) {
$("#element_64").val("15526");
 
}{
}

var a1 = "High Plains"
if (x==a1) {
$("#element_64").val("9000");
 
}{
}
     });
   });


$(document).ready(function () {
      $("#element_49_1").click(function() {
$("#element_68").val("N");
$("#element_69").val("1");
$("#element_70").val("T");
$("#element_71").val("T");
$("#element_72").val("T");
$("#element_74").val("O2097");
});
   });

$(document).ready(function () {
      $("#element_49_1").click(function() {
var a = $("#element_11").val()/2000;
var b = a * $("#element_52").val();
var c = parseFloat(b) * -1;
//var d = c.toFixed(2);

var d = Math.round(c * 100000) / 100000;

//var d = Math.round(c*Math.pow(10,2)/Math.pow(10,2);




//var result = Math.round(d * 100) / 100;

//var result = Math.round(c*100)/100;

//var d = Math.round(c);
//function roundtotwo(c) {
 //    return +(Math.round(c + "e+2") + "e-2");
//}
$("#element_73").val(d);
});
   });

$(document).ready(function () {
     $("#element_49_1").click(function() {
$("#element_84").text($("#entry_id").val());
});
   });


$(document).ready(function () {
      $("#element_49_1").click(function() {
$("#element_87").val($("#element_65 option:selected").text());
});
   });



$(document).ready(function () {
      $("#element_49_1").click(function() {
var x = $("#element_53").val();
if (x > 0) {
$("#element_88").val($("#element_65 option:selected").text());
} else if (x == "") {
$("#element_88").val("");
} {
}
});
   });

$(document).ready(function () {
      $("#element_49_1").click(function() {
var x = $("#element_53").val();
if (x > 0) {
$("#element_89").val("O2099");
} else if (x == "") {
$("#element_88").val("");
} {
}
});
   });







$(document).ready(function () {
      $("#element_49_1").click(function() {

var x = $("#element_25").val();
if ($("#element_25_1").prop("checked")) {
//if (x==1) {
 $("#element_76").val("12476");
$("#element_60").val("WHY");
$("#element_83").val("");
} {
}
if ($("#element_25_2").prop("checked")) {
//if (x==2) {
$("#element_76").val("12053");
$("#element_60").val("WHEY");
$("#element_83").val("");
 
}{
}

if ($("#element_25_3").prop("checked")) {
//if (x==3) {
$("#element_76").val("5640");
$("#element_60").val("WHEY");
$("#element_83").val("");
 
}{
}
if ($("#element_25_4").prop("checked")) {
//if (x==4) {
$("#element_76").val("12089");
$("#element_60").val("WHEY");
$("#element_83").val("");
 
}{
}
if ($("#element_25_14").prop("checked")) {
//if (x==4) {
$("#element_76").val("12089");
$("#element_60").val("WHEY");
$("#element_83").val("");
 
}{
}
//if (x==10) {
if ($("#element_25_10").prop("checked")) {
$("#element_78").val("NABN"); 
$("#element_60").val("WHEY");
$("#element_77").val("WHEY");
}{
}

//if (x==6) {
if ($("#element_25_6").prop("checked")) {
$("#element_78").val("NPORT"); 
$("#element_60").val("WHEY");
$("#element_77").val("WHEY");
}{
}

if ($("#element_25_13").prop("checked")) {
$("#element_78").val("Needs INV code"); 
$("#element_60").val("WHEY");
$("#element_77").val("WHEY");
}{
}

//if (x==5) {
if ($("#element_25_5").prop("checked")) {
$("#element_78").val("NROS"); 
$("#element_60").val("WHEY");
$("#element_77").val("WHEY");
}{
}

//if (x==7) {
if ($("#element_25_7").prop("checked")) {
$("#element_78").val("NKS"); 
$("#element_60").val("WHY");
$("#element_77").val("WHY");
}{
}

//if (x==9) {
if ($("#element_25_9").prop("checked")) {
$("#element_78").val("NTEX"); 
$("#element_60").val("WHEY");
$("#element_77").val("WHEY");
}{
}

//if (x==11) {
if ($("#element_25_11").prop("checked")) {
$("#element_78").val("NKS1"); 
$("#element_60").val("WHY");
$("#element_77").val("WHY");
}{
}

});
   });

$(document).ready(function () {
      $("#element_49_1").click(function() {
var a = $("#element_11").val()/2000;
var b = $("#element_30").val()/2000;
//var c = b.toFixed(2);
var c = Math.round(b * 100000) / 100000;
//var d = a.toFixed(2);
var d = Math.round(a * 100000) / 100000;
$("#element_79").val(c);
$("#element_80").val(d);
});
   });



$(document).ready(function () {
      $("#element_49_1").click(function() {
var a = $("#element_79").val() * $("#element_58").val();
//var b = a.toFixed(2);
var b = Math.round(a * 100000) / 100000;
var c = $("#element_80").val() * $("#element_54").val();
//var d = c.toFixed(2);
var d = Math.round(c * 100000) / 100000;
$("#element_81").val(b);
$("#element_82").val(d);
});
   });

$(document).ready(function () {
      $("#element_49_1").click(function() {

var x = $("#element_3 option:selected").text();
var a1 = "IWP ABENGOA STORAGE"
if (x==a1) {
 $("#element_77").val("WHEY");
 $("#element_78").val("NABN");
} {
}

var a1 = "IWP PORTALES STORAGE"
if (x==a1) {
 $("#element_77").val("WHEY");
 $("#element_78").val("NPORT");
} {
}

var a1 = "IWP ROSWELL STORAGE"
if (x==a1) {
 $("#element_77").val("WHEY");
 $("#element_78").val("NROS");
} {
}

var a1 = "IWP HUGOTON STORAGE"
if (x==a1) {
 $("#element_77").val("WHY");
 $("#element_78").val("NKS");
} {
}

var a1 = "IWP TEXICO STORAGE"
if (x==a1) {
 $("#element_77").val("WHEY");
 $("#element_78").val("NTEX");
} {
}

var a1 = "IWP JOHNSON CITY STORAGE"
if (x==a1) {
 $("#element_77").val("WHY");
 $("#element_78").val("NKS1");
} {
}

});
   });
