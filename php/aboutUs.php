<?php
	
	include("common.php");
	
	head();
	
	topBanner();

	logoBodyStart();

	dropdown2();

	dropdowns();
	

		?>
	
		
		<!-- landing page welcome images/texts/scroll bying stuff-->
		<div id = "aboutMain">
			<img src = "../img/team.png" alt = "Team Picture" class  = "pic" > 
			
			<p class = "headerB" >OUR MISSION IS TO HELP RESEARCHERS WITH THEIR EEG DATA WHILE GIVING EVERYONE ACCESS TO EXCITING DATA</p>
			
			<div id = "WebReqs">
				<div id = "probSol" class = "generalBorder" >
					<p class = "headerC">
						THE PROBLEM:
					</p>
					<p>
						The problem can best be described by a quote from our cofounder, Dr. Andrea Stocco.
					</p>
					<br>
					<p><em>
						"We currently have a terrible infrastructure for data analysis of EEG 
						data. Our pipeline for resting state EEG is established and has lead to 
						a lot of publications, but is very error-prone and written in R, with no 
						flexibility and no user interface… our interface for data analysis, sharing, 
						and Q/A is non-existent and rough."
</em></p>
				</div>
                
				<div id = "probSol" class = "generalBorder" >
					<p class = "headerC">
						THE SOLUTION:
					</p>
					<p>
						Synapse Solutions is an online platform that provides researchers with 
						a tool to work with and analyze electroencephalogram (EEG) data. This solution 
						that we have created will allow for a user friendly and less error prone analysis with 
						an interface that will provide an opportunity for customization of parameters. 
					</p>
				</div>
            </div>
			
			
			<div id = "us">
				<p class = "headerA" > THE TEAM: </p>

				<div class = "stocco">
					<img src = "../img/stocco.png" alt = "Dr. Andrea Stocco" class = "pic">
					<p class = "headerC"> Dr. Andrea Stocco </br>
					Founder</p>
					<p>
					Dr. Andrea Stocco, born in Palmanova, Italy, has recieved both 
					his Masters degrees and his Ph.D from the University of 
					Trieste, Italy. He continues to drive innovation through researching 
					how the brain learns and adapts. He started Synapse Solutions with just
					a few scripts and it has developed into the company it is today through his guidance.
					</p>

				</div>
				
				<div id = "teamBios">
					<div id = "col3">
						<img src = "../img/sarah.png" alt = "Sarah Phillips" >
						<p class = "headerC"> Sarah Phillips </p>
						<p class = "headerC"> Project Manager & Designer </p>
						<p >Sarah enjoys using her creativity and problem-solving skills at work. 
							She is a dedicated team player who enjoys constantly learning new things. 
							In her spare time, she plays ultimate frisbee, fantasy football, reads 
							and appreciates all things art.
						</p>
					</div>
					
					<div id = "col3">
						<img src = "../img/fred.png" alt = "Frederick Wijaya" >
						<p class = "headerC"> Frederick Wijaya </p>
						<p class = "headerC"> Developer </p>
						<p>Fred is a passionate and persistent critical thinker. 
							He has a desire to learn new methods of problem solbing and enjoys 
							learning new languages in his spare time.
						</p>
					</div>
					
					<div id = "col3">
						<img src = "../img/mathi.png" alt = "Mathi Manavalan" >
						<p class = "headerC"> Mathi Manavalan </p>
						<p class = "headerC"> Developer </p>
						<p >Mathi is an avid learned with a background in both information 
							technology and neuroscience researach. In her spare time, she loves 
							to go on runs with her dog and go bouldering with friends.
						</p>
					</div>
				
				</div>
			
			</div>

		</div>
		
		
	</div> <!-- body id-->
	
<?php
	bottomBanner();
?>
	
</html>