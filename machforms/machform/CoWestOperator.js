

//Element_3 = Start Running Gallons
//Element_7 = start daily gallons
//element_8 = Start total processed gallons
//This works :D 
/* $(document).ready(function(){
	$('#element_3, #element_6').change(function(){
		$('#element_8').val($('#element_3').val() + $('#element_7').val());
	$('#element_8').prop('readonly', true);
	});
});
 */
 
 //Total Daily Gallons Calculator
$(document).ready(function(){
	$('#element_85_1').click(function(){

alert("Calculations Complete");
var startGal = parseInt($('#element_3').val(),10);
var	endGal = parseInt($('#element_4').val(),10);


//Total Processed Gallons
var dailyTotal = endGal - startGal;

$('#element_8').val(dailyTotal);
});
	});

//RawY Calculator
$(document).ready(function(){
	$('#element_85_1').click(function(){
var ryFrac = parseInt($('#element_68').val(),10);
$('#element_88').val(ryFrac);

var ryGalAvail = Math.round(ryFrac * 21462 / 118);
$('#element_89').val(ryGalAvail);

var ryGalFull = 20000 - ryGalAvail;
$('#element_90').val(ryGalFull);

var ryLoadSpace = Math.round(ryGalAvail / 6000 * 100) / 100;
$('#element_91').val(ryLoadSpace);

var ryLoadFull = Math.round(ryGalFull / 6000 * 100) / 100;
$('#element_92').val(ryLoadFull);
		
});
	});

//FY Calculator
$(document).ready(function(){
	$('#element_85_1').click(function(){
var fyFrac = parseInt($('#element_70').val(),10);
$('#element_93').val(fyFrac);

var fyGalAvail = Math.round(fyFrac * 20000 / 106);
$('#element_94').val(fyGalAvail);

var fyGalFull = 20000 - fyGalAvail;
$('#element_95').val(fyGalFull);

var fyLoadSpace = Math.round(fyGalAvail / 6000 * 100) / 100;
$('#element_96').val(fyLoadSpace);

var fyLoadFull = Math.round(fyGalFull / 6000 * 100) / 100;
$('#element_97').val(fyLoadFull);
$('#element_112').val(fyLoadFull);

});
	});

//FB Calculator
$(document).ready(function(){
	$('#element_85_1').click(function(){
var fbFrac = parseInt($('#element_71').val(),10);
$('#element_100').val(fbFrac);

var fbGalAvail = Math.round(fbFrac * 20000 / 106);
$('#element_101').val(fbGalAvail);

var fbGalFull = 20000 - fbGalAvail;
$('#element_102').val(fbGalFull);

var fbLoadSpace = Math.round(fbGalAvail / 6000 * 100) / 100;
$('#element_103').val(fbLoadSpace);

var fbLoadFull = Math.round(fbGalFull / 6000 * 100) / 100;
$('#element_99').val(fbLoadFull);
$('#element_113').val(fbLoadFull);
});
	});

//Total Calculators
$(document).ready(function(){
	$('#element_85_1').click(function(){
var ryFrac = parseInt($('#element_68').val(),10);
var ryGalAvail = Math.round(ryFrac * 21462 / 118);		

var fbFrac = parseInt($('#element_71').val(),10);	
var fbGalAvail = Math.round(fbFrac * 20000 / 106);

var ryGalFull = 20000 - ryGalAvail;
var fbGalFull = 20000 - fbGalAvail;
			
var totalGalAvail = ryGalAvail + fbGalAvail;
var totalGalFull = 	ryGalFull + fbGalFull;
var totalLoadSpace = Math.round(totalGalAvail / 6000 * 100) / 100;
var totalLoadFull = Math.round(totalGalFull / 6000 * 100) / 100;

$('#element_106').val(totalGalAvail);
//$('#element_107').val(totalGalFull); //This is no longer needed per Adam
$('#element_108').val(totalLoadSpace);
$('#element_110').val(totalLoadFull);
	});
});

