<?php
	
	include("common.php");
	
	//head();
	
	topBanner();
?>
		<!DOCTYPE html>
<!-- -->
<html>
	<head>
		<title>Synapse Systems</title>
		
		<link rel="stylesheet" type="text/css" href="index.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="index.js"></script>
		<script type="text/javascript" src="myData.js"></script>
		
	</head>


	
	<div id = "spaceBelowTopBanner">
	
	</div>
	
	
	<div id = "body">
		<!-- <h1>Synapse Systems</h1> -->
		<a href = "index.php">
		
			<img src = "logo.jpg" alt="Synapse Systems logo" > <!-- looks blurry, get a better copy -->
			
		</a>
		
		
		<?php
			dropdowns();
		?>
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div class = "mainArea">
			<p class = "mainTitle" >
				MY DATA
			</p>
			
			<div id = "myDataMainArea" class = "generalBorder" >
			
				
				
			</div>
			
			
		</div>
		
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>