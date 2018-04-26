	// NOT INSIDE AN ONLOAD FUNCTION SINCE THE MY DATA PAGE NEEDS THIS JS AND INDEX.JS (MULTIPLE ONLOADS WILL OVERRIDE EACH OTHER)
	
	/*
	window.addEventListener("load", function()) {
		
	}
	
	*/
	
	var xml = new XMLHttpRequest(); //ajax
	
	var auth = localStorage.getItem("auth");
	
	console.log("enter my data page");
			
	xml.open("GET", "https://api.synapse-solutions.net/v1/sumfile/?subject=test&session=rest", true); //specfile
	
	xml.setRequestHeader("Authorization", auth);
			
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
	var auth2 = localStorage.getItem("auth");
	
	xmlFiles.open("GET", "https://api.synapse-solutions.net/v1/upload", true);
	xmlFiles.setRequestHeader("Authorization", auth2);
	
	console.log("new xml request");
	
	xmlFiles.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var fileNames = JSON.parse(this.responseText).fileNames; //the 'filenames' key in the JSON array
			
		
			for (t in fileNames) { 
				
				var file = document.createElement('div');
				file.class = 'file';
				file.innerHTML = fileNames[t]; //thats how you get the actual name of the file to show up
				
				document.getElementById("files").appendChild(file);
				
				document.getElementById("files").innerHTML += '<img id = "fileIcon" src = "../img/file.png" alt="file icon" >' + '<span class = "close" id = "fileClose" >&times;</span>' + '<br>';
				
				
				
				
				
				
			}
			
			//document.getElementById("files").innerHTML += '<img id = "fileIcon" src = "../img/file.png" alt="file icon" >';
			
		}
	}
	
	xmlFiles.send();
	
	
	
	//DELETE SET UP
	
	var xmlDelete = new XMLHttpRequest();
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	