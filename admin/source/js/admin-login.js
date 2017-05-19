
function convert_upper_case(input) {

	 input.value = input.value.toUpperCase();
	// body...
}

function change_profile_img(agr) {

//	alert("You leave me alone !");
	// body...
}


function leave(){


}


$(document).ready(function(){

       
        //$("#error_info").html("");

  			/*	$("#inputEmail").focusin(function(){

  					alert("I love you ");

  				}); */
  				var usr;

  				$("#inputEmail").focusout(function(){

          //  alert("Testing");

   			 	/*	if (usr == "SOVANN"){
  						$("#profile-img").attr('src','../source/img/sovann.jpg');
  					}else if(usr == "MENGHOUR"){

  						$("#profile-img").attr('src','../source/img/menghour.jpg');	
  					}else if(usr == "SINA"){

  						$("#profile-img").attr('src','../source/img/sina.jpg');
  					}

  					else{
  					    $("#profile-img").attr('src','../source/img/login1.png');	
  					}
           

  				*/
            //alert("Testing");
            //alert($("#inputEmail").val());
            //alert($("#pro-img").html())
            $.ajax({

                type: "GET",
                url: "source/config/getuser.php?q="+ $("#inputEmail").val(),
                dataType: "HTML",
                success: function(response){


                   //alert (response);

                    $("#pro-img").html(response);
                    $("#error_info").html("");

                 /* if (response == '<img id="profile-img" class="profile-img-card" src="..\source\img\login1.png" />'){

                      $("#error_info").html("Invalid username !");

                    }*/
                }

            });

  				});

  				$("#inputEmail").keyup(function(){

  					this.value = this.value.toUpperCase();
  					usr = this.value;

  				});

  				$("#btn-signin").click(function(){

            var pwd = $("#inputPassword").val();

            if (pwd == '123'){

              
            }

  				});

  				$("#forgot-pwd").click(function(){

  					//window.location.replace("http://www.google.com","_blank");
  					//window.location.href = "http://www.google.com";
  					window.open("https://www.fb.com","_blank");

  				});



});