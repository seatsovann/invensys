
<?php

require_once ("connection.php");
session_start();


	try{
			//header("Content-type: image/jpeg");

		$q = $_GET['q'];		
		 $stmt = $con->prepare("SELECT *  FROM tbl_user  where usr_name = '".$q."' ");
		 //$stmt = $con->prepare("SELECT *  FROM tbl_user  where usr_id = 'U0001' ");
		 $stmt->execute();
		//$result = $stmt->fetchColumn(3);
		 $result = $stmt->fetch(PDO::FETCH_ASSOC);

		 $redcount = $stmt->rowCount();


		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['usr_img'] ).'" />';

		 
		 if ($redcount === 1){

		 	$_SESSION['LOGINFULLNAME'] = $result['fullname'];
		 	
		 	//$_SESSION['LOGINIMG'] = '<img  style="width:25px; height:25px;" class="profile-image img-rounded" src="data:image/jpeg;base64,'.base64_encode( $result['usr_img'] ).'" />'  ; 	

		 	$_SESSION['LOGINIMG'] = 'src="data:image/jpeg;base64,'.base64_encode( $result['usr_img'] ).'" />';
		 	
			echo  '<img id="profile-img" class="profile-img-card" src="data:image/jpeg;base64,'.base64_encode( $result['usr_img'] ).'" />'  ; 	
			//echo  '<img id="profile-img" class="profile-img-card" src="data:image/jpeg;base64,'.$result['usr_img'].'" />'  ; 	
			//$data = "src=".$result['img_test'] . "/>";

			//echo  '<img id="profile-img" class="profile-img-card '.$data  ; 	


		 }else{

		 	echo '<img id="profile-img" class="profile-img-card" src="..\source\img\login1.png" />';
		 }
		



    
    

		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
		}
 




?>