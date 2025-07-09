
//var windowtranslate;
//var a = "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes";
//$("#element_2").change(function() {

//var windowtranslate = window.open("http://translate.google.com","Translator", "a");



 //})

//$("#element_3").change(function() {
//window.open ("http://translate.google.com","mywindow","status=1");
//})
//$("#element_35").click(function() {

  // $.ajax({
    //  url: 'https://inet.iwpusa.com/machforms/machform/wo2.php',
      //dataType: 'json',
      //success: function(data){
                         //data returned from php file
        //              }
         //});
//});

$(document).ready(function () {
      $("#element_2").change(function() {

var x = $("#element_2 option:selected").text();
var a1 = "Victor"
if (x==a1) {
 $("#element_5").val("23101");
 $("#element_10").val("38");
 $("#element_22").val("38");
 $("#element_18").val("38");
} {
}
var a1 = "Felix"
if (x==a1) {
$("#element_5").val("23100");
$("#element_10").val("30");
 $("#element_22").val("30");
 $("#element_18").val("30"); 
}{
}

var a1 = "Cesar"
if (x==a1) {
$("#element_5").val("23103");
$("#element_10").val("38");
 $("#element_22").val("38");
 $("#element_18").val("38"); 
}{
}
var a1 = "Jesus"
if (x==a1) {
$("#element_5").val("23104");
$("#element_10").val("38");
 $("#element_22").val("38");
 $("#element_18").val("38"); 
}{
}

     });
   });

$(document).ready(function () {
      $("#element_8, #element_16, #element_20, #element_10, #element_22, #element_18").change(function() {

$("#element_11").val($("#element_8").val()*$("#element_10").val());
$("#element_23").val($("#element_16").val()*$("#element_22").val());
$("#element_19").val($("#element_20").val()*$("#element_18").val());
var a = parseInt($("#element_11").val(), 10);
var b = parseInt($("#element_23").val(), 10);
var c = parseInt($("#element_19").val(), 10);

var d = parseInt($("#element_8").val(), 10);
var e = parseInt($("#element_16").val(), 10);
var f = parseInt($("#element_20").val(), 10);

$("#element_25").val(a+b+c);
$("#element_24").val(d+e+f);




     });
   });

$(document).ready(function () {
      $("#element_39").focus(function() {
$("label[for='element_resume_checkbox']").text("Check if ready to submit request").css({ 'color':'red', 'font-size':'150%' });
$("#submit_primary").hide();
    

      $("#element_resume_checkbox").click(function() {
$("label[for='element_resume_email']").text("Sending request to");
var x = $("#element_3 option:selected").text();
var a1 = "2 Division"
if (x==a1) {
$("#element_resume_email").val("LBrinsino@iwpusa.com");
} { 
}
var a1 = "Q Division"
if (x==a1) {
$("#element_resume_email").val("MRolon@iwpusa.com");
} { 
}
var a1 = "L Division"
if (x==a1) {
$("#element_resume_email").val("GRuff@iwpusa.com");
} { 
}

    });

      $("#element_resume_checkbox").click(function() {
var a = "Submit for Review";
$("#button_save_form").val(a);
    

 


 });
 });
 });










