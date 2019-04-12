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
<form action="blood_I_graph.php" method="POST">
    <div class="form-group">
	  <input type="radio" name="parameter" value="Total Bilirubin" checked>Total Bilirubin<br>
	  <input type="radio" name="parameter" value="Direct Bilirubin">Direct Bilirubin<br>
	  <input type="radio" name="parameter" value="Indirect Bilirubin">Indirect Bilirubin<br>
	  <input type="radio" name="parameter" value="Total Protein">Total Protein<br>
	  <input type="radio" name="parameter" value="Albumin">Albumin<br>	  
	  <input type="radio" name="parameter" value="A/G">A/G<br>
	  <input type="radio" name="parameter" value="SGOT">SGOT<br>
	  <input type="radio" name="parameter" value="Phospherous">Phospherous<br>
	  <input type="radio" name="parameter" value="Serum ALKPO4">Serum ALKPO4<br>
	  <input type="radio" name="parameter" value="Serum Calcium">Serum Calcium<br>
	  <input type="radio" name="parameter" value="Bicarbonate">Bicarbonate<br>
	  <input type="radio" name="parameter" value="Uric Acid">Uric Acid<br>
	  <input type="radio" name="parameter" value="Sodium">Sodium<br>
	  <input type="radio" name="parameter" value="Potassium">Potassium<br>
	  <input type="radio" name="parameter" value="Chloride">Chloride<br>
	  <input type="radio" name="parameter" value="SGPT">SGPT<br>
	  <input type="radio" name="parameter" value="Serum Gama GT">Serum Gama GT<br>
	  <input type="radio" name="parameter" value="BUN">BUN<br>
	  <input type="radio" name="parameter" value="Creatinine">Creatinine<br>
	  <button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>
</body>
</html>