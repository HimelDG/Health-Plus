<html>


<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
    <div id="wrapper">
        <form action="main.php"  method="post">
            <fieldset>
                <legend>Log In</legend>
                <div>
                    <input type="text" name="username" placeholder="User Name"/>
                </div>
                <div>
                    <input type="PASSWORD" name="password" placeholder="Password"/>
                </div>
                 <div>
                 	
                	<input type="submit" name="login1" value="Log In"/>	
                 </div>  
                

                <?php 
                	if(isset($_GET["feedback"]) )
                		echo $_GET["feedback"];

                 ?>

            </fieldset>    
        </form>
    </div>



</body>

</html>