<?php
	function head() {
?>
		<!DOCTYPE html>
<!-- -->
<html>
	<head>
		<title>Synapse Systems</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		
		<p class = "logBtns" id = "or" >OR</p>
		
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

		<div class="dropdown">
						
			<button class ="dropbtn"  style= "background-image: url('../img/drop.png');" >
			
			</button>
			
			<div id="myDropdown" class="dropdown-content">
				<a href="dataUploadAnalysis.php">UPLOAD/ANALYSIS</a>
				<a href="terms.php">TERMS OF USE</a>
				<a href="aboutUs.php">ABOUT US</a>
			
			</div>
		</div>
		
<?php
	}
	
	function logoBodyStart() {
?>

<div id = "body"> <!-- REMOVE THIS BODY PORTION FROM COMMON PHP AND PUT BACK IN EVERY SEPARATE PHP FILE BC LOCATION OF IMG DEPENDS ON RELATIVE FILE -->
		<!-- <h1>Synapse Systems</h1> -->
		<a href = "../index.php">
		
			<img src = "../img/logo.png" alt="Synapse Systems logo" id = "logo" > <!-- looks blurry, get a better copy -->
			
		</a>
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
				<a href = "terms.php">TERMS OF USE</a>
			
			</div>
			
			<div id = "socialMediaDiv">
			
			</div>
	
		</div>
	</div>

<?php
		
	}
	
	function terms() {
?>
			
				<h1>Terms of Use</h1>

				<p>Welcome to our company, Synapse Solutions™. It is a platform service, herefore referred to as the “Synapse Solution Services”, for anyone to easily upload, clean and manipulate electroencephalogram (EEG) data. 
				These terms of use (“Terms”) are between Synapse Solutions and the subscribers to and users 
				of the Synapse Solutions Services.
				</p>
				<p>By accessing and using Synapse Solutions Services as a creator or user of the web 
				platform, you agree to be bound by these Terms. IF YOU DO NOT AGREE TO ALL OF THESE 
				TERMS, YOU ARE NOT AUTHORIZED TO SUBSCRIBE TO, ACCESS OR USE THE SYNAPSE SOLUTIONS 
				SERVICES IN ANY MANNER, AND YOU MUST STOP DOING SO IMMEDIATELY.
				</p>
				<p>(If you are subscribing on behalf of a corporation or other legally recognized 
				entity having the ability to enter into agreements, you must subscribe in the 
				name of your organization, and these Terms are legally binding between that organization 
				as well as individual users and creators acting for or on behalf of that organization.)
				</p>

				<h2>Maintenance, Suspension, Termination, & Modification of Service</h2>

				<p>Because the Synapse Solutions Services are evolving, we may change them or remove 
				features at any time, without notice. The Synapse Solutions Services also may be 
				temporarily unavailable from time to time for maintenance or other reasons.
				</p>
				<p>We reserve the right to deny, restrict, suspend, or terminate your access to and use 
				of all or any part of the Synapse Solutions Services at any time, for any reason with 
				or without prior notice or explanation, and without any liability whatsoever to you or 
				anyone else. In particular, Applications that contain content that we believe is inappropriate 
				may not be created, continued, enabled or supported with the Synapse Solutions Services.
				</p>

				<h2>Users</h2>

				<p>You must be 16 years or older to use the Synapse Solutions Services. Synapse Solutions is 
				defined by data, configuration, and content ("Creator Content"). You retain all rights in and 
				are solely responsible for any Creator Content that you create with the Synapse Solutions 
				Services and distribute to anyone including users. You represent and warrant that you own or 
				have acquired all of the necessary rights to use such Creator Content with the Synapse 
				Solutions Services and doing so does not misappropriate, infringe or violate in any way any 
				third party’s rights or violate any laws. Your use of Creator Content or User Content (defined 
				below) or both is solely and entirely at your own risk and you agree is governed solely and 
				exclusively by any agreement, terms or other understanding between you and those users. 
				You recognize that Synapse Solutions applications cannot be executed without the Synapse 
				Solutions Services that are a component of Synapse Solutions Content (defined below), and that 
				your rights in any Creator Content do not include any right to Synapse Solutions Content.
				</p>
				<h3>How Synapse Solutions can use Creator Content</h3>
				<p>You grant Synapse Solutions a non-exclusive, royalty-free, transferable, sublicensable, 
				worldwide license to use, store, display, reproduce, save, modify, create derivative works, 
				perform, and distribute your Creator Content on Synapse Solutions Services solely for the 
				purposes of operating, developing, improving, providing, and using the Synapse Solutions 
				Services. Nothing in these Terms shall restrict other legal rights Synapse Solutions may have 
				to Creator Content, for example under other licenses. We reserve the right to remove or 
				modify Creator Content for any reason, including Creator Content that we believe violates 
				these Terms or our policies.
				</p>

				<h2>Privacy</h2>
				<p>We care about and respect the privacy of your data.
				</p>
				<p>Synapse Solutions' services asks for and stores some of your personal contact information, 
				in particular your email address. Our service also collects and analyses service usage 
				data across all its users. This privacy policy explains what data is recorded in each 
				category and how this data is used.
				</p>
				<h3>Uploaded Data</h3>
				<p>The data used and collected by your applications resides in a third-party storage 
				provider (Amazon’s AWS). Our backend service does not persist this data. However, in order 
				to improve performance, we may temporarily cache data, images and other files.
				</p>
				<p>In order to interact with your data, our backend service maintains authentication (OAuth) 
				tokens that allow our software to act "on your behalf" to read and write data. These tokens 
				are securely stored along with your personal information.
				</p>
				<p>Our mobile client is designed to work offline. As a result, all uploaded data used by 
				the client can be cached locally. This data is not visible to others excluding employees 
				of Synapse Solutions and those you have chosen to share the data with (My Team). 
				</p>
				<h3>Data Security and Durability</h3>
				<p>We store user personal information and access tokens in databases hosted by 
				cloud-computing hosting providers. We take reasonable technical steps to protect your 
				information. However, we cannot guarantee that your information is immune to a breach in 
				the security and privacy mechanisms implemented by us and the hosting providers.
				</p>

				<h2>Synapse Solutions Content</h2>

				<p>All content on Synapse Solutions except User Content and/or Creator Content is the 
				proprietary property of Synapse Solutions. Subject to these Terms and any other applicable 
				agreement between you and Synapse Solutions, you are granted a non-exclusive and limited 
				right to access and use Synapse Solutions Services through all content Synapse Solutions makes 
				available to you therein in accordance with these Terms (website/ web platform). Unless 
				explicitly stated herein, nothing in these Terms shall be construed as conferring any other 
				rights or license to Synapse Solutions’s confidential information, confidential materials, 
				trade secrets or intellectual property rights, whether by estoppel, implication or otherwise. 
				</p>
				<p>Synapse Solutions Services is protected to the maximum extent permitted by copyright 
				laws and international treaties. You may not decompile or disassemble, reverse engineer or 
				otherwise attempt to discover any source code contained in the Synapse Solutions Services. 
				If you are a content owner and believe your content has been infringed by the Synapse 
				Solutions Services or Applications, please contact us through our website. All other 
				trademarks are property of their respective companies. All trademarks and registered 
				trademarks are protected by US and international trademark laws.
				</p>

				<h2>No Warranties</h2>

				<p>Synapse Solutions, and all content, third-party content, products and services 
				included in Synapse Solutions are provided “as is,” with no warranties whatsoever. Synapse 
				Solutions on its behalf and on behalf of its suppliers disclaims all warranties of any kind, 
				whether express or implied, including without limitation any warranty of merchantability 
				or fitness for a particular purpose, title or non-infringement. Synapse Solutions does not 
				represent or warrant that Synapse Solutions Services will meet your requirements or that 
				it will be uninterrupted, timely, secure, or error free. Access to and use of Synapse Solutions 
				Services is at your sole risk. Synapse Solutions and its Suppliers are not responsible for 
				any damage that results from your use of Synapse Solutions Services or Applications.
				</p>

				<h2>Limitation of Liability</h2>

				<p>Under no circumstances shall Synapse Solutions or its Suppliers be liable to you or 
				anyone including without limitation subscribers, users or creators of the Synapse Solutions 
				Services or Applications on account of (i) your use or misuse of or reliance on Synapse 
				Solutions or content contained thereon or (ii) your inability to use Synapse Solutions, or 
				the interruption, suspension, or termination of the sites related to Synapse Solutions Services 
				(and including such damages incurred by third parties).
				</p>
				<h3>Disclaimer of Certain Damages</h3>
				<p>You agree that Synapse Solutions and its Suppliers, and each of their respective 
				Officers, Directors, Stockholders, Members, and Employees are not and will not be liable 
				to you for incidental, special, indirect, punitive or consequential damages, even if they 
				were aware in advanced that such damages were possible.
				</p>
				<h3>Limitation of Liability</h3>
				<p>Limitation of Liability: In no event shall Synapse Solutions or its Suppliers, 
				or their respective officers, directors, stockholders, members, and employees be liable to 
				you for any damages arising out of your use of Synapse Solutions Services and Applications 
				in an amount that exceeds exceed $100. Such limitation of liability shall apply notwithstanding 
				any failure of essential purpose of any limited remedy and to the fullest extent permitted by law.
				</p>
				<p>Some jurisdictions do not allow the limitation or exclusion of liability for 
				incidental or consequential damages so some of the above limitations may not apply to you. 
				In these jurisdictions, however, Synapse Solutions’s liability will be limited to the 
				greatest extent permitted by applicable law.
				</p>

				<h2>Indemnity</h2>

				<p>You agree to indemnify and hold Synapse Solutions and its Suppliers, their subsidiaries 
				and affiliates, and each of their directors, officers, stockholders, members, agents, 
				contractors, partners and employees, harmless from and against any loss, liability, claim, 
				demand, damages, costs and expenses, including reasonable attorney’s fees, arising out of 
				your use of Synapse Solutions Services.
				</p>
					
				<h2>Changes in Terms of Use</h2>

				<p>We reserve the right to modify these Terms from time to time. If we modify these Terms, 
				we will indicate that we have done so by updating the date above. Your continued access 
				and use of Synapse Solutions Services constitutes your acceptance of any modified Terms.
				</p>	
				
			

<?php
	}
?>