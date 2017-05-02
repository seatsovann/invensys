
function convert_upper_case(input) {

	 input.value = input.value.toUpperCase();
	// body...
}

function change_profile_img(agr) {

//	alert("You leave me alone !");
	// body...
}


$(document).ready(function(){

  			/*	$("#inputEmail").focusin(function(){

  					alert("I love you ");

  				}); */
  				var usr;

  				$("#inputEmail").focusout(function(){

  					if (usr == "SOVANN"){
  						$("#profile-img").attr('src','../source/img/sovann.jpg');
  					}else if(usr == "MENGHOUR"){

  						$("#profile-img").attr('src','../source/img/menghour.jpg');	
  					}else if(usr == "SINA"){

  						$("#profile-img").attr('src','../source/img/sina.jpg');
  					}

  					else{
  					    $("#profile-img").attr('src','../source/img/login1.png');	
  					}

  					

  				});

  				$("#inputEmail").keyup(function(){

  					this.value = this.value.toUpperCase();
  					usr = this.value;

  				});

  				$("#btn-signin").click(function(){

  					//alert("Fuck please enter password !");

  					var pwd = $("#inputPassword").val();
  					//ert(pwd);

  					if (pwd == "apple"){

  						window.location.href = "../home";
  					}else{

  						alert("Sorry your password is incorrect !");
  					}

  				});

  				$("#forgot-pwd").click(function(){

  					//window.location.replace("http://www.google.com","_blank");
  					//window.location.href = "http://www.google.com";
  					window.open("https://www.fb.com","_blank");

  				});



});