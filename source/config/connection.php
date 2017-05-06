<?php


	$servername = "localhost";
	$username = "root";
	$password = "s0vann";
	$db = "inventory";

	try {

		$con = new PDO("mysql:host=$servername;dbname=$db",$username,$password);
		$con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Connceted !";

	}
	catch (PDOException $e){

		echo "Conntion failed: ". $e->getMessage();

	}


  /* $servername = "localhost";
	$username = "root";
	$password = "s0vann";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully"; */

/*  $servername = "localhost";
	$username = "root";
	$password = "s0vann";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully"; */

?>