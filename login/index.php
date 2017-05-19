<?php
  
  require_once("../source/config/connection.php");
  //require_once("../source/config/session.php");
  $error = "";
  
  session_start();  

  if (isset($_SESSION["LOGIN_USR"])){
    header("location:../home");
  }

  
  if ($_SERVER["REQUEST_METHOD"] == "POST"){


      if (!isset($_POST["btn-signin"])){
           // echo "Testing";
          $usrname = !empty($_POST['usrname']) ? trim($_POST['usrname']) : null;
          $pwd = !empty($_POST['pwd']) ? trim($_POST['pwd']) : null;
          $sql = "select * from tbl_user where usr_name = '$usrname' and usr_pwd = '$pwd' ";
          $sql_stm = $con->prepare($sql);
          $sql_stm->execute();
          $data = $sql_stm->fetch(PDO::FETCH_ASSOC);
          $datacount = $sql_stm->rowCount();

        
          if ($datacount == 1){

              $_SESSION["LOGIN_USR"] = $data['usr_name'];

              //echo '$_SESSION["LOGIN_USR"]';
             header("location:../home");


          }else{

            $error = '<span class="label" style="color:orange; font-size:14px;">Invalid username or password !</span>';
          }
        
          

      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="..\source\style\login.css">
  <link rel="shortcut icon" href="../source/img/fav.jpg" type="image/x-icon"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="..\source\js\login.js"></script>
  

</head>
<body>



<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
           <p id="pro-img"> <img id="profile-img" class="profile-img-card" src="..\source\img\login1.png" /> </p>
            <p id="profile-name" class="profile-name-card"></p>
            <p id="error_info"> <?=$error?></p>
            <form class="form-signin" action="" method="POST" >
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="usrname" id="inputEmail" class="form-control" class="text-uppercase" placeholder="Username" required autofocus  ">
                <input type="password" name = "pwd" id="inputPassword" class="form-control" placeholder="Password" required>
            <!--    <div id="remember" class="checkbox" >
                    <label>
                        <input type="checkbox" value="remember-me" > Remember me 
                    </label>
                </div> -->
                <button type="submit" id="btn-signin" class="btn btn-lg btn-primary btn-block btn-signin" >Sign in</button>
            </form><!-- /form -->
          <!--  <a href="#" class="forgot-password" id="forgot-pwd">
                Forgot the password?
            </a -->
        </div><!-- /card-container -->
    </div><!-- /container -->

</body>
 
</html>

