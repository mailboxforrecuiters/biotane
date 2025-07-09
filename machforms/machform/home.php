<?php 
ini_set("display_errors",1);
include "protected/global.php"; 
function randomKey($length) {
    $key = "";
    $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));

    for($i=0; $i < $length; $i++) {
        $key .= $pool[mt_rand(0, count($pool) - 1)];
    }
    return $key;
}

$page = "home";
$header = "From: password-reset@iwpusa.com\r\n";
$header .= "Reply-To: No-reply@iwpusa.com\r\n";
$header .= "MIME-Version: 1.0\r\n";
        
if(isset($_SESSION['id'])){$person = new Person();}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="ReDDaWG" />
    <meta charset="UTF-8" />
   <?php include "source/css.php"; ?>
   <?php include "source/scripts.php"; ?>
   
	<title>Oil Customer Management System</title>
</head>
<body>
<?php include "source/header.php"; ?>
<div id="wrapper">
<?php
$check_uc =  array(
    24,30,31,32,33,99
);

//if you are a facility manage of any uc facility or Richard Lopez
if( ( isset($_SESSION['id']) && in_array($person->facility ,$check_uc) && $person->isFacilityManager() ) || ( isset($_SESSION['id']) && ( $person->user_id ==21 || $person->user_id ==41 || $person->user_id == 16 || $person->user_id == 22 || $person->user_id == 23 || $person->user_id == 99  ) )   ){
    ?>
    
    <iframe style="width: 100%;border:0px solid #bbb;" frameborder="0" src="predict.php"></iframe>
    <script>
        $("#transparent").css("display","none");
        $('iframe').load(function () {
            $('iframe').height($('iframe').contents().height());
        });
    </script>
    <?php
}


if($person->changed == 1){
    echo "Your password was reset to default, please change your password to a more secure one by clicking 'change password' at the top of the page.";
}

?>
</div>
<?php include "source/footer.php"; ?>
</body>
</html>