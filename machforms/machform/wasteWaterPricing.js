$(document).ready(function(){
	$('#element_1').change(function(){
		var selection = $('#element_1 option:selected').text();
		
		switch(selection){
			case 'Ability':
				$('#element_30').val(200005);
				break;
			case 'Act Environmental':
				$('#element_30').val(201270);
				break;
			case 'Alpha Petroleum':
				$('#element_30').val(201210);
				break;
			case 'Alpha Pumping':
				$('#element_30').val(200015);
				break;				
			case 'Amberwick':
				$('#element_30').val(201029);
				break;
			case 'Athens':
				$('#element_30').val(13899);
				break;
			case 'Atlas Pumping':
				$('#element_30').val(200028);
				break;
			case 'Baker Commodities':
				$('#element_30').val(200037);
				break;		
			case 'Cari Recycling':
				$('#element_30').val(200075);
				break;
			case 'Diamond Environmental':
				$('#element_30').val(200122);
				break;
			case 'Environmental & Chem Consult':
				$('#element_30').val(200154);
				break;
			case 'Harbor Bio':
				$('#element_30').val(201277);
				break;				
			case 'Haz-Mat':
				$('#element_30').val(200210);
				break;
			case 'Inland Pumping':
				$('#element_30').val(201248);
				break;
			case 'JR Grease':
				$('#element_30').val(201251);
				break;
			case 'L & S Pipeline':
				$('#element_30').val(200294);
				break;
			case 'Liquid Env.':
				$('#element_30').val(200314);
				break;
			case 'LSW Enterprises':
				$('#element_30').val(201278);
				break;
			case 'Major Clean Up':
				$('#element_30').val(200801);
				break;
			case 'MJC Pumping':
				$('#element_30').val(16486);
				break;	
			case 'OC Pumping':
				$('#element_30').val(201247);
				break;
			case 'Pipe Maintenance':
				$('#element_30').val(200421);
				break;
			case 'Roto Rooter':
				$('#element_30').val(200450);
				break;
			case 'SB Industrial':
				$('#element_30').val(15607);
				break;	
			case 'Starlite':
				$('#element_30').val(201238);
				break;
			case 'Stress Less Environmental':
				$('#element_30').val(200485);
				break;
			case 'Sustainable Restaurant Services':
				$('#element_30').val(201263);
				break;
			case 'T&R':
				$('#element_30').val(200496);
				break;				
			case 'Triple A Pumping':
				$('#element_30').val(201280);
				break;
			case 'United Pumping':
				$('#element_30').val(201234);
				break;
			case 'Ventura Foods':
				$('#element_30').val(16274);
				break;
			case 'White House':
				$('#element_30').val(200572);
				break;
			case 'White Wave':
				$('#element_30').val(201279);
				break;
			case 'Wright':
				$('#element_30').val(200576);
				break;
			default:
				break;
		}

		
	});

});