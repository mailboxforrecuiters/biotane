$(document).ready(function () { 
      $("#element_18").change(function() { 

var x = $('#element_18').val(); 
var a1 = 1010;
var a2 = 2030;
var a3 = 6040; 
var a4 = 5060;
var a5 = 3256;
$('#element_27').prop('readonly', true); 

if (x==a1) { 
$('#element_10').val("Arturo");
} { 
}

if (x==a2) { 
$('#element_10').val("Hector");
} { 
}

if (x==a3) { 
$('#element_10').val("Jorge");
} { 
}
if (x==a4) { 
$('#element_10').val("Ceasar");
} { 
}
if (x==a5) { 
$('#element_10').val("Victor");
} { 
}
  }); 
  }); 



//$(document).ready(function () { 
 //     $("#element_18").change(function() { 

//$sub_query = "select count(*) today_entry from `".MF_TABLE_PREFIX."form_{$row['form_id']}` where `status`=1 and date_created >= date_format(curdate(),'%Y-%m-%d 00:00:00') ";
//		$sub_sth = mf_do_query($sub_query,array(),$dbh);
//		$sub_row = mf_do_fetch_result($sub_sth);
		
//		$form_list_array[$i]['today_entry'] = $sub_row['today_entry'];
//$('#element_24').val($('today_entry'));
//}); 
 // }); 
