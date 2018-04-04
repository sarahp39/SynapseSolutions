<?php

	function dropdowns() {
?>

		<div id="dropdown">
			<!--onclick="myFunction()"-->
			<button  class="dropbtn" id = "databtn" >DATA</button>
			
			<div id="dataDropdown" class="dropdown-content"> <!-- id = "myDropdown-->
				<a href="dataExplore.php">EXPLORE</a>
				<a href="dataContribute.php">CONTRIBUTE</a>
				<a href="myData.php">MY DATA</a>
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