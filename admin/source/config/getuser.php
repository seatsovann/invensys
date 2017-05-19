
<?php

require_once ("..\..\..\source\config\connection.php");



	try{
			//header("Content-type: image/jpeg");

		$q = $_GET['q'];		
		 $stmt = $con->prepare("SELECT *  FROM tbl_admin  where usr_name = '".$q."' ");
		 //$stmt = $con->prepare("SELECT *  FROM tbl_user  where usr_id = 'U0001' ");
		 $stmt->execute();
		//$result = $stmt->fetchColumn(3);
		 $result = $stmt->fetch(PDO::FETCH_ASSOC);

		 $redcount = $stmt->rowCount();


		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['usr_img'] ).'" />';

		 if ($redcount === 1){
			echo  '<img id="profile-img" class="profile-img-card" src="data:image/jpeg;base64,'.base64_encode( $result['usr_img'] ).'" />'  ; 	
		 }else{

		 	echo '<img id="profile-img" class="profile-img-card" src="..\source\img\login1.png" />';
		 }
		



    
    

		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
		}
 




?>