//Victorville and Finish Water Calcuations
$(document).ready(function(){
	$('#element_85_1').click(function(){

var vvInch = parseInt($('#element_39').val(),10);
var finishInch = parseInt($('#element_38').val(),10);
		
$('#element_115').val(vvInch);
$('#element_121').val(finishInch);

var vvGalAvail = Math.round(vvInch * 20000 / 115);
var finishGalAvail = Math.round(finishInch * 20000 /99);

$('#element_116').val(vvGalAvail);
$('#element_122').val(finishGalAvail);

var vvGalFull = 20000 - vvGalAvail;
var finishGalFull = 20000 - finishGalAvail;
			
$('#element_117').val(vvGalFull);
$('#element_123').val(finishGalFull);
		
var vvLoadSpace = Math.round(vvGalAvail / 6000 * 100) / 100;
var finishLoadSpace = Math.round(finishGalAvail / 6000 * 100) / 100;
			
$('#element_118').val(vvLoadSpace);
$('#element_124').val(finishLoadSpace);

var vvLoadFull = Math.round(vvGalFull / 6000 * 100) / 100;
var finishLoadFull = Math.round(finishGalFull / 6000 * 100) / 100;
			
$('#element_119').val(vvLoadFull);
$('#element_125').val(finishLoadFull);
		
var totalGalAvail = vvGalAvail + finishGalAvail;
var totalGalFull = vvGalFull + finishGalFull;
var totalLoadSpace = Math.round(totalGalAvail / 6000 * 100) / 100;
var totalLoadFull = Math.round(totalGalFull / 6000 * 100) / 100;
	
$('#element_127').val(totalGalAvail);
$('#element_128').val(totalGalFull);	
$('#element_129').val(totalLoadSpace);
$('#element_130').val(totalLoadFull);
$('#element_131').val(vvLoadFull);
$('#element_132').val(finishLoadFull);
	});
});

