<?php

	//$q = $_GET['q'];

	try{

		$con = new PDO("mysql:host=localhost;dbname=inventory","root","s0vann");
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Connected !";
	}catch(PDOException $e){

		echo "Connection fail: " .$e->getMessage();
	}


	//$sql = "select usr_img from tbl_user where usr_id = '".$q."'";
	$sql = "select usr_img from tbl_user ";
	

	//$sql = "select * from tbl_dept where dept_code= '".$q."'";
	//$sql = "select * from tbl_dept where dept_code= 'D0001' ";



	$sqlstm = $con->prepare($sql);
	$sqlstm->execute();
	//$result = $sqlstm->fetch(PDO::FETCH_ASSOC);
	$result = $sqlstm->fetchAll(PDO::FETCH_BOTH);

	foreach($result as $key=>$value){
    //$newArrData[$key] =  $result[$key];
    //$newArrData[$key]['usr_img'] = base64_encode($result[$key]['usr_img']);

    $newArrData[$key]['usr_img'] = '<img id="profile-img" width=50px height=50px class="profile-img-card" src="data:image/jpeg;base64,'.base64_encode($result[$key]['usr_img']).'" />'  ; 	
}

	header('Content-type: application/json');

	print(json_encode($newArrData));

	//$output[] = array('id' => $result[0],'username' => $result[1],'pwd' => $result[2]);
	//$output = array('Sovann','Seat');
	//$result = $sqlstm->fetch(PDO::FETCH_BOTH);

	//print(json_encode($output));
	//print_r($result);
	//print("<br/>");
	//print($result[0][0])
	//print($result['dept_name']);
	//print($result['dept_code']);
	//print($result[0]);
	/*
	$data = $sqlstm->setFetchMode(PDO::FETCH_BOTH);
	$data = $sqlstm->fetchAll(); */
	//echo $q === "" ? "No data !" : '<img src="data:image/jpeg;base64,'.base64_encode( $data['usr_img'] ).'" width="500" height="500" />' ;
	//echo json_encode($data);
	//echo $data;


	//echo $data['usr_name'];
   /* echo "<br/>";
	echo $data['usr_id'];
	echo "<br/>";
	echo $data['usr_pwd']; */


	
//	print $data['usr_name'];

	//echo "<p>" .$data['usr_name'] ."</p>";
	//$mydata = $data['usr_name'];

	//echo $mydata;


	


?>

