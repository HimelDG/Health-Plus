<html>
<head>
<title>Insert Page</title>
</head>
<body>

<?php

 require("dbc.php");

if(isset($_POST['bloodbank_reg']))
{
	$l_name = $_POST['ID1'];
	

	$b=$_POST['bloodbankname'];
	$b1=$_POST['bloodbankaddress'];
	$b2=$_POST['contactinfo'];
	
	
	
	$query1="insert into blood_bank(Bbank_name,Bbank_address,Contact_no,Location_id) values ('$b','$b1','$b2','$l_name')";
	//$query="insert into user(First_name,Last_name,Email_id) values ('$c','$c1','$c2')";

	if(!mysql_query($query1,$con))
	{
		echo 'Failure in data insertion';
	}
	else
		echo 'Insertion Successful';
		
	mysql_close($con);
}
elseif(isset($_POST['hospital_reg']))
{
	$l_name = $_POST['ID1'];
	

	$h=$_POST['hospitalname'];
	$h1=$_POST['hospitaladdress'];
	$h2=$_POST['contactinfo'];
	
	
	
	$query1="insert hospital(Hospital_name,Hospital_address,Contact_no,Location_id) values ('$h','$h1','$h2','$l_name')";
	//$query="insert into user(First_name,Last_name,Email_id) values ('$c','$c1','$c2')";

	if(!mysql_query($query1,$con))
	{
		echo 'Failure in data insertion';
	}
	else
		echo 'Insertion Successful';
		
	mysql_close($con);
}
else if(isset($_POST['user_reg']))
{
	
	
	if(!empty($_POST['username']) && !empty($_POST['pass']))
	{
		$c=$_POST['firstname'];
		$c1=$_POST['lastname'];
		$c2=$_POST['age'];
		$c3=$_POST['email'];
		$c4=mysql_escape_string($_POST['username']);
		$c5=$_POST['pass'];
		$l_name = $_POST['ID1'];

		
		$get_username = "select * from user where User_name= '$c4'";
		$result1 =mysql_query($get_username,$con);

		$numrow = mysql_num_rows($result1);


		if($numrow==0)
		{
			$query2="insert into user(User_name,First_name,Last_name,Age,Email_id,Password,Location_id) values ('$c4','$c','$c1','$c2','$c3','$c5','$l_name')";
            
			if(!mysql_query($query2,$con))
			{
				echo 'Failure in data insertion';
			}
			else
				{//echo 'Insertion Successful';
				header("location: index_main.php #contact");}
			

		}
		else
		{

			header("location: insertForm.php?feedback=  Username already taken");
		}
	}

	else
	{
			header("location: insertForm.php?feedback=  Username and password must be entered.");
	}

	
	
	
		

}
else if(isset($_POST['doc_reg']))
{
	$c_id = $_POST['ID2'];
	

	
	$c=$_POST['firstname'];
	$c1=$_POST['lastname'];
	$c2=$_POST['affiliation'];
	$c3=$_POST['email'];
	$c4=$_POST['username'];
	$c5=$_POST['pass'];



	

	
	
	$query2="insert into doctor(User_name,First_name,Last_name,Affiliation,Email_id,Password,Category_id) values ('$c4','$c','$c1','$c2','$c3','$c5','$c_id')";

	if(!mysql_query($query2,$con))
	{
		echo 'Failure in data insertion';
	}
	else
		echo 'Insertion Successful';
		

}
?>

<form action="showData.php" method="post">

<input type="submit" name="submitButton1" value="show User table">
</form>
<form action="showData.php" method="post">

<input type="submit" name="submitButton2" value="show Blood Bank table">
</form>
<form action="showData.php" method="post">

<input type="submit" name="submitButton3" value="show Hospital table">
</form>
<form action="showData.php" method="post">

<input type="submit" name="submitButton4" value="show doctor table">
</form>
</body>
</html>