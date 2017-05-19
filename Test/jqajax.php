<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
		$(document).ready(function(){

				$("#btn1").click(function(){
					
					$.ajax({

						
						/*	type: "GET",
							url: "../source/config/getuser2.php?q="+document.getElementById("txt1").value,
							dataType: "html",
							success: function(response){

								$("#p1").html(response);
							} */

					//Using json
					
					type: "GET",
					url: "getuser.php",
					//url: "getuser.php?q="+ document.getElementById("txt1").value ,
					dataType: 'json',
					//data : document.getElementById("txt1").value ,
				    success: function(data){
			            	var result =  "<img src=data:imgae/jpeg;base64," + data[1]['usr_img']+ "/>";

			            	//alert(result);

			            	//$("#p1").html("<img src=data:image/jpeg;base64.,'.base64_encode("+$data['image'])+ "'.')/>" ;
			            	//$("#p1").html(result);
			            	$("#p1").html(data[(document.getElementById("txt1").value) - 1]['usr_img']);
			            	
			            }

					
               });


					

				});


		});
</script>





</head>
<body>
	<p id="p1">Waitting for change ! </p>
	<input type="text" id="txt1" value="" placeholder="Type User Id here..."/>
	<br/><input type="button" id="btn1" value="Get Data" />
	

</body>
</html>

