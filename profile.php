<!DOCTYPE html>
<?php 
session_start();
require("function.php");
 ?>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
	<ul class="topnav">
  <li><a class="active" href="Profile.php">Profile</a></li>
  <li><a href="update.php">Update</a></li>
  <li><a href="#contact">Contact</a></li>
  <ul class="topnav right">
    <li><a href="#about">About</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</ul>

<div id="wrapper">
        <form action="main.php"  method="post">
            <fieldset>

            <?php 
           
            	$usersdata= get_user_data(get_id($_SESSION["username"])) ;
             ?>
                <legend> <?php echo $usersdata['First_name']; echo " 's ";   ?>  Profile </legend>
                <div>
                   User Name  : <?php echo $usersdata['User_name'] ; ?> 
                </div>
                <div>
                   First Name : <?php echo $usersdata['First_name'];  ?>
                </div>
                <div>
                   Last Name  :<?php echo $usersdata['Last_name'] ; ?> 
                </div>
                 <div>
                   Email Id   : <?php echo $usersdata['Email_id'] ; ?> 
                </div> 
                <div>
                   Age        : <?php echo $usersdata['Age'] ; ?> 
                </div>
                


            </fieldset>    
        </form>
    </div>



		

</body>
</html>