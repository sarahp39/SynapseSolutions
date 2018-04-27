	// NOT INSIDE AN ONLOAD FUNCTION SINCE THE MY DATA PAGE NEEDS THIS JS AND INDEX.JS (MULTIPLE ONLOADS WILL OVERRIDE EACH OTHER)
	
	/*
	window.addEventListener("load", function()) {
		
	}
	
	*/
	
	
	// IF USER IS CURRENTLY LOGGED IN
	if (localStorage.getItem("auth") != null) { //A USER IS LOGGED IN
	
		document.getElementById("viewBtn").onclick = function() {
			window.location.href = "fileContent.php";
		}
	
		// DISPLAYING A SPECIFIC FILE
		
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
		
		
		
		
		
		// DISPLAYING THE UPLOADED FILES AS A LIST, AND THE DELETE EVENT LISTENER TO EACH FILE
		
		var xmlFiles = new XMLHttpRequest();
		var auth2 = localStorage.getItem("auth");
		
		xmlFiles.open("GET", "https://api.synapse-solutions.net/v1/upload", true);
		xmlFiles.setRequestHeader("Authorization", auth2);
		
		console.log("new xml request");
		
		xmlFiles.onreadystatechange = function() {
			
			if (this.readyState == 4 && this.status == 200) {
				var fileNames = JSON.parse(this.responseText).fileNames; //the 'filenames' key in the JSON array
				
				var fileList = document.getElementById("files");

				for (t in fileNames) { 

					// Adds a single filename div
					var fileDiv = document.createElement("div");
					fileDiv.innerHTML = fileNames[t];
					fileDiv.id = fileNames[t];
					fileList.appendChild(fileDiv);
					
					// fileClose
					var fileClose = document.createElement("span");
					fileClose.classList.add("close");
					fileClose.innerHTML = "&times;";

					fileClose.addEventListener("click", function(e) {
						e.preventDefault();
						var xmlDel = new XMLHttpRequest();
						var fileName = e.target.parentElement.id;
						console.log(fileName + " being removed")
						
						xmlDel.open("DELETE", "https://api.synapse-solutions.net/v1/upload", true);
						
						xmlDel.setRequestHeader("Authorization", auth);
						
						xmlDel.setRequestHeader("filename", fileName);
						
						xmlDel.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								var removed = fileList.removeChild(e.target.parentElement);
								console.log(removed);
							} else if (this.readyState == 4 && this.status >= 300) {
								console.log(this.responseText);
							}
						}
						xmlDel.send();
						
					});
					
					fileDiv.appendChild(fileClose);
				}
			}
		}
		
		xmlFiles.send();
		
	} else {
		document.getElementById("myDataMainArea").innerHTML = "Please log in to view your data!";
	}
	
	//DELETE SET UP
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	