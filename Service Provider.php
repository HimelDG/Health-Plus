<html>
<head>
<title>Register Page</title>
</head>
<body >
<form action="insertData.php" method="post">
	<p>Please insert data to register</p>
	<p>
		First Name:</br>
		<input type="text" name="FirstName" size="40" maxlength="40" value="">
	</p>
	<p>
		Last Name:</br>
		<input type="text" name="LastName" size="40" maxlength="40" value="">
	</p>
	<p>
		Age:</br>
		<input type="text" name="Age" size="40" maxlength="40" value="">
	</p>
	<p>
		Email:</br>
		<input type="text" name="email" size="40" maxlength="40" value="">
	</p>

	<p>

	 	Gender:</br>
	 	<input type="radio" name="gender" value="male">Male
	 	<input type="radio" name="gender" value="female">Female

		
	</p>
	<p>
		<input type="submit" name="submit" value="Insert Data">
	</p>
</form>
</body>

</html>