
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    
	for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    
	tablinks = document.getElementsByClassName("tablinks");
    
	for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    
	document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


if (localStorage.getItem("auth") != null) { //A USER IS LOGGED IN

	

	// DISPLAYING A SPECIFIC FILE
		
		var xml = new XMLHttpRequest(); //ajax
		
		var auth = localStorage.getItem("auth");
		
		//console.log("enter my data page");
				
		xml.open("GET", "https://api.synapse-solutions.net/v1/sumfile/?subject=test&session=rest", true); //specfile
		
		xml.setRequestHeader("Authorization", auth);
				
		console.log("accessing data");
				
		xml.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var content = JSON.parse(this.responseText);
				var count = 0;
				
				for (t in content) {
					count++;
					document.getElementById("key").innerHTML += t + "<br>";
					document.getElementById("value").innerHTML += content[t] + "<br>";
					
					if (count == 9) {
						break;
					}
				}
				
				//console.log(content);
				
				//console.log(content.Subject); 
			}
		}
				
		xml.send();
		console.log("my data js file done");
		
		
		
		
		
		
		
} else {
	document.getElementById("contentArea").innerHTML = "Please log in to view your data!";
}