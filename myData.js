var xml = new XMLHttpRequest(); //ajax
			console.log("enter my data btn");
			
			xml.open("GET", "https://api.synapse-solutions.net/v1/sumfile/?subject=test&session=rest", true); //specfile
			
			console.log("accessing data");
			
			xml.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var content = JSON.parse(this.responseText);
					//document.getElementById("myDataMainArea").innerHTML = content;
					//console.log(content);
					
					console.log(content.Subject); 
				}
			}
			
			xml.send();
			console.log("my data js file done");