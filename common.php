<?php
	function head() {
?>
		<!DOCTYPE html>
<!-- -->
<html>
	<head>
		<title>Synapse Systems</title>
		
		<link rel="stylesheet" type="text/css" href="index.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="index.js"></script>
		
	</head>

<?php
	}
	
	function topBanner() {
?>


	<div id="topBanner">
		<div>
		
		<!-- sign in/sign up buttons -->
		<button id = "loginBtn" >Sign in / Sign up</button> <!-- myBtn -->
		</div>
		
		<!-- sign in/up div -->
		<div id = "loginModal" class = "modal" > <!-- myModal -->
			<form id="sign-in"> <!-- modal content -->
			
				<span class = "close">&times;</span>
				
				<fieldset>
					<legend>Sign In</legend>
					Email <br> <input id="si-email" type="text"><br>
					Password <br> <input id="si-password" type="password"><br>
					<input type="submit" name="Submit">
				</fieldset>
				
				<div id="err"> Error message </div>
				
				
			</form>
			
						
			<form id="sign-up">
				<fieldset>
					<legend>Sign Up:</legend>
					Email: <input id="su-email" type="text"><br>
					Username: <input id="su-username" type="text"><br>
					First Name: <input id="su-fname" type="text">
					Last Name: <input id="su-lname" type="text"><br>
					Password: <input id="su-password" type="password"><br>
					Password Confirmation: <input id="su-passwordconf" type="password"><br>
					<input type="submit" name="Submit">
				</fieldset>
			</form>
			
			
		</div>
		
		
		
		
		
		
	</div>

<?php
	}

	function dropdowns() {
?>

		<div id="dropdown">
			<!--onclick="myFunction()"-->
			<button  class="dropbtn" id = "databtn" >DATA</button>
			
			<div id="dataDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="dataExplore.php">EXPLORE</a>
				<a href="dataLog.php">DATA LOG</a>
				<a href="dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			</div>
			
			
			<button  class="dropbtn" id = "resourcesbtn" >RESOURCES</button>
			
			<div id="resourcesDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="resourcesHowTo.php">HOW TOS</a>
				<a href="resourcesWhitepapers.php">WHITEPAPERS</a>
				<a href="resourcesBlogs.php">BLOGS</a>
				<a href="resourcesTerms.php">TERMS OF USE</a>
			</div>
			
			<button  class="dropbtn" id = "aboutbtn" >ABOUT</button>
			
			<div id="aboutDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="aboutUs.php">ABOUT US</a>
				<a href="aboutPricing.php">PRICING</a> <!-- prime? -->
				<a href="aboutNews.php">NEWS</a>
				<a href="aboutCareers.php">CAREERS</a>
				<a href="aboutContact.php">CONTACT</a>
			</div>
			
		</div>
		
<?php
	}
?>