//Sludge Tank Capacity Calculator
$(document).ready(function(){
	$('#element_85_1').click(function(){

var t6 = parseInt($('#element_57').val(),10);
var t7 = parseInt($('#element_58').val(),10);
var t8 = parseInt($('#element_59').val(),10);
var t9 = parseInt($('#element_60').val(),10);		
var t10 = parseInt($('#element_61').val(),10);		
var t11 = parseInt($('#element_62').val(),10);
var t12 = parseInt($('#element_63').val(),10);

//Tank 6
var t6GalSpace = Math.round(t6 * 20000 / 105);
var t6GalFull = 20000 - t6GalSpace;
var t6LoadSpace = Math.round(t6GalSpace / 6000 * 100) / 100;
var t6LoadFull = Math.round(t6GalFull / 6000 * 100) / 100;
$('#element_135').val(t6);
$('#element_136').val(t6GalSpace);
$('#element_137').val(t6GalFull);
$('#element_138').val(t6LoadSpace);	
$('#element_139').val(t6LoadFull);

//Tank 7
var t7GalSpace = Math.round(t7 * 20000 / 115);
var t7GalFull = 20000 - t7GalSpace;
var t7LoadSpace = Math.round(t7GalSpace / 6000 * 100) / 100;
var t7LoadFull = Math.round(t7GalFull / 6000 * 100) / 100;
$('#element_140').val(t7);
$('#element_141').val(t7GalSpace);
$('#element_142').val(t7GalFull);
$('#element_143').val(t7LoadSpace);	
$('#element_144').val(t7LoadFull);

//Tank 8		
var t8GalSpace = Math.round(t8 * 20000 / 105);
var t8GalFull = 20000 - t8GalSpace;
var t8LoadSpace = Math.round(t8GalSpace / 6000 * 100) / 100;
var t8LoadFull = Math.round(t8GalFull / 6000 * 100) / 100;
$('#element_145').val(t8);
$('#element_146').val(t8GalSpace);
$('#element_147').val(t8GalFull);
$('#element_148').val(t8LoadSpace);	
$('#element_149').val(t8LoadFull);
	
//Tank 9
var t9GalSpace = Math.round(t9 * 20000 / 105);
var t9GalFull = 20000 - t9GalSpace;
var t9LoadSpace = Math.round(t9GalSpace / 6000 * 100) / 100;
var t9LoadFull = Math.round(t9GalFull / 6000 * 100) / 100;
$('#element_150').val(t9);
$('#element_151').val(t9GalSpace);
$('#element_152').val(t9GalFull);
$('#element_153').val(t9LoadSpace);	
$('#element_154').val(t9LoadFull);

//Tank 10
var t10GalSpace = Math.round(t10 * 20000 / 104.5);
var t10GalFull = 20000 - t10GalSpace;
var t10LoadSpace = Math.round(t10GalSpace / 6000 * 100) / 100;
var t10LoadFull = Math.round(t10GalFull / 6000 * 100) / 100;
$('#element_155').val(t10);
$('#element_156').val(t10GalSpace);
$('#element_157').val(t10GalFull);
$('#element_158').val(t10LoadSpace);	
$('#element_159').val(t10LoadFull);

//Tank 11		
var t11GalSpace = Math.round(t11 * 20000 / 114.5);
var t11GalFull = 20000 - t11GalSpace;
var t11LoadSpace = Math.round(t11GalSpace / 6000 * 100) / 100;
var t11LoadFull = Math.round(t11GalFull / 6000 * 100) / 100;
$('#element_160').val(t11);
$('#element_161').val(t11GalSpace);
$('#element_162').val(t11GalFull);
$('#element_163').val(t11LoadSpace);	
$('#element_164').val(t11LoadFull);
		
//Tank 12
var t12GalSpace = Math.round(t12 * 20000 / 104);
var t12GalFull = 20000 - t12GalSpace;
var t12LoadSpace = Math.round(t12GalSpace / 6000 * 100) / 100;
var t12LoadFull = Math.round(t12GalFull / 6000 * 100) / 100;
$('#element_165').val(t12);
$('#element_166').val(t12GalSpace);
$('#element_167').val(t12GalFull);
$('#element_168').val(t12LoadSpace);	
$('#element_169').val(t12LoadFull);
		
//Totals
var totalSpaceAvail = t6GalSpace + t7GalSpace + t8GalSpace + t9GalSpace + t10GalSpace + t11GalSpace + t12GalSpace;
var totalGalFull = t6GalFull + t7GalFull + t8GalFull + t9GalFull + t10GalFull + t11GalFull + t12GalFull;
var totalLoadSpace = t6LoadSpace + t7LoadSpace + t8LoadSpace + t9LoadSpace + t10LoadSpace + t11LoadSpace + t12LoadSpace;
var totalLoadFull = 	Math.round((t6LoadFull + t7LoadFull + t8LoadFull + t9LoadFull + t10LoadFull + t11LoadFull + t12LoadFull) * 100) / 100 ;
var percentageFull =  Math.round(totalGalFull / 14000 * 100) / 1000
var spaceByLoad = Math.round(totalSpaceAvail / 6000 * 100) / 100
			
$('#element_170').val(totalSpaceAvail);
$('#element_171').val(totalGalFull);
$('#element_172').val(totalLoadSpace);
$('#element_173').val(totalLoadFull);	
$('#element_174').val(percentageFull);
$('#element_175').val(spaceByLoad);
	});
});

$(document).ready(function(){
	$('#element_85_1').click(function(){
			
/* 			if ($causticBagBeginShift){
				var causticBagBeginShift = $('#element_183').val();
			} else{
				var causticBagBeginShift = 0;				
			} */
			
			var limeBagEndShift = $('#element_32').val();
			var limeBagStartShift = $('#element_14').val();
			var limeUsed = limeBagStartShift - limeBagEndShift;
			$('#element_184').val(limeUsed);
			//alert(limeUsed);
			
			//Potassium Hydroxide Caustic Bags
			//Maybe need to add total number of bags 
			var causticBagEndShift = $('#element_182').val();
			var causticBagBeginShift = $('#element_183').val();
			
			var causticUsed = causticBagBeginShift - causticBagEndShift;
			$('#element_185').val(causticUsed);
			//alert(causticUsed);
			
			
			
			//3755 Anionic
			

			var anionicStartShift = $('#element_10').val();		
			var anionicEndShift = $('#element_11').val();
			var anionicUsed = Math.round(((anionicEndShift - anionicStartShift) * 7.5) * 100) / 100;
			$('#element_186').val(anionicUsed);			
			//5220 Cationic
			var cationicStartShift = $('#element_12').val();
			var cationicEndShift = $('#element_13').val();
			var cationicUsed = Math.round(((cationicEndShift - cationicStartShift) * 7.5) * 100) / 100;			
			$('#element_187').val(cationicUsed);
			
			
			//End of shift conversions
			//Change 9/10/19 
			var limeConversion = $('#element_32').val();
			var causticConversion = $('#element_182').val();

			
			var anionicDiffNow = 33 - anionicEndShift;
			var cationicDiffNow = 33 - cationicEndShift;
			//alert(anionicConversion);
			
			var anionicConversion = anionicDiffNow * 7.5;
			var cationicConversion = cationicDiffNow * 7.5;
			console.log(anionicConversion);
			console.log(cationicConversion);
			console.log(limeConversion);
			console.log(causticConversion);
			//$('#element_188').val(limeConversion);
			//$('#element_189').val(causticConversion);
			$('#element_190').val(anionicConversion);
			$('#element_191').val(cationicConversion);
			//alert("Did you get here?");
			
	});
});



