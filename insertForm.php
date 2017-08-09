<html>


<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
<?php
     require("dbc.php");
     $checknew = "select * from location ";
     $new =mysql_query($checknew,$con);
     while ( $results[] = mysql_fetch_object ($new) );
     array_pop ( $results );
     mysql_close($con);
?>
    <div id="wrapper">
        <form action="insertData.php" method="post">
            <fieldset>
                <legend>Register Form</legend>
                <div>
                    <input type="text" name="username" placeholder="User Name"/>
                </div>

                <div>
                    <input type="text" name="firstname" placeholder="First Name"/>
                </div>
                <div>
                    <input type="text" name="lastname" placeholder="Last Name"/>
                </div>
                
                <div>
                    <input type="PASSWORD" name="pass" placeholder="Password"/>
                </div>
                <div>
                    <input type="text" name="age" placeholder="Age"/>
                </div>
                <div>
                    <input type="Email" name="email" placeholder="Email"/>
                </div>

                 <div>
                        <select id="" name="ID1">
     <?php foreach ( $results as $option ) : ?>
          <option value="<?php echo $option->Location_id; ?>"><?php echo $option->Location_name; ?></option> 
     <?php endforeach; ?>
</select>
                   
                </div>
                <div>
                    <?php 
                    if(isset($_GET["feedback"]) )
                        echo $_GET["feedback"];

                 ?>
                </div>


                   
                <input type="submit" name="user_reg" value="Submit"/>

            </fieldset>    
        </form>
    </div>
 <!-- CORE JQUERY  -->
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