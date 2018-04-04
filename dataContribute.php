<?php
	
	include("common.php");
?>

<!DOCTYPE html>
<!-- -->
<html>
	<head>
		<title>Synapse Systems</title>
		
		<link rel="stylesheet" type="text/css" href="index.css" />
		<script type="text/javascript" src="index.js"></script>
		
	</head>
	
	
	<div id="topBanner">
		<div>
		<!-- sign in/sign up buttons -->
		<button id = "login">Sign in / Sign up</button>
		</div>
	</div>
	
	
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
		<div id = "landingDisplay">
			<p>
				DATA-CONTRIBUTE
			</p>
		</div>
		
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>