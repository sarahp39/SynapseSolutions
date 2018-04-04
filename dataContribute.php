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
		
		<!-- contribute page main area -->
		<div id="contributeMainArea" > 
			
			<p id="contributeTitle" >
				CONTRIBUTE
			</p>
			
			
			<!--
			<p id = "contributeDesc" >
				Contributing to our brain loving society has never been easier.			
			</p>
			-->
			
			
			<div id = "existingData">
				<p id = "contributeSubHeading" >
					Already have data or reports?
				</p>
				
				<p id = "contributeDesc" >
					Just make it public by changing the folder settings.
				</p>
				
				<button id = "myDataBtn">
					Go to My Data
				</button>
				
			
			</div>
			
			<div id = "spaceBelowTopBanner">
	
			</div>
			
			
			<div id = "uploadData">
				<p id = "contributeSubHeading" >
					Need to upload data or reports?
				</p>
				
				<p id = "contributeDesc" >
					Simply upload your data or reports using the form below.
			
				</p>
			
			</div>
		
		
		</div>
		
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>