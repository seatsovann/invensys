
<html>
	
	<head>
		<title>Ajax Test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
		<script type="text/javascript">
				
			function ajaxtest(agr){
		//alert(agr);

				xmlhttp = new XMLHttpRequest();
				
				xmlhttp.onreadystatechange = function(){


					if (this.readyState == 4 && this.status == 200){

						document.getElementById("p1").innerHTML = this.responseText;


					}
				}

				xmlhttp.open("GET","getuser.php?q="+agr,true);
				xmlhttp.send();

			}

		</script> 

		



	</head>
	<body>
		<form>
			<p id="p1" >Testing is wating </p>
			<input type="text" id="txt1" placeholder="Type user id here"  /><br/>
			<button  type="button" id="btn1" onclick="ajaxtest(document.getElementById('txt1').value)">Get Data</button>
		</form>

	</body>

</html>