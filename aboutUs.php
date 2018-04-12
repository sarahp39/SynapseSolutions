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
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div id = "aboutMain">
			<img src = "aboutLandingImg.jpg" id = "aboutLandingImg"> <!-- change image -->
			
			<p id = "missionText" >OUR MISSION IS TO HELP RESERACHES WITH THEIR EEG DATA WHILE GIVING EVERYONE ACCESS TO EXCITING DATA</p>
			
			
			<div id = "us">
				<p id = "theTeam"> THE TEAM: </p>
				
				<div id = "profilePics" >
					<img src = "sarah.jpg" alt = "Sarah Phillips" >
					<img src = "fred.jpg" alt = "Frederick Wijaya" >
					<img src = "mathi.jpg" alt = "Mathi Manavalan" >
				
				</div>
				
				<div id = "teamBios">
					<div id = "sarahBio">
						<p id = "name"> Sarah Phillips <br>
							Project Manager & Designer
						</p>
						
						<p>Sarah enjoys using her creativity and problem-solving skills at work. She is a dedicated team player who enjoys constantly learning new things. In her spare time, she plays ultimate frisbee, fantasy football, and appreciates all things art.
						</p>
					
					</div>
					
					<div id = "fredBio">
						<p id = "name"> Frederick Wijaya <br>
							Developer
						</p>
						
						<p>Fred is a passionate and persistent critical thinker. He has a desire to learn new methods of problem solbing and enjoys learning new languages in his spare time.
						</p>
					
					</div>
					
					<div id = "mathiBio">
						<p id = "name"> Mathi Manavalan <br>
							Developer
						</p>
						
						<p>Mathi is an avid learned with a background in both information technology and neuroscience researach. In her spare time, she loves to go on runs with her dog and go bouldering with friends.
						</p>
					
					</div>
				
				</div>
			
			</div>
			
			
			<p id = "SSDesc">Like a lot of tech companies, we hire the best and brightest people. But what sets us apart is our focus on the "whole employee". We encourage our team to have an excellent work-life balance which isn't hard because we love what we do.
			</p>
		</div>
		
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>