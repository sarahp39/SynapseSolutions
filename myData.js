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
                    
                    var name = document.createElement("label");
                    name.innerHTML = fileNames[t];
                    
                    fileDiv.appendChild(name);
                    
                    //fileDiv.innerHTML = fileNames[t];
                    fileDiv.id = fileNames[t];
                    fileList.appendChild(fileDiv);
                    
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
        
    } else {
        document.getElementById("myDataMainArea").innerHTML = "Please log in to view your data!";
    }
    
    //DELETE SET UP
    