<?php
	function head() {
?>
		<!DOCTYPE html>
<!-- -->
<html>
	<head>
		<title>Synapse Systems</title>
		
		<link rel="stylesheet" type="text/css" href="../index.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="../index.js"></script>
		
	</head>

<?php
	}
	
	function topBanner() {
?>


	<div id="topBanner">
		<div>
		
		<!-- sign in/sign up buttons -->
		<button id = "signUpBtn" class = "logBtns" >Sign up</button> <!-- myBtn --> <!-- id = "loginBtn" -->
		
		<p class = "logBtns" >OR</p>
		
		<button id = "signInBtn" class = "logBtns" >Sign in</button>
		
		<button id = "logoutBtn" class  = "logBtns" > Logout </button>
		
		</div>
		
		<!-- sign in/up div -->
		<div id = "signInModal" class = "modal" > <!-- myModal -->
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
		</div>
		
		<div id = "signUpModal" class = "modal" >
						
			<form id="sign-up">
				
				<span class = "close">&times;</span>
			
				<fieldset>
					<legend>Sign Up:</legend>
					
					Email <br> <input id="su-email" type="text"><br>
					Username <br> <input id="su-username" type="text"><br>
					First Name <br> <input id="su-fname" type="text"><br>
					Last Name <br> <input id="su-lname" type="text"><br>
					Password <br> <input id="su-password" type="password"><br>
					Password Confirmation <br> <input id="su-passwordconf" type="password"><br>
					
					<input type="submit" name="Submit">
				</fieldset>
			</form>
			
			
		</div>	
		
	</div>
	
		
	
	<div id = "spaceBelowTopBanner">
	<!-- only necessary if the top banner has a fixed position -->
	</div>

<?php
	}
	
	function dropdowns() { //diff for index, links go to php/
?>

		<div id="dropdown">
			<!--onclick="myFunction()"-->
			<button  class="dropbtn" id = "databtn" >DATA</button>
			
			<div id="dataDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="dataExplore.php">EXPLORE</a>
				<a href="myData.php">MY DATA</a>
				<a href="dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			</div>
			
			
			<button  class="dropbtn" id = "resourcesbtn" >RESOURCES</button>
			
			<div id="resourcesDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="resourcesTutorials.php">TUTORIALS</a>
				<a href="resourcesPublications.php">PUBLICATIONS</a>
			</div>
			
			<button  class="dropbtn" id = "aboutbtn" >ABOUT</button>
			
			<div id="aboutDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="aboutUs.php">ABOUT US</a>
				<a href="aboutPricing.php">PRICING</a> <!-- prime? -->
				<a href="aboutTerms.php">TERMS OF USE</a>
			</div>
			
		</div>
		
<?php
	}
	
	function bottomBanner() { // for all pages but index, cause the links are diff for index
?>
		<div id = "bottomBanner"> <!-- diff links from index page! -->
	
		<div id = "links">
			<div id = "dataDiv">
				<label>DATA</label>
				<br><br>
				
				<a href = "dataExplore.php">EXPLORE</a><br>
				<a href = "myData.php">MY DATA</a><br>
				<a href = "dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
			
			</div>
			
			<div id = "resourcesDiv">
				<label>RESOURCES</label>
				<br><br>
				
				<a href = "resourcesTutorials.php">HOW TOS</a><br>
				<a href = "resourcesPublications.php">PUBLICATIONS</a><br>
			
			</div>
			
			<div id = "aboutDiv">
				<label>ABOUT</label>
				<br><br>
				
				<a href = "aboutUs.php">ABOUT US</a><br>
				<a href = "aboutPricing.php">PRICING</a><br>
				<a href = "aboutTerms.php">TERMS OF USE</a>
			
			</div>
			
			<div id = "socialMediaDiv">
			
			</div>
	
		</div>
	</div>

<?php
		
	}
?>