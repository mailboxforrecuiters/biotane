$(document).ready(function () {
      $("#element_20_1").focus(function() {
$("label[for='element_resume_checkbox']").text("Check if ready to submit request").css({ 'color':'red', 'font-size':'150%' });
$("#submit_primary").hide();
    

      $("#element_resume_checkbox").click(function() {
$("label[for='element_resume_email']").text("Sending request to");
if ($('#element_17_4').prop("checked")) {
$("#element_resume_email").val("ttrawick@iwpusa.com");
} else { $("#element_resume_email").val("hr@iwpusa.com");
}
$("#guide_resume_email").text("Request results will be sent to you via email");
    });

      $("#element_resume_checkbox").click(function() {
var a = "Submit for Review";
$("#button_save_form").val(a);
    
 });
  });
});


     
