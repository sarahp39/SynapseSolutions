window.addEventListener("load", function() {
	
	
		// FILE UPLOAD
	
	if (window.File && window.FileReader && window.FileList && window.Blob) {
        var fileSubmitBtn =  document.getElementById("fileSubmitBtn");
        if (fileSubmitBtn != null) {
            console.log("upload listener added.")
            fileSubmitBtn.addEventListener('click', function (e) {
                console.log("reading upload")
                //Set the extension for the file 
                var fileExtension = /text.*/; 
				
				if (document.getElementById("inputFile") == null) {
					alert();
				}
				
                //Get the file object 
                var fileTobeRead = document.getElementById("inputFile").files[0];
                //Check of the extension match 
				
                if ((fileTobeRead != null) && fileTobeRead.type.match(fileExtension)) { //type
                    console.log("matched");
                    //Get the filename
                    var filename = document.getElementById("inputFile").value.split(/(\\|\/)/g).pop();

                    //Initialize the FileReader object to read the 2file 
                    var fileReader = new FileReader();
                    fileReader.onload = function (e) { 

                        var code = this.result.split(";base64,")[1]

                        console.log(code.length);
                        console.log(filename);

                        var ajax = new XMLHttpRequest();

                        var auth = localStorage.getItem("auth");

                        ajax.open("POST", "https://api.synapse-solutions.net" + "/v1/upload", true);
                        ajax.setRequestHeader("Authorization", auth);
                        ajax.setRequestHeader("filename", filename)
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
                        ajax.send(code);
                    } 
                    fileReader.readAsDataURL(fileTobeRead); 
                } 
                else { 
                    alert("Please select text file"); 
                }
        
            }, false);
        }
    } else { 
        alert("Files are not supported"); 
    } 
	
	
	/*
	if (document.getElementById("fileSubmitBtn") != null) {
		document.getElementById("fileSubmitBtn").addEventListener("click", addFile);
	}
	
	
	
	var inputFile = document.getElementById("inputFile");
	if (inputFile != null) {
		inputFile.addEventListener("change", addFile);
	}
	*/
	
	console.log("window onload done");

	});
