<?php
require_once("connection.php");
session_start();
//$q = $_GET['q'];
//$data = $_GET['data'];

$criteria = $_SESSION['LOGIN_USR'];
//$json_data = json_decode($_GET['q'],false);
//$json_data = json_decode($_POST['frm-gen-setting'],false);

$opt = $_POST['option'];


/*
// Path where the image is going to be saved
$filePath = $_SERVER['DOCUMENT_ROOT']. '/ima/temp2.png';
// Write $imgData into the image file
$file = fopen($filePath, 'w');
fwrite($file, $imgData);
fclose($file); */




//print($criteria);
	try{

	/*	$stm = $con->prepare("update tbl_user set fullname = '".$q."' where usr_name ='".$criteria."'");
		//$stm = $con->prepare("update tbl_user set usr_img = '".$q."' where usr_name ='".$criteria."'");
		$stm->execute();
		print("<span class='label label-success'>Update Success !</span>");
		//$_SESSION['LOGINFULLNAME'] = $q;
		$_SESSION['LOGINIMG'] = $q;
	*/
	//SqlQuery($q);
		//print $json_data['name'];
		//print($json_data[0]);
		//print($q);
		//print("sovann");
		//print ($json_data[0]);

//		print_r($json_data);
//		print_r($json_data->name);
		
	//checkUser($json_data->name);
		

        switch ($opt) {
			case 'general':

		
				
				//file_put_contents('img_tmp/img.jpeg', base64_decode($img_data_url));
					//file_put_contents($img_data, base64_decode($img_data_url));
				//$img_data = file_get_contents('img_tmp/img.jpeg');

				
				//$gen_update = $con->prepare("update tbl_user set usr_img = :img_data where usr_name='".$_SESSION['LOGIN_USR']."'");
				//$gen_update = $con->prepare("update tbl_user set fullname=:fullname, usr_img = ".$image." where usr_name='".$_SESSION['LOGIN_USR']."'");
				
				//$gen_update->bindparam(':fullname',$_POST['fullname'],PDO::PARAM_STR);
				//$gen_update->bindparam(':img_data',$lastData,PDO::PARAM_LOB);
				
				//$_SESSION['LOGINIMG'] = $_POST['image']; 
				
					
				$img_data_url = str_replace('data:image/jpeg;base64,','', $_POST['image']);			
				$img_data = base64_decode($img_data_url);
				$gen_update = $con->prepare("update tbl_user set fullname=:fullname,usr_img=:img_data where usr_name=:login_user");
				$gen_update->bindValue('img_data', $img_data);
				$gen_update->bindValue('fullname',$_POST['fullname']);
				$gen_update->bindValue('login_user',$_SESSION['LOGIN_USR']);
				try{

					$gen_update->execute();	
				    $_SESSION['LOGINFULLNAME'] = $_POST['fullname'];
				    $_SESSION['LOGINIMG'] = 'src="data:image/jpeg;base64,'.$img_data_url.'" />';
				    $output_arr['info'] = "<span class='label label-success'>Your setting have been updated !</span>";
			    	$output_arr['fullname'] = $_POST['fullname'];
			    	$output_arr['pro_img'] = $_POST['image'];
				}catch(PDOException $e){

					$output_arr['info'] = $e.getMessage();

				}
				
    
		
			    print_r(json_encode($output_arr));
		
				break;
			case 'security':
				
				//$cur_pwd = $json_data->cur_pwd;
				//$new_pwd = $json_data->new_pwd;
				 $cur_pwd = $_POST['cur_pwd'];
				 $new_pwd = $_POST['new_pwd'];

				$check_usr_exist= $con->prepare("select * from tbl_user where usr_name='".$_SESSION['LOGIN_USR']."' and usr_pwd='".$cur_pwd."'");
				$check_usr_exist->execute();
				$check_usr_result = $check_usr_exist->fetch(PDO::FETCH_ASSOC);
				

				//echo $check_usr_exist->rowCount();
				//echo $check_usr_result['usr_pwd'];

				if ($check_usr_exist->rowCount() == 1){

					$update_pwd = $con->prepare("update tbl_user set usr_pwd='".$new_pwd."' where usr_name='".$_SESSION['LOGIN_USR']."'");
					$update_pwd->execute();

					echo "<span class='label label-success'>Your password have been changed !</span>";

				}else {
					echo "<span class='label label-danger'>Your current password is incorrect !</span>";
					# code...
				}
				
				





				break;
			default:
				# code...
				break;
		}



	}catch(PDOException $e){

		print($e->getMessage());

	}

	$haveUser = null;


	function checkUser($data){
	

		$stm = $con->prepare("select * from tbl_user where usr_name ='".$data."'");
		$stm->execute();
		//$result = $stm->fetch(PDO::FETCH_ASSOC);
		$result = $stm->rowCount();
		
		echo  $result;
		

		
	}
	









function SqlQuery($opt){

	switch ($opt) {
		case '1':
			# code...
			echo "I'm testing fn 1";
			break;
		case '2':
			echo "I'm testing fn2" ;
			break;
		case '3':
			echo "I'm testing fn3";
			break;
		default:
			# code...
			break;
	}
}

function base64_to_jpeg($base64_string, $output_file) {
    // open the output file for writing
    $ifp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode( ',', $base64_string );

    // we could add validation here with ensuring count( $data ) > 1
    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

    // clean up the file resource
    fclose( $ifp ); 

    return $output_file; 
}


?>

