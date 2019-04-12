<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responstable 2.0: a responsive table solution</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <h1 align = "center">Clinical Pathology <span>(Urine)</span></h1>

<table class="responstable">
  
  <tr>
    <th>User ID</th>
    <th>Report ID</th>
    
    <th>Color</th>
      <th>Consistancy</th>
      <th>Frank Blood</th>
      <th>Mucus</th>
      <th>Parasite/th>
      <th>pH</th>
      <th>Occult Blood</th>
      <th>Pus Cells</th>
      <th>Epithelial Cells</th>
      <th>RBC</th>
      <th>Ova</th>
      <th>Cysts</th>
      <th>Veg. Fibre</th>
      <th>Date</th>
      
  </tr>
  
  <?php 
include("config.php");

$sql = "SELECT * FROM `clinical pathology (stool)`";
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
