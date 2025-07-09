$("input#from").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#to").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#cancelstart").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#cancelend").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#date_acq").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#lic_reneweed").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#lic_expire").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});

$("#blogo,#home").click(function(){
    window.location="index.php"; 
});


$("#search").click(function(){
    Shadowbox.open({
        content: 'search.php',
        player:"iframe",
        width:400,
        height:100,
        loadingImage:"shadow/loading.gif", 
        title: "Search for item on page",
        options: {    
            overlayColor:"#ffffff",
            overlayOpacity: ".9"
            
        }
    });
});
/**/
$(".mail2").click(function(){
    
    Shadowbox.open({
        content: 'message.php',
        player:"iframe",
        width:500,
        height:500,
        loadingImage:"shadow/loading.gif", 
        title: "Messaging / Issues",
        options: {    
            overlayColor:"#ffffff",
            overlayOpacity: ".9"
            
        }
    });
});

$("#logout").click(function(){
   window.location='logout.php'; 
});

$("#loader").css('height',window.innerHeight );
$("#loader").css('width',window.innerWidth );

window.onload = function(){
   $("#loader").fadeOut("slow");
}
