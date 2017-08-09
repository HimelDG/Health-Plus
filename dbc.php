<?php 

$con=mysql_connect('localhost','root','');

	if($con)
	{
		#echo 'Connection Successful</br>';
	}
	else
	{
		echo 'Connection Failure';
	}
	
	mysql_select_db('health',$con);
 ?>