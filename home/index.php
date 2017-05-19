<?php
  session_start();

 if(!isset($_SESSION["LOGIN_USR"])){

    header("location:../login");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../source/style/home.css">
  <link rel="shortcut icon" href="../source/img/fav.jpg" type="image/x-icon"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../source/js/home.js"></script>
  <script src="../source/plugins/js/colResizable-1.6.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $('#maintbl').bootstrapTable({
            resizable: true,
            headerOnly: true,
            data: data
        });

    });
  </script>


  <!--<script src="../source/js/user_update.js"></script>-->

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a  href="#"> <img src="../source/img/logo.png" style="background-color: white; height: auto; " class="rounded mx-auto d-block" alt="..."> </a>
      <!--<a class="navbar-brand" href="#" ><img  src='../source/img/logo.png' style="background-color: white; width: 120%; height: 200%; " /></a>-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!--<ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>-->
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-user"> </span></a></li>-->
        
	       <li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			    <!--
          <img src="../source/img/sovann.jpg" style="width:25px; height:25px;" class="profile-image img-rounded"><small><?=$_SESSION['LOGINFULLNAME']?></small></a>
    -->
          <img id="profile" style="width: 25px; height: 25px;" class="profile-image img-rounded" <?=($_SESSION['LOGINIMG'])?>

          <small id="lbfname"><?=$_SESSION['LOGINFULLNAME']?></small></a>

			    <ul class="dropdown-menu">
					
			        <li data-toggle="modal" data-target="#setting" data-backdrop="static" >
			          <a href="#"><i class="fa fa-cog" >
			        </i><small class="glyphicon glyphicon-cog">
			        </small><small>
			         Setting
			         </small></a>

			        </li>
			        <li class="divider"></li>
			        <li data-toggle="modal" data-target="#logout" data-backdrop="static"><a href="#">
			        <i class="fa fa-sign-out"></i><small class="glyphicon glyphicon-off"> </small> <small>Sign-out</small></a>
			        </li>
			    </ul>

			</li>



<!--
         <div class="row">
        <div class="col-md-4 col-md-offset-3">
                <form action="" class="search-form">
                    <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </form>
            </div>
        </div>
        -->


<!--
				<form class="navbar-form navbar-left" role="search">
          
				    <div class="form-group">
				        <input type="text" class="form-control" placeholder="Search" id="txtsearch">
				    </div>
          
				    <button type="submit" class="btn btn-default" id="btn-search"> <span class="glyphicon glyphicon-search"></span></button>
				</form>

 
		-->
				       
      </ul>
    </div>
  </div>
</nav>
 

<br/><br/><br/>
<!-- 16:9 aspect ratio -->
<section class="content-area">
    <div class="table-area">
      <p id="tb-view" style="margin-top: 5px;">
    <!--  <table class="responsive-table table" id="table">
        <thead>
          <tr>
            <th>Last name</th>
            <th>Points</th>
            <th>Content</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Smith</td>
            <td>50</td>
            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
          <tr>
            <td>Smith</td>
            <td>50</td>
            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
          <tr>
            <td>Smith</td>
            <td>50</td>
            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
          <tr>
            <td>Smith</td>
            <td>50</td>
            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>
            <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
          </tr>

        </tbody>
      </table>-->
      </p>
    </div>
  </section>
