<?php
include "../../../../protected/global.php";
$ikg_info = new IKG($_GET['route_id']);
//print_r($ikg_info);
$bhy = $db->query("SELECT COUNT(schedule_id) as jui FROM iwp_data_table WHERE route_id =$ikg_info->route_id");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="ReDDaWG" />
    <meta charset="UTF-8" />
    <meta name="keywords" content="jQuery Progress, Progress Bar, jqxProgressBar, Loading Bar, Progress Widget" /> 
    <meta name="description" content="The jqxProgressBar widget visually indicates the progress of a lengthy operation" />
    <title id='Description'>The jqxProgressBar widget visually indicates the progress of a lengthy operation.</title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <style>
    body{
        padding:0px 0px 0px 0px;
        margin:0px 0px 0px 0px;
    }
    </style>
    <script type="text/javascript" src="../../scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../../scripts/demos.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxprogressbar.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Create jqxProgressBar.
            $("#jqxProgressBar").jqxProgressBar({ width: 250, height: 30, value: <?php echo $bhy[0]['jui']; ?>,min:0,max:<?php echo $ikg_info->stops; ?>,showText:true});
           
          
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div style='margin-top: 10px; overflow: hidden;' id='jqxProgressBar' style="text-align: right;"></div>
    </div>
    
    
    <span style="position:relative;top: 13px;"><?php echo $ikg_info->stops; ?></span>
</body>
<script>
var thix = $('#jqxProgressBar').jqxProgressBar().find('.jqx-fill-state-pressed');
$(thix).html('<span style="font-size:12px;float:right;margin-right:2px;position:relative;top:6px;"><?php  echo $bhy[0]['jui']; ?></span>');

</script>
</html>
