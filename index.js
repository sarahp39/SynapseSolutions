var modal;

window.onload = function() {
		//document.getElementById("dropdown").onclick = myFunction;
		
		var btnArr = document.getElementsByClassName("dropbtn");
		
		for (i = 0, len = btnArr.length; i < len; i++){
			
			
			btnArr[i].onclick = myFunction;
		}
		
		console.log("hi");
		
		
		
		
		// LOGIN SET UP; CONNECT START FOR FREE BTN AS WELL
		
		
		
		// Get the modal
		modal = document.getElementById("loginModal");

		// Get the button that opens the modal
		var loginBtn = document.getElementById("loginBtn");
		
		// Get the other button that also opens the modal
		var startBtn = document.getElementById("startBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		
		// When the user clicks on the button, open the modal 
		loginBtn.onclick = function() {
			modal.style.display = "block";
		}
		if (startBtn != null) {
			startBtn.onclick = function() {
				modal.style.display = "block";
			}
		}
		

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}
		
		
		
		
		
		document.getElementById("sign-in").onsubmit = (function(e) {
			e.preventDefault();
			//console.log("signing in!");
			var ajax = new XMLHttpRequest();

			var email = document.getElementById("si-email").value;
			var password = document.getElementById("si-password").value;

			var obj = {
				"Email": email,
				"Password": password
			};

			var json = JSON.stringify(obj);

			ajax.open("POST", "https://api.synapse-solutions.net/v1/sessions/", true);
			
			ajax.onreadystatechange = function() {
				if (this.readyState == 4 && this.status < 300) {
					
					var auth = this.getResponseHeader("Authorization");
					console.log(auth);
					localStorage.setItem('auth', auth);
					//location.reload();
				} else if (this.readyState == 4 && this.status >= 300) {
					var err = document.getElementById("err");
					err.innerHTML = "error: " + this.responseText;
				}
			}
			
			
			ajax.send(json);
		});
		
		
		
		
		document.getElementById("sign-up").onsubmit = (function(e) {
        e.preventDefault();
        var ajax = new XMLHttpRequest();

        var email = document.getElementById("su-email").value;
        var username = document.getElementById("su-username").value;
        var fname = document.getElementById("su-fname").value;
        var lname = document.getElementById("su-lname").value;
        var password = document.getElementById("su-password").value;
        var passwordconf = document.getElementById("su-passwordconf").value;

        var obj = {
            "Email": email,
            "UserName": username,
            "FirstName": fname,
            "LastName": lname,
            "Password": password,
            "PasswordConf": passwordconf
        };

        var json = JSON.stringify(obj);

        ajax.open("POST", "https://api.synapse-solutions.net/v1/users/", true);
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status < 300) {
                var auth = this.getResponseHeader("Authorization");
                console.log(auth);
                localStorage.setItem('auth', auth);
                //location.reload(); refreshes page
            } else if (this.readyState == 4 && this.status >= 300) {
                var err = document.getElementById("err");
                err.innerHTML = "error: " + this.responseText;
            }
        }
        ajax.send(json);
    });
	
	
	// DISPLAYING SUMMARY DATA ON MY DATA PAGE
	var myDataBtn = document.getElementById("myDataBtn");
	
	if (myDataBtn != null ) {
		
		myDataBtn.onclick = (function(e) { //onsubmit
			//e.preventDefault(); //since button is linking to diff page
			/*var xml = new XMLHttpRequest(); //ajax
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
			console.log("my data js file done");*/
			
		});
		
		
	
	}
	
	
	
	
	// FILE UPLOAD
	
	var inputFile = document.getElementById("inputFile");
	if (inputFile != null) {
		inputFile.addEventListener("change", addFile);
	}
	
	
	console.log("window onload done");
}	





	
	
	
	function addFile(e) {
		e.preventDefault();
		var file = e.target.files[0];
		if(!file){
			return;
		}
		var ajax = new XMLHttpRequest();

		var auth = localStorage.getItem("auth");

		var formData = new FormData()
		formData.append("file", file)

		ajax.open("POST", "https://api.synapse-solutions.net" + "/v1/upload", true);
		ajax.setRequestHeader("Authorization", auth);
		ajax.onreadystatechange = function() {
			if (this.readyState == 4 && this.status < 300) {
				var auth = this.getResponseHeader("Authorization");
				console.log("done");
			} else if (this.readyState == 4 && this.status >= 300) {
				var err = document.getElementById("err");
				err.innerHTML = "error: " + this.responseText;
			}
		}
		ajax.send(formData);
}
	
	
	
	
	
	

function myFunction() {
	
	var btnArr = document.getElementsByClassName("dropbtn");
	
	for (j = 0; j < btnArr.length; j++) {
		
		if (btnArr[j].id != this.id) {
			// slice to get rid of btn of the id
			document.getElementById(btnArr[j].id.slice(0,-3).concat("Dropdown")).classList.remove("show");
		}
	}
	
	document.getElementById(this.id.slice(0,-3).concat("Dropdown")).classList.toggle("show");
    //document.getElementById("resourcesDropdown").classList.toggle("show"); // id was myDropdown
}



// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
	
  if (!event.target.matches('.dropbtn')) { //if click anywhere other than a dropdown button, 'hide' all dropdowns

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      //if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      //}
    }
  }

	if (event.target == modal) {
		modal.style.display = "none";
	}
  
}


// add links to each page that each link under each drop down links to