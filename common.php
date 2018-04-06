<?php
	function head() {
?>
		<!DOCTYPE html>
<!-- -->
<html>
	<head>
		<title>Synapse Systems</title>
		
		<link rel="stylesheet" type="text/css" href="index.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="index.js"></script>
		
	</head>

<?php
	}
?>

<?php

	function dropdowns() {
?>

		<div id="dropdown">
			<!--onclick="myFunction()"-->
			<button  class="dropbtn" id = "databtn" >DATA</button>
			
			<div id="dataDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="dataExplore.php">EXPLORE</a>
				<a href="dataLog.php">DATA LOG</a>
				<a href="dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			</div>
			
			
			<button  class="dropbtn" id = "resourcesbtn" >RESOURCES</button>
			
			<div id="resourcesDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="resourcesHowTo.php">HOW TOS</a>
				<a href="resourcesWhitepapers.php">WHITEPAPERS</a>
				<a href="resourcesBlogs.php">BLOGS</a>
				<a href="resourcesTerms.php">TERMS OF USE</a>
			</div>
			
			<button  class="dropbtn" id = "aboutbtn" >ABOUT</button>
			
			<div id="aboutDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="aboutUs.php">ABOUT US</a>
				<a href="aboutPricing.php">PRICING</a> <!-- prime? -->
				<a href="aboutNews.php">NEWS</a>
				<a href="aboutCareers.php">CAREERS</a>
				<a href="aboutContact.php">CONTACT</a>
			</div>
			
		</div>
		
<?php
	}
?>