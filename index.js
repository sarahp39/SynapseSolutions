var modal;

var auth;

window.onload = function() {
		//document.getElementById("dropdown").onclick = myFunction;
		
		console.log("onload toggle");
		logToggle();
		
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
		
		
		//var auth; //so its accessible outside
		
		
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
					
					auth = this.getResponseHeader("Authorization");
					console.log(auth);
					localStorage.setItem('auth', auth);
					
					//logToggle();
					
					location.reload(); //refreshes page, which then runs the logToggle function from the beginning of the onload function
				} else if (this.readyState == 4 && this.status >= 300) {
					var err = document.getElementById("err");
					err.innerHTML = "error: " + this.responseText;
				}
			}
			
			
			ajax.send(json);
			
			//console.log("sign in toggle, " + auth);
			
			document.getElementById("loginModal").style.display = "none";
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
                auth = this.getResponseHeader("Authorization");
                console.log(auth);
                localStorage.setItem('auth', auth);
				
				//logToggle();
				
                location.reload(); //refreshes page
            } else if (this.readyState == 4 && this.status >= 300) {
                var err = document.getElementById("err");
                err.innerHTML = "error: " + this.responseText;
            }
        }
        ajax.send(json);
		
		console.log("sign up toggle");
		
		document.getElementById("loginModal").style.display = "none";
    });
	
	
	
	// to make modal disappear after sign in and show username and user icon instead of sign in/sign up button
	
	
	
	
	
	//LOGOUT
	
	document.getElementById("logoutBtn").onclick = (function() {
        var ajax = new XMLHttpRequest();

        auth = localStorage.getItem("auth");

        ajax.open("DELETE", "https://api.synapse-solutions.net/v1/sessions/mine/", true);
        ajax.setRequestHeader("Authorization", auth);
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status < 300) {
                console.log(this.responseText);
                localStorage.removeItem("auth");
				
				//logToggle();
				
                location.reload();
            } else if (this.readyState == 4 && this.status >= 300) {
                var err = document.getElementById("err");
                err.innerHTML = this.responseText;
            }
        }
		
        ajax.send();
		
		console.log("logout toggle");
		
		
    });
	
	
	
	
	
	
	// DISPLAYING SUMMARY DATA ON MY DATA PAGE
	var myDataBtn = document.getElementById("myDataBtn");
	
	if (myDataBtn != null ) {
		
		myDataBtn.onclick = (function(e) { //onsubmit -- doing nothing here, button just to navigate to the my data page
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
	
	
}	
	
	





	
	
/*
	function addFile(e) {
		e.preventDefault();
		var file = document.getElementById("inputFile").files[0]; //e.target.files[0]; // get element inputFile
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
				
				//change pages here
				window.location.href = "myData.php";
				
				console.log("done");
				
			} else if (this.readyState == 4 && this.status >= 300) {
				var err = document.getElementById("err");
				err.innerHTML = "error: " + this.responseText;
			}
		}
		ajax.send(formData);
}
	
*/	
	
function logToggle() {
	if (localStorage.getItem("auth") == null) { //meaning user is not signed in
		console.log("toggle: signed out");
		//show log in options
		document.getElementById("loginBtn").style.display = "initial";
		document.getElementById("logoutBtn").style.display = "none";
		
	} else { //signed in
		console.log("toggle: signed in");
		document.getElementById("loginBtn").style.display = "none";
		document.getElementById("logoutBtn").style.display = "initial";
	}
	
	
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