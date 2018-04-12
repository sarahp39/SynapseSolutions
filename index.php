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
				<button id = "startBtn">
					Start for Free
				</button>
			</div>
			
		</div>
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>