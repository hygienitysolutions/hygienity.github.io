<?php
// Initialize the session
session_start();
//require_once "config.php";
define('WP_MEMORY_LIMIT','256M');
?>
 
<!DOCTYPE HTML> 
<html> 
<head> 
	<title>PHP</title>
    <style>
        *{
            padding:7px;
        }
        
        table {
        font-family: arial;
        width: 500px;
        font-size: 20px;
        }
        td, th {
        text-align: left;
        padding: 8px;
        }
    </style>
</head>
<body>
    <?php
        $cb = 2;
        $ct = 1.5;
        $mb = 4;
        $mt = 52;
        $pb = 0.453;
        $pt = 1.287;

        $tcb1 = ($_POST["t"]*$cb*$mb) *  $pb;
        $tcb2 = ($_POST["u"]*$cb*$mb) *  $pb;
        $tcb3 = ($_POST["b"]*$cb*$mb) *  $pb;
        $pb = $tcb1 + $tcb2 + $tcb3;

        $tct1 = ($_POST["t"]*$ct*$mt) *  $pt;
        $tct2 = ($_POST["u"]*$cb*$pt*$mt);
        $tct3 = ($_POST["b"]*$cb*$pt*$mt);
        $pt = $tct1 + $tct2 + $tct3;
        
        $hygienity_costing = $pb + $pt;

        if (($_POST["n"]-1) == 1) {
        $sow = $_POST["sw"]/3;
        }
        else {
        $sow = 0;
        }

        $water_save = $_POST["t"] * $_POST["u"] * $_POST["b"] * 3 * 365;
    ?>

    <table>
        <tr>
            <td><b>Current costing</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST["current_costing"]; ?></td>
        </tr>
        <tr>
            <td><b>Hygienity costing</b></td>
            <td><b>:</b></td>
            <td><?php echo $hygienity_costing; ?></td>
        </tr>
        <tr>
            <td><b>Benefit</b></td>
            <td><b>:</b></td>
            <td><?php echo $_POST["current_costing"]-$hygienity_costing; ?></td>
        </tr>
        <tr>
            <td><b>Savings %</b></td>
            <td><b>:</b></td>
            <td><?php echo ($_POST["current_costing"]-$hygienity_costing)/100; ?></td>
        </tr>
    </table>
	
	<h1 style="color: #FF0000;">Additional Benefits</h1>
    <ul>
        <li><h2>You can save spent on workers up to (₹) : <?php echo $sow;?>.</h2></li>
        <li><h2>Over a year you can save water up to <?php echo $water_save ?> (liters) by using Hygienity.</h2></li>
        <li><h2>Save your Time and Energy.</h2></li>
        <li><h2>Enhance Productivity by Keeping Clean & Hygienic Atmosphere.</h2></li>
        <li><h2>Reduce Carbon Footprints… Step Towards Sustainability.</h2></li>
        </br>
        </br>
    </ul>

    <h1 style="color: #FF0000;">Contact Details</h1>

</body>
</html>