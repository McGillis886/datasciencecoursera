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
	<style>
		a{
			color : white;
		}
		
		.btn-primary {
			color: #fff;
			background-color: #337ab7;
			border-color: #2e6da4;
		}
	</style>
</head>
<body style = "background-image: url('bg.gif');">
	<br><br>
	<h1 align="center" style = "font-weight: 1000;">WELCOME</h1>
	<br><br><br>
	<div class="container" style = "border-style: groove;border-width: 0px; padding : 120px 40px 120px 40px;border-radius: 15px; border-color: #01579B; width:400px; background-color:#26A69A;" align="center">
		
		<ul class="nav nav-tabs" style="background-color:#d7604b;width: 220px; color:white;border-radius: 5px;">
		  <li class="active"><a data-toggle="tab" href="#home">View</a></li>
		  <li><a data-toggle="tab" href="#menu1">Add</a></li>
		  <li><a data-toggle="tab" href="#menu2">Analyics</a></li>
		</ul>
		<br><br>
		<div class="tab-content" style="width: 250px; border-style: groove;border-width: 5px; padding : 40px; background-color:#f4f4f4;border-radius: 15px;">
		  <div id="home" class="tab-pane fade in active">
			<h3>View</h3><br>
			<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Table
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Pathology (Urine)</a></li>
				<li><a href="#">Pathology (Stools)</a></li>
				<li><a href="#">Blood Bank</a></li>
				<li><a href="#">Whole Blood</a></li>
				<li><a href="#">Biochemistry (Blood I)</a></li>
				<li><a href="#">Biochemistry (Blood II)</a></li>
			  </ul>
			</div><br>
			<button type="button" id = "viewbtn" class="btn">View</button>
		  </div>
		  <div id="menu1" class="tab-pane fade">
			<h3>Add</h3>
			<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Table
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Pathology (Urine)</a></li>
				<li><a href="#">Pathology (Stools)</a></li>
				<li><a href="#">Blood Bank</a></li>
				<li><a href="#">Whole Blood</a></li>
				<li><a href="#">Biochemistry (Blood I)</a></li>
				<li><a href="#">Biochemistry (Blood II)</a></li>
			  </ul>
			</div><br>
			<div class="input-group">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
			  </div>
			  <div class="custom-file">
				<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
				<label class="custom-file-label" for="inputGroupFile01"></label>
			  </div>
			</div><br>
			<button type="button" id="addBtn" class="btn">Add</button>
		  </div>
		  <div id="menu2" class="tab-pane fade">
			<h3>Analyics</h3>
			<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Report
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Pathology (Urine)</a></li>
				<li><a href="#">Pathology (Stools)</a></li>
				<li><a href="#">Blood Bank</a></li>
				<li><a href="#">Whole Blood</a></li>
				<li><a href="#">Biochemistry (Blood I)</a></li>
				<li><a href="#">Biochemistry (Blood II)</a></li>
			  </ul>
			</div><br>
			<button type="button" id="anBtn" class="btn">Analyze</button>
		  </div>
		</div>
	</div>
</body>
<script>
	var sel = 0;
	
	$(document).ready(function() {
		
		$("#addBtn").click(function(){
			$.ajax({
		  type: "POST",
		  url: "some.php",
		  data: { select: $sel }
		}).done(function( msg ) {
		  alert( "Data Saved: " + msg );
		});
		});

		$("#anBtn").click(function(){
			if($sel == 0){
				window.location = "analyze_urine.php";
			}else if($sel == 1){
				window.location = "analyze_stool.php";
			}else if($sel == 2){
				window.location = "analyze_blood_bank.php";
			}else if($sel == 3){
				window.location = "analyze_whole_blood.php";
			}else if($sel == 4){
				window.location = "analyze_blood_I.php";
			}else if($sel == 5){
				window.location = "analyze_blood_II.php";
			}
		});
		
		$("#viewbtn").click(function(){
			if($sel == 0){
				window.location = "view_urine.php";
			}else if($sel == 1){
				window.location = "view_stool.php";
			}else if($sel == 2){
				window.location = "blood_bank_view.php";
			}else if($sel == 3){
				window.location = "whole_blood_view.php";
			}else if($sel == 4){
				window.location = "blood_I_view.php";
			}else if($sel == 5){
				window.location = "blood_II_view.php";
			}
		});
		
		$(function(){

			$(".dropdown-menu li a").click(function(){

			  $(".btn:first-child").text($(this).text());
			  $(".btn:first-child").val($(this).text());

			  if($(this).text() == "Pathology (Urine)"){
				  $sel = 0;
			  }else if($(this).text() == "Pathology (Stools)"){
				  $sel = 1;
			  }else if($(this).text() == "Blood Bank"){
				  $sel  = 2;
			  }else if($(this).text() == "Whole Blood"){
				  $sel = 3;
			  }else if($(this).text() == "Biochemistry (Blood I)"){
				  $sel = 4;
			  }else if($(this).text() == "Biochemistry (Blood II)"){
				  $sel = 5;
			  }
			  
			  //alert($sel);
		   });

		});
		
	});
</script>
</html>