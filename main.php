<html>
<head>
<title>Insert Page</title>
</head>
<body>

<?php


require("dbc.php");

	//echo "$l1";
	//echo "$l2";
if(isset($_POST['login']))
{

		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			//echo 'username';

			$username=mysql_escape_string($_POST['username']);
			$password=mysql_escape_string($_POST['password']);
			$l=$_POST['login_type'];
			
			if($l== "Patient")
			{
				$get_username = "select * from user where User_name= '$username'";

			}
			elseif ($l== "Doctor") {
				# code...
				$get_username = "select * from doctor where User_name= '$username'";
			}
			
			
			$result1 =mysql_query($get_username,$con);

			$numrow = mysql_num_rows($result1);
			if($numrow != 0)
			{
				while ($row=mysql_fetch_assoc($result1))
				{
					# code...
							$db_username=$row["User_name"];
							$db_password=$row["Password"];
							printf("%s %s",$row["User_name"],$row["Password"]);
							#header("location: login.php?feedback= log in successfull.");
							#echo $db_username;
							#echo $db_password;

				}
				if($username==$db_username && $password==$db_password)
				{


					session_start();

					


					$_SESSION['username']=$db_username;
					//$_SESSION['logtype']=$l;
					//header("location: login.php?feedback= log in successfull.");

					if($l=="Patient")
					header("location: profile_main.php?log_type=Patient");
					elseif($l=="Doctor")
					header("location: profile_main.php?log_type=Doctor");
					elseif($l=="Service Provider")
					header("location: profile_main.php?log_type=Service Provider");
				}
				else
				{
					header("location: index_main.php?feedback= Incorrect passowrd.");
				}
			}

			else
			{
				header("location:index_main.php?feedback=Username is not valid.");
			}
			

			
				
			#mysql_close($con);
		}
		else
		{


			header("location: index_main.php?feedback= *All fields are required");
		}

}
elseif (isset($_POST['location_search'])) {
	
	$loc=$_POST['location'];
    
    $loc_query= " select bb.Bbank_name,bb.Bbank_address,bb.Contact_no  from location l join blood_bank bb on (l.Location_id=bb.Location_id) where l.Location_name= '$loc' ";
	
	//$check = "select * from user where User_name= '$l1' and Password = '$l2' ";
	//$result2 =mysql_query($loc_query,$con);


	if(!mysql_query($loc_query,$con))
	{
		echo 'Failure in data searching';
	}
	else
		echo 'seacrhing successfull Successful';
	
	
	
		
	mysql_close($con);
}


?>


</body>
</html>