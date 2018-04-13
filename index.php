<?php
	
	include("common.php");
	
	head();
	
	topBanner();
?>
		
	
	<div id = "spaceBelowTopBanner">
	<!-- only necessary if the top banner has a fixed position -->
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
			
		</div>
		
		
		<div id = "bottomHalf">
		
			<p>
			With Synapse Systems, you can . . .
			</p>
			
			<div id= "imgs">
				<img src = "ReportsFeatureBadge.png" alt = "Reports Feature Badge" >
				
				<img src = "ShareDataBadge.png" alt = "Reports Feature Badge" >
				
				<img src = "InputDataBadge.png" alt = "Reports Feature Badge" >
			</div>
			
			<div id = "startBtnDiv" >
				<button class = "navBtn" id = "startBtn" >
					Start for Free
				</button>
			</div>
			
		</div>
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
		<div id = "links">
			<div id = "dataDiv">
				DATA<br><br>
				
				<a href = "dataExplore.php">EXPLORE</a><br>
				<a href = "dataLog.php">DATA LOG</a><br>
				<a href = "dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			
			</div>
			
			<div id = "resourcesDiv">
				RESOURCES<br><br>
				
				<a href = "resourcesHowTo.php">HOW TOS</a><br>
				<a href = "resourcesPublications.php">PUBLICATIONS</a><br>
				<a href = "resourcesBlogs.php">BLOGS</a><br>
				<a href = "resourcesTerms.php">TERMS OF USE</a>
			
			</div>
			
			<div id = "aboutDiv">
				ABOUT<br><br>
				
				<a href = "aboutUs.php">ABOUT US</a><br>
				<a href = "aboutPricing.php">PRICING</a><br>
				<a href = "aboutNews.php">NEWS</a><br>
				<a href = "aboutCareers.php">CAREERS</a><br>
				<a href = "aboutContact.php">CONTACT</a>
			
			</div>
			
			<div id = "socialMediaDiv">
			
			</div>
	
		</div>
	</div>
	
</html>