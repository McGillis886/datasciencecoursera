<?php
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/index.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery.min.js"></script>
</head>
<body>
<form action="blood_II_graph.php" method="POST">
    <div class="form-group">
	  <input type="radio" name="parameter" value="Total Cholesterol" checked>Total Cholesterol<br>
	  <input type="radio" name="parameter" value="HDL Cholesterol">HDL Cholesterol<br>
	  <input type="radio" name="parameter" value="Triglyceride">Triglyceride<br>
	  <input type="radio" name="parameter" value="VLDL Cholesterol">VLDL Cholesterol<br>
	  <input type="radio" name="parameter" value="LDL Cholesterol">LDL Cholesterol<br>
	  <input type="radio" name="parameter" value="Chol/HDLc Ratio">Chol/HDLc Ratio<br>
	  <input type="radio" name="parameter" value="LDL/HDLc Ratio">LDL/HDLc Ratio<br>
	  <button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>
</body>
</html>