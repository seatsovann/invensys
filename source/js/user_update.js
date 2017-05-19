

function updateUserinfo() {


	//alert("Testing");
	var fullname = document.getElementById("txtfname").value;
	 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("gen-error").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../source/config/user_update.php?q="+ fullname, true);
  xhttp.send();
	// body...
	

	

}