<!--
<div class="embed-responsive embed-responsive-16by9" class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="home-content.php" style="background-color: red;"> </iframe>
</div>
-->
 <div class="modal fade" id="setting" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"  id="setting-dialog">&times;</button>
          <h4 class="modal-title"><b style="color:rgb(248, 146, 29)">Setting</b> </h4>
        </div>
        <div class="modal-body">
             <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading" style="cursor: pointer;"  data-toggle="collapse" data-target="#gs-collapse" ><b style="color:rgb(248, 146, 29)">General</b></div>

                        <div id="gs-collapse" class="collapse">
                       <!-- <img id="imgtest" src="..."/>-->
                        <p id="gen-error" style="margin-top:5px; margin-left:10px"></p>
                        <div class="panel-body">

                            <div class="row">
                                
                                <div  class="col-xs-9">
                                 <form class="form-inline" style="margin-left:10px;" name = "frm-gen-setting">
                                  <div class="row">
                                    <div class="form-group ">
                                          <label for="txtfname">Full Name: </label>
                                          <input type="text" id="txtfname"  class="form-control" value="<?=$_SESSION['LOGINFULLNAME']?> " autofocus />
                                    </div>
                                  </div>

                                  <div class="row" style="margin-top:80px">
                                    <div class="form-group">
                                        
                                        <button type="button" id="btn-gen-setting-change" class="btn btn-primary"  >Change</button>
                                        
                                        <!--<input type="file" class="btn btn-primarry" name="pic" accept="image/*"> -->
                                        <span class="btn btn-info btn-file">
                                            Browse <input  type="file" accept="image/*" id="btn-img-browse">
                                        </span>
                                        <button type="button" id="btn-gen-cacnel" class="btn btn-warning" data-toggle="collapse" data-target="#gs-collapse">Close</button>
                                     <!--  <button type="button" id="btn-test" class="btn btn-warning" name="gen-change">Test</button>
                                        <img id="imgTest" width="50px" height="50px" src=""/> -->
                                    </div>
                                  </div>
                                  <!--<div row>
                                      <label>Testing</label>
                                  </div> -->
                                  </form>
                                </div>
                                 <div class="col-xs-3">
                                 
                                     <!--<img  src="../source/img/sovann.jpg" class="img-rounded" class="img-responsive" alt="Seat Sovann" width="90" height="100"> -->
                                     <b>
                                     <!--<img id="pro-img-preview" style="width: 120px; height: 150px;" class="profile-image img-rounded" <?=($_SESSION['LOGINIMG'])?> </img>-->
                                     <!-- <img id="pro-img-preview" style="width: 120px; height: 150px;" class="profile-image img-rounded" src="../source/img/sovann.jpg" /> -->
                                     <img id="pro-img-preview" style="width: 120px; height: 150px;" class="profile-image img-rounded" <?=$_SESSION['LOGINIMG']?>
                                    
                                     </b>



                                </div>

                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading" data-toggle="collapse" data-target="#sec-setting" style="cursor: pointer;"><b style="color:rgb(248, 146, 29)">Security</b></div>
                        <div id="sec-setting" class="collapse">
                            <p id="error-info" style="margin-top:5px; margin-left:10px;"></p>
                            <div class="form-group" style="margin-left:10px;margin-top:10px;">
                                <div class="form-inline">
                                    <!--<label for="cur_pwd"> Current Password: </label> -->
                                    <input type="password" id="cur_pwd" class="form-control" placeholder="Current Password" autofocus />
                                </div>
                                <div class="form-inline" style="margin-top:10px;">
                                    <!--<label for="cur_pwd"> New Password: </label>-->
                                    <input type="password" id="new_pwd" class="form-control" placeholder="New Password"/>
                                </div>
                                <div class="form-inline" style="margin-top:10px;">
                                    <!--<label for="cur_pwd"> Confirm Password: </label>-->

                                    <input type="password" id="con_new_pwd" class="form-control" placeholder="Confirm new Password"/>
                                </div>
                                <div class="form-inline" style="margin-top:10px;">
                                    <button type="submit" class="btn btn-primary" id="btn-pwd-change" disabled>Change</button>
                                    <button type="button" class="btn btn-warning"  id="btn-pwd-cancel" data-toggle="collapse" data-target="#sec-setting">Close</button> 
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
        
      </div>
      
    </div>
  </div>
  
  <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b style="color:rgb(248, 146, 29)">Sign Out Confirm</b></h4>
        </div>
        <div class="modal-body">
          <p style="color:rgb(248, 146, 29)"><b>Do you wish to sign out from system?</b></p>
          <button type="button" id="btn-signout" class="btn btn-success">Sign Out</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
      
    </div>
  </div>

</body>
</html>

