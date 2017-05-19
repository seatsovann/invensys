$(document).ready(function(){

	$("#btn1").click(function(){

		alert("Testing");
	});

	$("#btn-signout").click(function(){

		//alert("I'll leaving you !");
		//window.open("../login","_self");
		document.location = "../source/config/logout.php";

	});

});