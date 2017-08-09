<html>


<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
<?php
     require("dbc.php");
     $checknew = "select * from category ";
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
                    <input type="text" name="firstname" placeholder="First Name"/>
                </div>
                <div>
                    <input type="text" name="lastname" placeholder="Last Name"/>
                </div>
                <div>
                    <input type="text" name="username" placeholder="User Name"/>
                </div>
                <div>
                    <input type="PASSWORD" name="pass" placeholder="Password"/>
                </div>
                
                <div>
                    <input type="text" name="affiliation" placeholder="Affiliation"/>
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email"/>
                </div>
                <div> Category
                        <select id="" name="ID2">
     <?php foreach ( $results as $option ) : ?>
          <option value="<?php echo $option->Category_id; ?>"><?php echo $option->Speciality; ?></option> 
     <?php endforeach; ?>
</select>
                   
                </div>

                
                   
                <input type="submit" name="doc_reg" value="Submit"/>

            </fieldset>    
        </form>
    </div>

</body>

</html>