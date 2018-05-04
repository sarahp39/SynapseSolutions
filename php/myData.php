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
			
			<p id = "welcome" >
				Hello Mathi, welcome to your My Data page!
			</p>
			
			<div id = "myTeam"  class = "generalBorder" >
				<p class = "generalHeading" >
					My Team
				</p>
				
				<div id = "teamContact" ><!--<form action="">-->
					<input type="radio" name="id" value="stocco"> <p class = "name" >  Andrea Stocco</p>
				    <input type="radio" name="id" value="manavalan"> <p class = "name" >Mathi Manavalan</p>
					<input type="radio" name="id" value="phillips"> <p class = "name" >Sarah Phillips</p>
					<input type="radio" name="id" value="wijaya"> <p class = "name" >Frederick Wijaya</p>
					
				</div>
				
			</div>
				
				
			<div id = "myAccount"  class = "generalBorder" >
				MY ACCOUNT INFO
			</div>
			
			
			
			
			
			<div id = "myFiles" class = "generalBorder" >
				<p class = "subHeading" >
					My Files
				</p>
				
				<div id = "files">
				<!--WHERE THE LIST OF UPLOADED FILES ARE DISPLAYED-->
				</div>
				
				<div id = "dataBtns">
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
					
						<label class = "radio-inline"><input type="radio" name="filter" value="all" checked> All </label>
						<label class = "radio-inline"><input type="radio" name="filter" value="summary"> Summary </label>
						<label class = "radio-inline"><input type="radio" name="filter" value="spectra"> Spectra </label>
						<label class = "radio-inline"><input type="radio" name="filter" value="coherence"> Coherence </label>
						
					</div>
				</div>
				
				
				
							
			</div>
			
			
		</div>
		
		<script type="text/javascript" src="../myData.js"></script>
		
	</div> <!-- body id-->
	
	
<?php
	bottomBanner();
?>
	
</html>