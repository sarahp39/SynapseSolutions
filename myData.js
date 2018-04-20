	// NOT INSIDE AN ONLOAD FUNCTION SINCE THE MY DATA PAGE NEEDS THIS JS AND INDEX.JS (MULTIPLE ONLOADS WILL OVERRIDE EACH OTHER)
	
	
	var xml = new XMLHttpRequest(); //ajax
	
	console.log("enter my data page");
			
	xml.open("GET", "https://api.synapse-solutions.net/v1/sumfile/?subject=test&session=rest", true); //specfile
			
	console.log("accessing data");
			
	xml.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var content = JSON.parse(this.responseText);
			
			for (t in content) {
				document.getElementById("key").innerHTML += t + "<br>";
				document.getElementById("value").innerHTML += content[t] + "<br>";
			}
			
			//console.log(content);
			
			//console.log(content.Subject); 
		}
	}
			
	xml.send();
	console.log("my data js file done");
	
	
	
	
	var xmlFiles = new XMLHttpRequest();
	var auth = localStorage.getItem("auth");
	
	xmlFiles.open("GET", "https://api.synapse-solutions.net/v1/upload", true);
	xmlFiles.setRequestHeader("Authorization", auth);
	
	console.log("new xml request");
	
	xmlFiles.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var fileNames = JSON.parse(this.responseText).fileNames; //the 'filenames' key in the JSON array
			
		
			for (t in fileNames) { 
				document.getElementById("files").innerHTML += fileNames[t] + "<br>";
				
			}
		}
	}
	
	xmlFiles.send();