//Send data to php file

$(document).ready(function(){
	$("#element_85_1").click(function(){
		$.post("operatorEmail.php",
			
			
			//Raw Yellow Grease Gallons
			{ryGalFull: $('#element_90').val(),			
			
			//Need to add Raw Yellow Grease in Heating Tank
			//Need to add to form
			rawYellowGreaseHeatingTank: $('#element_178').val(),
			
			//Finish Yellow Grease Gallons
			fyGalFull: $('#element_95').val(),		

			//Finish Yellow Grease in Pre Loaded Trucks
			//Need to add to form
			//Removed finished yellow grease from preloaded truck
			//finishYellowGreasePreloadedTruck : $('#element_179').val(),

			//Finish Brown Grease Gallons
			fbGalFull : $('#element_102').val(),
			
			//HYFLOC 5220 Gallons
			hyflocFive : $('#element_187').val(),
			
			
			
			//HYFLOC 3755 Gallons
			//Still Waiting
			hyflocThree : $('#element_186').val(),
			
			//Hydrated Lime 50 LB Bags
			// Adam wants the difference for the amount that has been used. 
			limeBag : $('#element_184').val(),

			
			//Potassium Hydroxide Caustic Bags
			//Maybe need to add total number of bags 
			causticBagEndShift : $('#element_185').val(),

			

			
			//DID CALCULATIONS UP MORE
			//Waste Water Treated Gallons
			//Difference of TOtal Gallons at beginning of shift and at end of shift 
			//startShiftRunningGallons : $('#element_3').val(),
			totalProcessedGallons : $('#element_8').val(),
			
			
			//***************************************************************************************************************
			//Diesel Fuel feet
			dieselInch : $('#element_81').val(),			
			
			//Tanks inches from top
			receivingFrac_1 : $('#element_33').val(),
			receivingFrac_2 : $('#element_34').val(),
			receivingFrac_3 : $('#element_35').val(),
			receivingFrac_4 : $('#element_36').val(),
			receivingFrac_5 : $('#element_37').val(),

			finishedWater_1 : $('#element_38').val(),
			finishedWater_2 : $('#element_39').val(),

			sludgeFrac_6 : $('#element_62').val(),
			sludgeFrac_7 : $('#element_58').val(),
			sludgeFrac_8 : $('#element_59').val(),
			sludgeFrac_9 : $('#element_60').val(),
			sludgeFrac_10 : $('#element_61').val(),
			sludgeFrac_11 : $('#element_62').val(),
			sludgeFrac_12 : $('#element_63').val(),

			ryFracPost : $('#element_68').val(),
			fbFracPost : $('#element_70').val(),
			rbFracPost : $('#element_71').val(),
			
				
			limeConversion: $('#element_32').val(),
			causticConversion: $('#element_182').val(),
			anionicConversion: $('#element_190').val(),
			cationicConversion: $('#element_191').val(),
			
			//Date
			dateMonth : $('#element_5_1').val(),
			dateDay : $('#element_5_2').val(),
			dateYear : $('#element_5_3').val(),			
			timeHour : $('#element_2_1').val(),
			timeMinute : $('#element_2_2').val(),
			timeAMPM : $('#element_2_4').val()			
			},			
			function(data, status){
				//alert("Debug Testing: Disregard: Data: " + data + " " + status);
			});
	});
});

