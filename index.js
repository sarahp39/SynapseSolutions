window.onload = function() {
		//document.getElementById("dropdown").onclick = myFunction;
		
		var btnArr = document.getElementById("dropdown").getElementsByClassName("dropbtn");
		
		for (i = 0, len = btnArr.length; i < len; i++){
			console.log("hi");
			
			btnArr[i].onclick = myFunction;
		}
		
};



function myFunction() {
	
	//if button's id is this, show corresponding dropdown
	
	if (this.id == "databtn") {
		document.getElementById("dataDropdown").classList.toggle("show");
		
	} else if (this.id == "resourcesbtn") {
		document.getElementById("resourcesDropdown").classList.toggle("show");
		
	} else if (this.id == "aboutbtn") {
		document.getElementById("aboutDropdown").classList.toggle("show");
		
	}
	
	
    //document.getElementById("resourcesDropdown").classList.toggle("show"); // id was myDropdown
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// add links to each page that each link under each drop down links to