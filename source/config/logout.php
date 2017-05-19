<?php
session_start();
//session_destroy();
unset($_SESSION['LOGIN_USR']);
unset($_SESSION['LOGINFULLNAME']);
unset($_SESSION['LOGINIMG']);
//session_unset();
//$_SESSION['LOGIN_USR'] = "";
header("location:../../login");

?>