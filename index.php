<?php
	
	include("php/common.php");
	
	//head(); bc all other php files are in php folder so they need ../ to access the css and js file, but this one doesnt need the ../
	
	topBanner();

		
	//dropdowns(); diff links from index.php
	
	
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
	
	<div id = "body"> <!-- REMOVED THIS BODY PORTION FROM COMMON PHP AND PUT BACK IN EVERY SEPARATE PHP FILE BC LOCATION OF IMG DEPENDS ON RELATIVE FILE -->
		<!-- <h1>Synapse Systems</h1> -->
		<a href = "index.php">
		
			<img src = "img/logo.jpg" alt="Synapse Systems logo" > <!-- looks blurry, get a better copy -->
			
		</a>
		
		
		<div id="dropdown">
			<!--onclick="myFunction()"-->
			<button  class="dropbtn" id = "databtn" >DATA</button>
			
			<div id="dataDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="php/dataExplore.php">EXPLORE</a>
				<a href="php/myData.php">MY DATA</a>
				<a href="php/dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			</div>
			
			
			<button  class="dropbtn" id = "resourcesbtn" >RESOURCES</button>
			
			<div id="resourcesDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="php/resourcesTutorials.php">TUTORIALS</a>
				<a href="php/resourcesPublications.php">PUBLICATIONS</a>
			</div>
			
			<button  class="dropbtn" id = "aboutbtn" >ABOUT</button>
			
			<div id="aboutDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="php/aboutUs.php">ABOUT US</a>
				<a href="php/aboutPricing.php">PRICING</a> <!-- prime? -->
				<a href="php/aboutTerms.php">TERMS OF USE</a>
			</div>
			
		</div>
		
		
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div id = "landingDisplay">
			
		</div>
		
		
		<div id = "bottomHalf">
		
			<p>
			With Synapse Systems, you can . . .
			</p>
			
			<div id= "imgs">
				<img src = "img/ReportsFeatureBadge.png" alt = "Reports Feature Badge" >
				
				<img src = "img/ShareDataBadge.png" alt = "Reports Feature Badge" >
				
				<img src = "img/InputDataBadge.png" alt = "Reports Feature Badge" >
			</div>
			
			<div id = "startBtnDiv" >
				<button class = "navBtn" id = "startBtn" >
					Start for Free
				</button>
			</div>
			
		</div>
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner"> <!-- diff links from index page! -->
	
		<div id = "links">
			<div id = "dataDiv">
				DATA<br><br>
				
				<a href = "php/dataExplore.php">EXPLORE</a><br>
				<a href = "php/myData.php">MY DATA</a><br>
				<a href = "php/dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			
			</div>
			
			<div id = "resourcesDiv">
				RESOURCES<br><br>
				
				<a href = "php/resourcesTutorials.php">HOW TOS</a><br>
				<a href = "php/resourcesPublications.php">PUBLICATIONS</a><br>
			
			</div>
			
			<div id = "aboutDiv">
				ABOUT<br><br>
				
				<a href = "php/aboutUs.php">ABOUT US</a><br>
				<a href = "php/aboutPricing.php">PRICING</a><br>
				<a href = "php/aboutTerms.php">TERMS OF USE</a>
			
			</div>
			
			<div id = "socialMediaDiv">
			
			</div>
	
		</div>
	</div>
	
</html>