<?php
	
	include("common.php");
	
	head();
	
	topBanner();
?>

	
	<div id = "spaceBelowTopBanner">
	
	</div>
	
	
	<div id = "body">
		<!-- <h1>Synapse Systems</h1> -->
		<a href = "index.php">
		
			<img src = "logo.jpg" alt="Synapse Systems logo" > <!-- looks blurry, get a better copy -->
			
		</a>
		
		
		<?php
			dropdowns();
		?>
		
		<!-- upload/analysis page main area -->
		<div id="uploadMainArea" > 
			
			<p id="uploadTitle" >
				DATA UPLOAD/ANALYSIS
			</p>
			
			
			<!--
			<p id = "contributeDesc" >
				Contributing to our brain loving society has never been easier.			
			</p>
			-->
			
			
			<div id = "existingData">
				<p id = "subHeading" >
					Already have data or reports?
				</p>
				
				<p id = "uploadDesc" >
					Just make it public by changing the folder settings.
				</p>
				
				<button id = "myDataBtn">
					Go to My Data
				</button>
				
			
			</div>
			
			<!--<div id = "spaceBelowTopBanner">
	
			</div>-->
			
			
			<div id = "uploadData">
				<p id = "subHeading" >
					Need to upload data or reports?
				</p>
				
				<p id = "uploadDesc" >
					Simply upload your data or reports using the form below.
			
				</p>
				
				<div id = "dataSpec" > <!--class from bootstrap -->
				
					<form action=""> <!-- inside quotes, put /page.php -->
						
						<p> What is the format of your file? </p>
						
						<label class = "radio-inline"><input type="radio" name="fileFormat" value="csv" checked> CSV </label>
						<label class = "radio-inline"><input type="radio" name="fileFormat" value="doc"> DOC </label>
						<label class = "radio-inline"><input type="radio" name="fileFormat" value="edf"> EDF </label>
						
						
						
						<p> Do you want this to be public or private (please refer to our privacy policy)? </p>
						
						<label class = "radio-inline"><input type="radio" name="filePrivacy" value="private" checked> Private </label>
						<label class = "radio-inline"><input type="radio" name="filePrivacy" value="public"> Public </label>
						
						<div id = "dataSubmit">
							<input type="submit" value="Submit">
						</div>
					</form>
					
					
					
					
				
				</div>
			
			</div>
		
		
		</div>
		
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>