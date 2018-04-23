<?php
	
	include("common.php");
	
	head();
	
	topBanner();

	dropdowns();
		?>
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div id = "aboutMain">
			<img src = "../img/aboutLandingImg.jpg" id = "aboutLandingImg"> <!-- change image -->
			
			<p id = "missionText" >OUR MISSION IS TO HELP RESEARCHERS WITH THEIR EEG DATA WHILE GIVING EVERYONE ACCESS TO EXCITING DATA</p>
			
			
			<div id = "us">
				<p id = "theTeam"> THE TEAM: </p>
				
				<div id = "profilePics" >
					<img src = "../img/sarah.png" alt = "Sarah Phillips" >
					<img src = "../img/fred.png" alt = "Frederick Wijaya" >
					<img src = "../img/mathi.png" alt = "Mathi Manavalan" >
				
				</div>
				
				<div id = "teamBios">
					<div id = "sarahBio">
						<p class = "name"> Sarah Phillips <br>
							Project Manager & Designer
						</p>
						
						<p class = "desc" >Sarah enjoys using her creativity and problem-solving skills at work. She is a dedicated team player who enjoys constantly learning new things. In her spare time, she plays ultimate frisbee, fantasy football, and appreciates all things art.
						</p>
					
					</div>
					
					<div id = "fredBio">
						<p class = "name"> Frederick Wijaya <br>
							Developer
						</p>
						
						<p class = "desc" >Fred is a passionate and persistent critical thinker. He has a desire to learn new methods of problem solbing and enjoys learning new languages in his spare time.
						</p>
					
					</div>
					
					<div id = "mathiBio">
						<p class = "name"> Mathi Manavalan <br>
							Developer
						</p>
						
						<p class = "desc" >Mathi is an avid learned with a background in both information technology and neuroscience researach. In her spare time, she loves to go on runs with her dog and go bouldering with friends.
						</p>
					
					</div>
				
				</div>
			
			</div>
			
			
			<p id = "SSDesc">Like a lot of tech companies, we hire the best and brightest people. But what sets us apart is our focus on the "whole employee". We encourage our team to have an excellent work-life balance which isn't hard because we love what we do.
			</p>
		</div>
		
		<div id = "careersBtn">
			<a href = "aboutCareers.php">
		
				<button class = "navBtn">
					Go to Careers
				</button>
			
			</a>
			
		</div>
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>