<?php
	
	include("common.php");
	
	head();
?>
	
	
	<div id="topBanner">
		<div>
		<!-- sign in/sign up buttons -->
		<button id = "loginBtn" >Sign in / Sign up</button> <!-- myBtn -->
		</div>
		
		
		<div id = "loginModal" class = "modal" > <!-- myModal -->
			<form id="sign-in"> <!-- modal content -->
			
				<span class = "close">&times;</span>
				
				<fieldset>
					<legend>Sign In:</legend>
					Email: <input id="si-email" type="text"><br>
					Password: <input id="si-password" type="password"><br>
					<input type="submit" name="Submit">
				</fieldset>
				
			</form>
			
		</div>
		
	</div>
	
	
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
		<div id = "landingDisplay">
			
		</div>
		
		
		<div id = "bottomHalf">
			<p>
			With Synapse Systems, you can . . .
			</p>
			
			<button id = "startBtn">
				Start for Free
			</button>
		</div>
		
		
	</div> <!-- body id-->
	
	
	<div id = "bottomBanner">
	
	</div>
	
</html>