<?php
	
	include("common.php");
	
	head();
	
	topBanner();
?>

	<div id = "body"> <!-- REMOVE THIS BODY PORTION FROM COMMON PHP AND PUT BACK IN EVERY SEPARATE PHP FILE BC LOCATION OF IMG DEPENDS ON RELATIVE FILE -->
		<!-- <h1>Synapse Systems</h1> -->
		<a href = "../index.php">
		
			<img src = "../img/logo.jpg" alt="Synapse Systems logo" > <!-- looks blurry, get a better copy -->
			
		</a>
		
		
		<?php
			dropdowns();
		?>
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div class = "mainArea">
			<p class = "mainTitle" >
				MY DATA
			</p>
			
			<div id = "contentArea"  class = "generalBorder" >
					FILE CONTENT
			</div>
				
			
			
			
			
			
			
					
			
		</div>
		
		<!--<script type="text/javascript" src="../myData.js"></script>-->
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>