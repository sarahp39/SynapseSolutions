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
					
					<div class="tab"> <!-- MOVE ONCLICKS TO JS -->
						<button class="tablinks" id = "summaryBtn" onclick="openCity(event, 'summary')">summary</button>
						<button class="tablinks" id = "spectraBtn" onclick="openCity(event, 'spectra')">spectra</button>
						<button class="tablinks" id = "coherenceBtn" onclick="openCity(event, 'coherence')">coherence</button>
					</div>

					<div id="summary" class="tabcontent">
						<h3>summary</h3>
						<p>summary is the capital city of England.</p>
					</div>

					<div id="spectra" class="tabcontent">
						<h3>spectra</h3>
						<p>spectra is the capital of France.</p> 
					</div>

					<div id="coherence" class="tabcontent">
						<h3>coherence</h3>
						<p>coherence is the capital of Japan.</p>
					</div>
					
					<div id = "key">
					
					</div>
					
					<div id = "value">
					
					</div>
			</div>
				
			
			
			
			
			
			
					
			
		</div>
		
		<script type="text/javascript" src="../fileContent.js"></script>
		
	</div> <!-- body id-->
	
	
<?php
	bottomBanner();
?>
	
</html>