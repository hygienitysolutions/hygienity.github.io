<?php
// Initialize the session
session_start();
//require_once "config.php";
define('WP_MEMORY_LIMIT','256M');
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>COST - BENEFIT ANALYSIS</title>
    <style>
        *{
            padding:7px;
        }
        label {
            display: inline-block;
            width: 300px;
            font-weight: bold;
            font-size: 17px;
        }
        
        input {
            width: 400px;
            padding: 10px 10px;
            margin: 8px 0;
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form class="form-horizontal" role="form" method="post" action="calculation.php">
	<div class="form-group">
		<label for="Name" class="col-sm-2 control-label">Name</label>
		<input type="text" class="form-control" id="name" name="name" value="" required>
	</div>
	<div class="form-group">
		<label for="Company name" class="col-sm-2 control-label">Company name</label>
		<input type="text" class="form-control" id="email" name="company_name" value="" required>
	</div>
	<div class="form-group">
		<label for="No. of Toilets" class="col-sm-2 control-label">No. of Toilets</label>
		<input type="number" class="form-control" id="email" name="t" value="" required >
	</div>
	<div class="form-group">
		<label for="No of Urinals" class="col-sm-2 control-label">No. of Urinals</label>
		<input type="number" class="form-control" id="human" name="u" required>
	</div>
	<div class="form-group">
		<label for="No of Basins" class="col-sm-2 control-label">No. of Basins</label>
		<input type="number" class="form-control" id="human" name="b" required>
	</div>
    <div class="form-group">
		<label for="No of Workers" class="col-sm-2 control-label">No. of Workers you are currently using for washroom maintenance</label>
		<input type="numbers" class="form-control" id="human" name="n" required>
	</div>
    <div class="form-group">
		<label for="Spent on Workers (₹)" class="col-sm-2 control-label">Spent on Workers (&#8377)</label>
		<input type="number" class="form-control" id="human" name="sw" required>
	</div>
    <div class="form-group">
		<label for="Current Spent on Toilet Cleaners and Fresheners (₹)" class="col-sm-2 control-label">Current Spent on Toilet Cleaners and Fresheners (&#8377)</label>
		<input type="text" class="form-control" id="human" name="current_costing" required>
	</div>
	<div class="form-group">
        <input type="submit" value="Submit" style="background-color: white; color: black; border: 2px solid #f44336; font-weight: bold; font-size: 20px;">
	</div>
</form>

</body>
</html>