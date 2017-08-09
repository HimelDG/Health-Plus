<!DOCTYPE html>
<?php 
session_start();
require("function.php");
 ?>
<html>
<head>
	<title>Profile Page</title>
	<link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
      <!-- VEGAS STYLE CSS -->
  <link href="assets/scripts/vegas/jquery.vegas.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
  <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<body>
<div class="navbar navbar-inverse navbar-fixed-top scrollclass" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HEALTH PLUS</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index_main.php">HOME</a></li>
                    <li><a href="#update">UPDATE</a></li>
                  
                    <?php 
                    $login_type=$_GET['log_type'];
                    if ($login_type=="Doctor") {  ?>

                      <li><a href="#Change Schedule">Change Schedule</a></li>


                    <?php  }
                    elseif ($login_type=="Patient") {  ?>
                      

                      <li><a href="#VISIT DOCTOR">VISIT DOCTOR</a></li>
                    

                    <?php } ?>

                     
                     <li><a href="logout.php">log out</a></li>
                    
                </ul>
            </div>
           
        </div>
    </div>
        <section class="for-full-back color-bg-one" id="about">
         <?php 
        
              //echo $login_type;
             
              
              $usersdata= get_user_data(get_id($_SESSION["username"],$login_type),$login_type) ;
             ?>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1>MY ACCOUNT</h1>
                </div>
                <div class="row text-center">

                    <div class="col-md-8 col-md-offset-2 ">
                        <h5>
                           
                       <?php  echo $usersdata['User_name'] ; ?>
                            
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="for-full-back color-white" id="about-team">

        <div class="container">
        <?php 
              
              $usersdata= get_user_data(get_id($_SESSION["username"],$login_type),$login_type) ;
             ?>
            <div class="row text-center g-pad-bottom">
                <div class="col-md-8 col-md-offset-2 ">
                    <h3>PROFILE</h3>
                    
                </div>

            </div>
            <div id="add">
                         <br />
                          
                          <b> First Name:  </b><?php  echo $usersdata['First_name'] ; ?> <br />
                          <b> Last Name:  </b><?php  echo $usersdata['Last_name']; ?> <br />
                          <b> Email:  </b><?php  echo $usersdata['Email_id'] ; ?> <br />
                         <b> Age:  </b><?php  echo $usersdata['Age'] ; ?>  <br />
                            <br /> <br /> <br /><br /><br /><br />
                         
                
            </div>
           

        </div>
    </section>


	    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>  
    <!-- VEGAS SLIDESHOW SCRIPTS -->
    <script src="assets/plugins/vegas/jquery.vegas.min.js"></script>
     <!-- SCROLL SCRIPTS -->
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>	

</body>
</html>