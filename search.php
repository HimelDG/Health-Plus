<html>


<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
    <ul class="topnav">
  <li><a  href="Profile.php">Profile</a></li>
  <li><a class="active" href="search.php">Search</a></li>
  <li><a href="#contact">Contact</a></li>
  <ul class="topnav right">
    <li><a href="#about">About</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</ul>
    <div id="wrapper">
        <form action="showData.php" method="post">
            <fieldset>
                <legend>Search your nearest blood bank</legend>
                <div>
                    <input type="text" name="location_new" placeholder="Enter your Location"/>
                </div>
                   
                <input type="submit" name="location_search" value="search"/>

            </fieldset>    
        </form>
    </div>

</body>

</html>