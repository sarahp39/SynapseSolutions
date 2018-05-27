<?php
	
	include("common.php");
	
	head();
	
	topBanner();

	logoBodyStart();

	dropdown2();

	dropdowns();


?>
		

		<!-- upload/analysis page main area -->
		<div id="uploadMainArea" class = "mainArea" > 
			
			<p class="headerB" >
				UPLOAD
			</p>
			
			
			<div id = "existingData" class = "generalBorder" >
				<p class = "headerC" >
					Already have data or reports?
				</p>
				
				<p>
					Just make it public by changing the folder settings.
				</p>
				
				<a href = "myData.php">
					<button class = "navBtn">
						Go to Analysis
					</button>
				</a>
				
			
			</div>
			
			<!--<div id = "spaceBelowTopBanner">
	
			</div>-->
			
			
			<div id = "uploadData" class = "generalBorder" >
				<p class = "headerC" >
					Need to upload data or reports?
				</p>
				
				<p>
					Simply upload your data or reports using the form below.
			
				</p>
				
				<div id = "dataSpec" > <!--class from bootstrap -->
					
					<form id="upload-file" enctype="multipart/form-data" class="uploadForm">
												
						<input class="uploadForm__input" type="file" name="file" id="inputFile" accept=".txt">
						
					</form>
					
						<button class = "navBtn" id = "fileSubmitBtn"-->
							Submit
						</button>
					
				</div>
			
			</div>
			
			<div id = "termsModal" class = "modal">
				
					<div id = "termsDiv"> <!-- deleteFileDiv -->
						<span class = "close" id = "closeTerms" >&times;</span>
						
						<div id = "terms" >
<?php
							terms();
?>
						
						</div>
						
						<br>
						
						<p>I agree to the above stated terms and conditions.</p>
						<input type="checkbox" id="termsCheckbox">
						
						<!--<button id = "yesBtn"> Yes </button>
						<button id = "noBtn"> No </button>-->
						
					</div>
					
			</div>
		
		
		</div>
		
		<script type="text/javascript" src="../dataUploadAnalysis.js"></script>
		
	</div> <!-- body id-->
	
	
	
<?php
	bottomBanner();
?>

	
</html>