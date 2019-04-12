<?php
	include("config.php");
	
	$select = $_POST['select'];
	
	//echo "select is ".$_POST['select'];
	
	$sql = "";
	
	if($select == 0){
	$sql = "INSERT INTO `clinical pathology (urine)` (`report_id`, `user_id`, `Volume`, `Color`, `Appearance`, `Reaction & pH`, `Specific Gravity`, `Deposit`, `Protein`, `Glucose`, `Ketones`, `Bilesalt`, `Bile Pigment`, `Blood`, `Urobilinogen`, `Nitrite`, `Leukocytes`, `Plus cells`, `Epithelial cells`, `Red Blood Cells`, `Crystals`, `Yeast`, `Amorphous Deposits`, `Cast`, `Bacteria`, `Macrophages`, `Mucus`, `Trichomonas`, `Date`) VALUES ('1', '1', '35', 'Yellow', 'Slightly Hazy', '7', '1.025', 'Present', 'Negative', 'Negative', 'Trace', 'Negative', 'Negative', 'Trace-Lysed', '0.2', 'Negative', 'Negative', '3', '2', '2', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '2019-04-10')";
	}else if($select == 1){
		$sql = "INSERT INTO `clinical pathology (stool)` (`report_id`, `user_id`, `Color`, `Consistancy`, `Frank Blood`, `Mucus`, `Parasite`, `pH`, `Occult Blood`, `Plus Cells`, `Epithelial Cells`, `RBC'S`, `Ova`, `Cysts`, `Veg. Fibre`, `Date`) VALUES ('1', '1', 'Brown', 'Semi Solid', 'Absent', 'Absent', 'Absent', 'Acidic', 'Absent', '3', '2', '0', '0', '0', '0', '2019-04-10')";
	}else if($select == 2){
		$sql = "INSERT INTO `Blood Bank`INSERT INTO `Blood Bank` (`user_id`, `report_id`, `Blood Group`, `Rh factor`, `Date`) VALUES ('2', '3', '\"O\"', 'Positive', '2018-07-03');";
	}else if($select == 3){
		$sql = "INSERT INTO `haematology (whole blood)` (`user_id`, `report_id`, `Hemoglobin`, `Red cell Count`, `Hematocrit`, `MCV`, `MCH`, `MCHC`, `RDW*`, `WBC Count`, `Platelet Count`, `MPV*`, `Neutrophilis`, `Eosinophils`, `Lymphocytes`, `Monocytes`, `Basophils`, `Absolute Neutrophhilis`, `Absolute Lymphocytes`, `Absolute Eosinophils`, `Absolute Monocytes`, `Erythrocytes`, `Leucocytes`, `Platelets`, `ESR`, `Date`) VALUES ('1', '1', '14.1', '5.02', '44.7', '89.0', '28.1', '31.5', '15.0', '10.14', '435', '9.0', '55', '12', '27', '06', '00', '5.58', '2.74', '1.22', '0.61', 'Normocytic,Normochromic', 'Eosinophilia', 'Adequate on Smear', '06', '03/07/2018')";
	}else if($select == 4){
		$sql = "INSERT INTO `Biochemistry (Blood I)` (`user_id`, `report_id`, `Total Bilirubin`, `Direct Bilirubin`, `Indirect Bilirubin`, `Total Protein`, `Albumin`, `Globulin`, `A/G`, `SGOT`, `Phospherous`, `Serum ALKPO4`, `Serum Calcium`, `Bicarbonate`, `Uric Acid`, `Sodium`, `Potassium`, `Chloride`, `SGPT`, `Serum Gama GT`, `BUN`, `Creatinine`) VALUES ('1', '1', '0.67', '0.18', '0.49', '8.1', '4.4', '3.70', '1.19', '20', '4.7', '103', '9.3', '30.3', '5.7', '141', '3.6', '101', '49', '22', '10', '0.91','03/07/2018')";
	}else if($select == 5){
		$sql = "INSERT INTO `Biochemistry (Blood II)` (`user_id`, `report_id`, `Total Cholesterol`, `HDL Cholesterol`, `Triglyceride`, `VLDL Cholesterol`, `LDL Cholesterol`, `Chol/HDLc Ratio`, `LDL/HDLc Ratio`, `Date`) VALUES ('1', '1', '154', '36', '63', '12.60', '105.40', '4.28', '2.93', '2018-07-03')";
	}
	if (mysqli_query($db, $sql)) {
    echo "Query executed successfully";
	} else {
		echo "Error : " . mysqli_error($conn);
	}
	
 ?>