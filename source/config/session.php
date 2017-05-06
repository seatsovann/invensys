
<?php

require_once("../source/config/connection.php");
session_start();
$login_usr = $_SESSION('LOGIN_USR');
$sql = "select * from tbl_user where usr_name ='$login_usr'";
$sql_stm = $con->prepare($sql);
$sql_stm->execute();
$data = $sql_stm->fetch(PDO::FETCH_ASSOC);
$login_session = $data['usr_name'];

if (!isset($_SESSION['LOGIN_USR'])){

	header("location:../../home");
}

?>