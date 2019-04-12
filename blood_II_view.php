<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responstable 2.0: a responsive table solution</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style = "background-image: url('bg.gif');">

  <h1 align = "center">Clinical Pathology <span>(Urine)</span></h1>

<table class="responstable">
  
  <tr>
    <th>User ID</th>
    <th>Report ID</th>
    
    <th>Total Cholesterol</th>
      <th>Total Cholesterol</th>
      
    
      <th>Triglyceride</th>
      <th>VLDL Cholesterol</th>
      <th>LDL Cholesterol</th>
      <th>Chol/HDLc Ratio</th>
      <th>LDL/HDLc Ratio</th>
      <!--
      <th>SGOT</th>
      <th>Phospherous</th>
      <th>Serum ALKPO4</th>
      <th>Serum Calcium</th>
      <th>Bicarbonate</th>
      <th>Uric Acid</th>
      <th>Sodium</th>
      <th>Potassium</th>
      <th>Chloride</th>
      <th>SGPT</th>
      <th>Serum Gama GT</th>
      <th>BUN</th>
      <th>Creatinine</th>
      -->
      <th>Date</th>
      
  </tr>
  
  <?php 
include("config.php");

$sql = "SELECT * FROM `biochemistry (blood ii)`";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo '<tr>';
		foreach ($row as $key => $value) {
		 echo "<td>" . $value ."</td>";
		}
		echo '/<tr>';
        
		/*
		echo '<tr>
                  <td scope="row">' . $row["id"]. '</td>
                  <td>' . $row["name"] .'</td>
                  <td> '.$row["lastName"] .'</td>
                </tr>';*/





    }
} else {
    echo "0 results";
} 
?>
  
</table>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  

</body>

</html>
