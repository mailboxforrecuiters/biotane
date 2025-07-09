<?php
include "../../../../protected/global.php";
//ini_set("display_errors",1);
$account = new Account($_GET['account_no']);
//var_dump($account);

if($account->is_manual == 1){
    $total_cap=  $account->manual_cap;
} else {
    $total_cap = $account->total_barrel_capacity;
}




$onsite = $account->avg_gallon;


$twentyfour     = $total_cap * .25;
$fourty         = $total_cap * .40;
$fifty          = $total_cap* .50;
$seventyfive    = $total_cap *  .75;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="jQuery Gauge, Gauge Widget, Radial Gauge" />
    <meta name="description" content="Using the toolbox in the right hand side of the jqxGauge you can easy switch through different properties which are changing gauge's appearance." />
    <title id='Description'>This sample demonstrates the basic Gauge settings.</title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../../scripts/demos.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdraw.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgauge.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxradiobutton.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxexpander.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var labels = { visible: false, position: 'outside',distance: '30px' };
              
            //Create jqxGauge
            $('#gauge').jqxGauge({
                
                width: '280px', 
                height: '300px',
                min:0,
                max:<?php echo $total_cap; ?>,
                ranges: [
                        {startValue: 0, endValue: <?php echo $twentyfour; ?>, style: { fill: '#00ff00', stroke: '#00ff00' }, startDistance: '5%', endDistance: '5%', endWidth: 13, startWidth: 13
                        },
                        {startValue: <?php echo $twentyfour; ?>, endValue: <?php echo $fifty; ?>, style: { fill: '#f6de54', stroke: '#f6de54' }, startDistance: '5%', endDistance: '5%', endWidth: 13, startWidth: 13 },
                         { startValue: <?php echo $fifty; ?>, endValue: <?php echo $seventyfive; ?>, style: { fill: '#db5016', stroke: '#db5016' }, startDistance: '5%', endDistance: '5%', endWidth: 13, startWidth: 13 },
                         { startValue: <?php echo $seventyfive; ?>, endValue: <?php echo $total_cap; ?>, style: { fill: '#d02841', stroke: '#d02841' }, startDistance: '5%', endDistance: '5%', endWidth: 13, startWidth: 13 }
                ],
                cap: { radius: 0.04 },
                caption: { offset: [0, -25], value: '<?php  $perc = round(($onsite/$total_cap)*100,2)   ; echo $perc."% Full"; ?>', position: 'bottom' },
                value: 0,
                style: { stroke: '#ffffff', 'stroke-width': '1px', fill: '#ffffff' },
                animationDuration: 1500,
                colorScheme: 'scheme04',
                labels: labels,
                ticksMinor: { interval: <?php
                if($total_cap  <= 1500){
                    echo "300";
                }else {
                   echo round($total_cap/5);
                }
                
                 ?>, size: '5%' },
                ticksMajor: { interval: <?php
                if($total_cap <= 1500){
                    echo "60";
                }else {
                    echo round($total_cap/3);
                }
                
                 ?>, size: '10%' }
            });

            //Initialize the Settings panel.
            // set gauge's value.
            $('#gauge').jqxGauge('setValue', <?php if($onsite<=0){echo "0";} else {echo $onsite;} ?>);
            
        });
    </script>
    <style type="text/css">
    .jqx-gauge-caption{
        font-size:18px;
    }
    </style>
</head>
<body class='default'>
  

    <div class="demo-gauge" style="margin-left:-8px;margin-top:20px;">
        <div id="gauge" style="float: left;"></div>
    </div>
</body>
</html>
