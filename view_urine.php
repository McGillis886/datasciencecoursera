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
    <th>Volume</th>
    <th>Color</th>
      <th>Appearance</th>
      <th>Reaction and pH</th>
      <th>Specific Gravity</th>
      <th>Deposit</th>
      <th>Protein</th>
      <th>Glucose</th>
      <th>Ketones</th>
      <th>Bilesalt</th>
      <th>Bile pigment</th>
      <th>Blood</th>
      <th>Urobilinogen</th>
      <th>Nitrite</th>
      <th>Leukocytes Cells</th>
      <th>Pus Cells</th>
      <th>Epithelial Cells</th>
      <th>Red Blood Cells </th>
      <th>Crystals</th>
      <th>Yeast</th>
      <th>Amorphous Deposits</th>
      <th>Cast</th>
      <th>Bacteria</th>
      <th>Macrophages</th>
      <th>Mucus</th>
      <th>Trichomonas</th>
  </tr>
  
  <?php 
include("config.php");

$sql = "SELECT * FROM `clinical pathology (urine)`";
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
  
  /*<tr>
    
    <td>Color</td>
    <td>Color of the patient's urine</td>
    <td>Pigments and other compounds in certain foods and medications can change your urine color</td>
    <td>Pale yellow to deep Amber</td>
    
  </tr>
  
  <tr>
   
    <td>Appearance</td>
    <td>Appearance of the patient's urine</td>
    <td>Noraml urine is clear, when it is not it is often hazy,cloudy,turbid or foamy due to mild dehydration,excess protein or crystalline substances.</td>
    <td>Clear</td>
    
  </tr>
  
  <tr>
    
    <td>Reaction and  pH</td>
    <td>pH of the patients urine</td>
    <td>Acidic urine can be due to acidosis, dehydration,diarrhea. Alkaline urine can be due to gastric suctioning, kidney failure</td>
    <td>7.0</td>
  </tr>
  
  <tr>
    <td>Specific gravity</td>
    <td>Density of urine as compared to that of water</td>
    <td>High urine specific gravity can indicate that you have extra substances in your urine, such as glucose, RBCs, WBCs.</td>
    <td>1.002-1.030</td>
    
  </tr>
    
    
    <tr>
    <td>Deposit</td>
    <td>Used to determine presence of kidney stone</td>
    <td>Detection of kidney stones, kidney failure</td>
    <td>Absent</td>
    
  </tr>
    
    <tr>
    <td>Protein,Glucose,Ketones,Bilesalt, Bile Pigment,Blood</td>
    <td>Used to determine presence of kidney diseases</td>
    <td>Detection of kidney stones, kidney failure and other kidney diseases</td>
    <td>Absent</td>
    
  </tr>
    
    <tr>
    <td>Urobilinogen</td>
    <td>Urobilinogen is a colorless by-product of bilirubin reduction. It is formed in the intestines by bacterial action on bilirubin.</td>
    <td>If there is little or no urobilinogen in urine, it can mean your liver isn't working correctly. Too much urobilinogen in urine can indicate a liver disease such as hepatitis or cirrhosis.</td>
    <td>0.2-1.0 mg/dl</td>
    
  </tr>*/
  
  ?>
  
</table>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  

</body>

</html>
