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
<form action="whole_blood_graph.php" method="POST">
    <div class="form-group">
	  <input type="radio" name="parameter" value="Plus Cells" checked>Hemoglobin<br>
	  <input type="radio" name="parameter" value="Red Cell Count">Red Cell Count<br>
	  <input type="radio" name="parameter" value="Hematocrit">Hematocrit<br>
	  <input type="radio" name="parameter" value="MCV">MCV<br>
	  <input type="radio" name="parameter" value="MCH">MCH<br>
	  
	  <input type="radio" name="parameter" value="MCHC">MCHC<br>
	  <input type="radio" name="parameter" value="RDW*">RDW*<br>
	  <input type="radio" name="parameter" value="WBC Count">WBC Count<br>
	  <input type="radio" name="parameter" value="Platelet Count">Platelet Count<br>
	  <input type="radio" name="parameter" value="MPV*">MPV*<br>
	  <input type="radio" name="parameter" value="Neutrophilis">Neutrophilis<br>
	  <input type="radio" name="parameter" value="Eosinophils">Eosinophils<br>
	  <input type="radio" name="parameter" value="Lymphocytes">Lymphocytes<br>
	  <input type="radio" name="parameter" value="Monocytes">Monocytes<br>
	  <input type="radio" name="parameter" value="Basophils">Basophils<br>
	  <input type="radio" name="parameter" value="Absolute Neutrophhilis">Absolute Neutrophhilis<br>
	  <input type="radio" name="parameter" value="Absolute Lymphocytes">Absolute Lymphocytes<br>
	  <input type="radio" name="parameter" value="Absolute Eosinophils">Absolute Eosinophils<br>
	  <input type="radio" name="parameter" value="Absolute Monocytes">Absolute Monocytes<br>
	  <input type="radio" name="parameter" value="Erythrocytes">Erythrocytes<br>
	  <input type="radio" name="parameter" value="Leucocytes">Leucocytes<br>
	  <input type="radio" name="parameter" value="Platelets">Platelets<br>
	  <input type="radio" name="parameter" value="ESR">ESR<br>
	  <button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>
</body>
</html>