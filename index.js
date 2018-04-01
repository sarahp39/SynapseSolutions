window.onload = function() {
		//document.getElementById("dropdown").onclick = myFunction;
		
		var btnArr = document.getElementsByClassName("dropbtn");
		
		for (i = 0, len = btnArr.length; i < len; i++){
			//console.log("hi");
			
			btnArr[i].onclick = myFunction;
		}
		
};



function myFunction() {
	
	var btnArr = document.getElementsByClassName("dropbtn");
	
	for (j = 0; j < btnArr.length; j++) {
		
		if (btnArr[j].id != this.id) {
			document.getElementById(btnArr[j].id.slice(0,-3).concat("Dropdown")).classList.remove("show");
			
		}
	}
	
	document.getElementById(this.id.slice(0,-3).concat("Dropdown")).classList.toggle("show");
	
	/*
	//if button's id is this, show corresponding dropdown
	if (this.id == "databtn") {
		
		//console.log(btnArr[1].id);
		//console.log(btnArr[2].id);
		
		//document.getElementById(btnArr[1].id).classList.remove("show");
		//document.getElementById(btnArr[2].id).classList.remove("show");
		
		document.getElementById("dataDropdown").classList.toggle("show"); //toggle so if databtn clicked second time, dropdown disappears
		
	} else if (this.id == "resourcesbtn") {		
		//document.getElementById("dataDropdown").classList.remove("show");
		//document.getElementById("aboutDropdown").classList.remove("show");
		
		document.getElementById("resourcesDropdown").classList.toggle("show");
		
	} else if (this.id == "aboutbtn") {		
		//document.getElementById("dataDropdown").classList.remove("show");
		//document.getElementById("resourcesDropdown").classList.remove("show");
		
		document.getElementById("aboutDropdown").classList.toggle("show");
		
	}
	
	*/
    //document.getElementById("resourcesDropdown").classList.toggle("show"); // id was myDropdown
}


// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) { //if click anywhere other than a dropdown button, 'hide' all dropdowns
  
  //then check the btn id 

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      //if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      //}
    }
  } 
}


// add links to each page that each link under each drop down links to