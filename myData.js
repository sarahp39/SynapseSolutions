// NOT INSIDE AN ONLOAD FUNCTION SINCE THE MY DATA PAGE NEEDS THIS JS AND INDEX.JS (MULTIPLE ONLOADS WILL OVERRIDE EACH OTHER)
    
    /*
    window.addEventListener("load", function()) {
        
    }
    
    */
	
	// IF USER IS CURRENTLY LOGGED IN
    if (localStorage.getItem("auth") != null) { //A USER IS LOGGED IN
	
		var selectedFile;

		window.addEventListener("load", function() {
			$("#shareBtn").click(function() {
				if (selectedFile != null) {
					this.disabled = true;
					var datatype = $("input[type='radio'][name='filter']:checked").val();
					var auth = localStorage.getItem("auth");
					var filename = selectedFile.split(".")[0];

					var xhr = new XMLHttpRequest();
					xhr.open("POST", "https://api.synapse-solutions.net/v1/" + datatype + "/?filename=" + filename);
					xhr.setRequestHeader("Authorization", auth);
					xhr.responseType = "arraybuffer";

					xhr.onload = function () {
						if (this.status === 200) {
							$("#shareBtn").prop("disabled", false);
							var blob = new Blob([xhr.response], {type: "text/plain"});
							var objectUrl = URL.createObjectURL(blob);
							console.log("downloading...");
							var dlink = document.createElement('a');
							dlink.href = objectUrl;
							dlink.download = filename + '_' + datatype;
							dlink.click();
						}
					};
					xhr.send();
				} else {
					alert("please select a file");
				}
			})

			$('#cleanBtn').on('click', function () {
				if (selectedFile != null) {
					var auth = localStorage.getItem("auth");
					this.disabled = true;
					var filename = selectedFile.split(".")[0];
					// $('#default-loading').css("display", "inline-block");

					var xhr = new XMLHttpRequest();
					xhr.open("GET", "https://api.synapse-solutions.net/v1/clean/?filename=test_rest");
					xhr.setRequestHeader("Authorization", auth);
					xhr.responseType = "arraybuffer";

					xhr.onload = function () {
						if (this.status === 200) {
							$("#cleanBtn").prop("disabled", false);
							var blob = new Blob([xhr.response], {type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"});
							var objectUrl = URL.createObjectURL(blob);
							console.log("cleaning...");
							var dlink = document.createElement('a');
							dlink.href = objectUrl;
							dlink.download = filename + '_cleaning';
							dlink.click();
						}
					};
					xhr.send();
				} else {
					alert("please select a file");
				}
			});
		});
		
    
    
        document.getElementById("viewBtn").onclick = function() {
            window.location.href = "fileContent.php";
        }
    
        // DISPLAYING A SPECIFIC FILE
        
        
        
        //HIDE TEAM INFO, HIDE ALL FROM PAGE? DON'T ALLOW TO REACH THIS PAGE???
        
        
        
        
        
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
                    
                    var name = document.createElement("a");
                    name.innerHTML = fileNames[t];
                    
                    fileDiv.appendChild(name);
                    
                    //fileDiv.innerHTML = fileNames[t];
                    fileDiv.id = fileNames[t];
                    fileList.appendChild(fileDiv);
					
					//CLICK BEHAVIOR OF FILES
                    $("#files div a").click(function(e) {
                        selectedFile = e.target.innerHTML;
                        $("#files div a").css("backgroundColor", "white");
                        e.target.style.backgroundColor = "#D3D3D3"; //.border
                        console.log(selectedFile);
                    });
                    
                    // fileClose
                    var fileClose = document.createElement("p");
                    fileClose.classList.add("close");
                    fileClose.innerHTML = "&times;";
                    
                    fileDiv.appendChild(fileClose);
                    
                    //fileDiv.appendChild(document.createElement("br"));
                    
                                       
                    
                    fileClose.addEventListener("click", function(e) {
                        e.preventDefault();
                        
                        var deleteFileModal = document.getElementById("deleteFileModal");
                        var noBtn = document.getElementById("noBtn");
                        var yesBtn = document.getElementById("yesBtn");
                        
                        deleteFileModal.style.display = "block";
                        
                        noBtn.onclick = function () {
                            deleteFileModal.style.display = "none";                        
                        }
                        
                        yesBtn.onclick = function() {
                            var xmlDel = new XMLHttpRequest();
                            var fileName = e.target.parentElement.id;
                            console.log(fileName + " being removed")
                            
                            xmlDel.open("DELETE", "https://api.synapse-solutions.net/v1/upload", true);
                            
                            xmlDel.setRequestHeader("Authorization", auth2);
                            
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
                            
                            deleteFileModal.style.display = "none";
                            
                        }
                        
                        
                        
                        
                        
                        
                        
                    });
                    
                    fileDiv.appendChild(fileClose);
                }
            }
        }
        
        xmlFiles.send();
		
		// CLICKING ANYWHERE UNSELECTS THE FILE SELECTED (IF ANY)
		window.onclick = function(event) {
			if (!event.target.matches('a')) {
				$("#files div a").css("backgroundColor", "white");
			}
		}
        
    } else {
        document.getElementById("contentArea").innerHTML = "Please log in to view your data!";
    }
    
    //DELETE SET UP
    