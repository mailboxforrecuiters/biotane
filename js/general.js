 $("#change").click(function(){
   Shadowbox.open({
        content: 'updatepw.php',
        player:"iframe",
        width:400,
        height:180,
        loadingImage:"shadow/loading.gif", 
        title: "Update Password",
        options: {    
            overlayColor:"#ffffff",
            overlayOpacity: ".9"
            
        }
   }); 
});
$("input#from").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#to").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#cancelstart").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#cancelend").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#date_acq").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#lic_reneweed").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true,yearRange: "1:c+10"});
$("input#lic_expire").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});

$("#alluc").click(function(){
     if( $(this).prop('checked')  ){
        $(".uc").prop('checked',true);
     } else {
        $(".uc").prop('checked',false);
     }
});

$("#allselma").click(function(){
     if( $(this).prop('checked')  ){
        $(".selma").prop('checked',true);
     } else {
        $(".selma").prop('checked',false);
     }
})

$("#blogo,#home").click(function(){
    window.location="index.php"; 
});


$("#search").click(function(){
    Shadowbox.open({
        content: 'search.php',
        player:"iframe",
        width:400,
        height:500,
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

$("#spare1").click(function(){
    Shadowbox.open({
        content: 'pie.php',
        player:"iframe",
        width:1000,
        height:510,
        loadingImage:"shadow/loading.gif", 
        title: "Current Routes",
        options: {    
            overlayColor:"#ffffff",
            overlayOpacity: ".9"            
        }
    });
});


$("#ticket").click(function(){
    Shadowbox.open({
        content: 'ticket.php',
        player:"iframe",
        width:820,
        height:510,
        loadingImage:"shadow/loading.gif", 
        title: "Support Tickets",
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
   $("#loading-screen").fadeOut("slow");
    $('#ui-datepicker-div').removeClass('ui-helper-hidden-accessible'); 
    $('#ui-datepicker-div').css('clip', 'auto');  
    $('#ui-datepicker-div').css('z-index', '9999');  
}

$("#bakery").click(function(){
   window.location.href='https://inet.iwpusa.com/bakery/'; 
}); 

$("#org").click(function(){
   window.location.href='https://inet.iwpusa.com/organics/'; 
});

$("#gt").click(function(){
   window.location.href='https://inet.iwpusa.com/grease/'; 
});

 if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    $('#sb-body-inner').css({
        'overflow': 'scroll', 
        '-webkit-overflow-scrolling': 'touch' 
    }); 
}