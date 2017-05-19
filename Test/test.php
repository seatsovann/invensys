<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
$q = intval($_GET['q']);
/*

$con = mysqli_connect('localhost','root','s0vann','inventory');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"inventory");
$sql="SELECT * FROM tbl_user WHERE usr_id = '".$q."'";
$result = mysqli_query($con,$sql);
$info = mysqli_fetch_array($result);

echo $info; */

$servername = "localhost";
	$username = "root";
	$password = "s0vann";
	$db = "inventory";

	try {

		$con = new PDO("mysql:host=$servername;dbname=$db",$username,$password);
		$con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Connceted !";
		 $stmt = $con->prepare("SELECT *  FROM tbl_user  where usr_id = '".$q."' ");
		 //$stmt = $con->prepare("SELECT *  FROM tbl_user  where usr_id = 'U0001' ");
		 $stmt->execute();
		$result = $stmt->fetchColumn(1);

		echo $result;

	}
	catch (PDOException $e){

		echo "Conntion failed: ". $e->getMessage();

	}




?>


</body>
</html>
