<?php
	
	include("php/common.php");
	
	//head(); bc all other php files are in php folder so they need ../ to access the css and js file, but this one doesnt need the ../
	
	topBanner();

		
	//dropdowns(); diff links from index.php
	
	//hidden();
	
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
			<img src = "img/logo.png" alt="Synapse Systems logo" id = "logo" >
		</a>
		
		<div class="dropdown" style = "display: none;" >			
			<button class ="dropbtn"  style= "background-image: url('img/drop.png');" ></button>
			
			<div id="myDropdown" class="dropdown-content">
				<a href="php/dataUploadAnalysis.php">UPLOAD DATA</a>
				<a href="php/myData.php">ANALYZE DATA</a>
				<a href="php/terms.php">TERMS OF USE</a>
				<a href="php/aboutUs.php">ABOUT US</a>
			</div>
		</div>
		
		<div id = "dropdown2">
			<a href="php/dataUploadAnalysis.php" >UPLOAD DATA</a>
			<a href="php/myData.php" >ANALYZE DATA</a>
			<a href="php/terms.php"  >TERMS OF USE</a>
			<a href="php/aboutUs.php"  >ABOUT US</a>
		
		</div>
		
		<!--
		<div id="dropdown">
			onclick="myFunction()"
			<button  class="dropbtn" id = "databtn" >DATA</button>
			
			<button id ="dropbtn"  style= "background-image: url('img/drop.png');" >
			
			</button>
		
			
		</div>
			
			
			
			<div id="dataDropdown" class="dropdown-content"> 
				<a href="php/dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
				<a href="php/aboutTerms.php">TERMS OF USE</a>
				<a href="php/aboutUs.php">ABOUT US</a>
			
			</div>
				
			
				<a href="dataExplore.php">EXPLORE</a>
				<a href="myData.php">MY DATA</a>
				<a href="dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			</div>
			
			
			<button  class="dropbtn" id = "resourcesbtn" >RESOURCES</button>
			
			<div id="resourcesDropdown" class="dropdown-content">  id = "myDropdown
				<a href="resourcesTutorials.php">TUTORIALS</a>
				<a href="resourcesPublications.php">PUBLICATIONS</a>
			</div>
			
			<button  class="dropbtn" id = "aboutbtn" >ABOUT</button>
			
			<div id="aboutDropdown" class="dropdown-content">  id = "myDropdown
				<a href="aboutUs.php">ABOUT US</a>
				<a href="aboutPricing.php">PRICING</a>  prime?
				<a href="aboutTerms.php">TERMS OF USE</a>
			</div>
			
			
		</div> -->
		
		
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div id = "landingDisplay">
			<!-- CAROSEL -->
			
			<a href = "http://greymattersjournal.com/brain-machine-interfaces/">
				<img src = "img/greymattersBCI.png" alt = "Grey Matters BCI article" id = "bciArticle" class = "mySlides" >
			</a>
			<a href = "http://greymattersjournal.com/cutting-for-the-competition-how-dehydration-affects-the-brain/">
				<img src = "img/greymattersDehydration.png" alt = "Grey Matters dehydration article" id = "hyderationArticle" class = "mySlides" >
			</a>
			<a href = "http://greymattersjournal.com/rest-assured/">
				<img src = "img/greymattersRest.png" alt = "Grey Matters rest article" id = "restArticle" class = "mySlides" >
			</a>
			
			<!--buttons to scroll through articles -->
			<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
			
		</div>
		
		
		<div id = "bottomHalf">
		
			<p class="headerB">With Synapse Systems, you can . . .</p>
			
			<div id="col3">
				<img src = "img/UploadIcon.png" alt = "Feature Badge" >
				<p class="headerC"> Take your brain data and upload it into our platform.</p>
			</div>
			<div id="col3">
				<img src = "img/AnalyzeIcon.png" alt = "Feature Badge" >
				<p class="headerC"> Filter and clean your data. Analyze your results with customizable parameters.</p>
			</div>
			<div id="col3">
				<img src = "img/ReportIcon.png" alt = "Feature Badge" >
				<p class="headerC"> Export your analyzed data, share it with your colleagues, or create a publication/report. </p>
			</div>
			
			<div id = "startBtnDiv" >
				<button class = "navBtn" id = "startBtn" >
					Start for Free
				</button>
			</div>
			
		</div>
		
		
	</div> <!-- body id-->
	
<?php
	bottomBanner();
?>
	
</html>