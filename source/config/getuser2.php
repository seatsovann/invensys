<?php

require_once("connection.php");
try{
			//header("Content-type: image/jpeg");

		$q = $_GET['q'];		
		 //$stmt = $con->prepare("SELECT *  FROM tbl_user  where usr_name = '".$q."' ");
		 $stmt = $con->prepare("SELECT *  FROM tbl_dept ");
		 //$stmt = $con->prepare("SELECT *  FROM tbl_user  where usr_id = 'U0001' ");
		 $stmt->execute();
		//$result = $stmt->fetchColumn(3);
		 $result = $stmt->fetch(PDO::FETCH_ASSOC);

		 $redcount = $stmt->rowCount();


		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['usr_img'] ).'" />';
		$json_data  =  array("id" => $result['usr_id'], "name" =>$result['usr_name']);
		//$json_data  =  array($result['usr_id'], $result['usr_name']);


		  //echo json_encode($json_data);
		 //echo ("I love you, Qlang !");
		//echo ($json_data[1]);
		
		echo json_encode($result);


    
    

		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
		}



?>