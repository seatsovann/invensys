<?php
session_start();
//session_destroy();
unset($_SESSION['LOGIN_USR_ADMIN']);
//session_unset();
//$_SESSION['LOGIN_USR'] = "";
header("location:../../");

?>