<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory System/Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="..\source\style\login.css">
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
            <img id="profile-img" class="profile-img-card" src="..\source\img\login1.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" class="text-uppercase" placeholder="Username" required autofocus  ">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox" >
                    <label>
                        <input type="checkbox" value="remember-me" > Remember me 
                    </label>
                </div>
                <button id="btn-signin" class="btn btn-lg btn-primary btn-block btn-signin" >Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password" id="forgot-pwd">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->

</body>

 
</html>
