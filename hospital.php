<html>
<head>
<title>Register Page</title>
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
                    <input type="text" name="hospitalname" placeholder="Hospital Name"/>
                </div>
                <div>
                    <input type="text" name="hospitaladdress" placeholder="Hospital Adress"/>
                </div>
                <div>
                    <input type="text" name="contactinfo" placeholder="Contact Information"/>
                </div>
                <div>
                        <select id="" name="ID1">
     <?php foreach ( $results as $option ) : ?>
          <option value="<?php echo $option->Location_id; ?>"><?php echo $option->Location_name; ?></option> 
     <?php endforeach; ?>
</select>
                   
                </div>
                 <input type="submit" name="hospital_reg" value="Submit"/>  

            </fieldset>    
        </form>
    </div>

</body>

</html>