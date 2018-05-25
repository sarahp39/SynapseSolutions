<?php
	
	include("common.php");
	
	head();
	
	topBanner();

	logoBodyStart();

	dropdown2();
	
	dropdowns();

	
	//hidden();
?>
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div class = "mainArea">
			<p class = "mainTitle" >
				ANALYSIS
			</p>
			
			<div id = "contentArea" >
				<p id = "welcome" >
					<!--content inserted by myData.js file-->
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
				
				<div id = "deleteFileModal" class = "modal">
					<div id = "deleteFileDiv">
						<p>Are you sure you want to delete this file?</p>
						
						<button class = "navBtn" id = "yesBtn"> Yes </button>
						<button class = "navBtn" id = "noBtn"> No </button>
					</div>
					
				</div>
					
					
				<div id = "myAccount"  class = "generalBorder" >
					<p class = "generalHeading" >
						My Account
					</p>
					
					<div class = "accountHeads">
						<p id = "userName" >mathi</p>
						<p id = "userEmail" > </p>
						<p>*********</p>
						<p id = "userPlan" >Standard Plan</p>
					</div>
					
				</div>
				
				
				
				
				
				<div id = "myFiles" class = "generalBorder" >
					<p class = "subHeading" >
						My Files
					</p>
					
					<div id = "files" class = "generalBorder" >
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
								Download
							</button>
					
						</div>
					
					
						<!-- the four radio buttons -->
						<div id = "filterOptions">
						
							<!--<label class = "radio-inline"><input type="radio" name="filter" value="all" checked> All </label>-->
							<label class = "radio-inline"><input type="radio" name="filter" value="summary"> Summary </label>
							<label class = "radio-inline"><input type="radio" name="filter" value="spectra" checked > Spectra </label>
							<label class = "radio-inline"><input type="radio" name="filter" value="coherence"> Coherence </label>
							
						</div>
					</div>
					
					<div id = "uploadAgainBtnDiv">
						<button id = "uploadAgainBtn" class = "navBtn">
							Have another file to upload? Click here!
						</button>
					</div>
					
								
				</div>
			</div>
			
		</div>
		
		<script type="text/javascript" src="../myData.js"></script>
		<!--<script type="text/javascript" src="index.js"></script>-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
		
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		
		
	</div> <!-- body id-->
	
<?php
	bottomBanner();
?>
	
</html>