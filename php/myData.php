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
			
			<div id = "myTeam"  class = "generalBorder" >
					MY TEAM INFO
			</div>
				
				
			<div id = "myAccount"  class = "generalBorder" >
				MY ACCOUNT INFO
			</div>
			
			
			
			
			
			<div id = "myFiles" class = "generalBorder" >
				<p class = "subHeading" >
					My Files
				</p>
				

				<!-- the four big buttons -->
				<div id = "fileOptionBtns">
					<button class = "navBtn" id = "viewBtn" >
						View
					</button>
				
					<button class = "navBtn" id = "compareBtn" >
						Compare
					</button>
					
					<br>
				
					<button class = "navBtn" id = "cleanBtn" >
						Clean
					</button>
				
					<button class = "navBtn" id = "shareBtn" >
						Share
					</button>
			
				</div>
			
			
			<!-- the four radio buttons -->
			<div id = "filterOptions">
			
			</div>
				
				
				<div id = "files">
				
				</div>
				
				<div id = "fileContent">
			
					<div id = "key">
					
					</div>
					
					<div id = "value">
					
					</div>
				</div>
				
			</div>
			
			
		</div>
		
		<script type="text/javascript" src="../myData.js"></script>
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>