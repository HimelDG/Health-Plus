<html>
<head>
<title>Show Data</title>
</head>
<body>
<?php
require("dbc.php");
if(isset($_POST['submitButton1']))
{

	
	$query='select * from user';
	$result=mysql_query($query,$con);
	
	print '<table border="1">';
	
	while($row=mysql_fetch_assoc($result))
	{
		print '<tr>';
		foreach($row as $item)
		{
			//print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
			print '<td>';
			if($item !== null )
				print $item;
			else
				print '&nbsp';
			print '</td>';
		}
		
		print '</tr>';
	}
	
	print '</table>';
	mysql_close($con);
}
elseif(isset($_POST['submitButton2']))
{

	$con=mysql_connect('localhost','root','');
	if($con)
	{
		echo 'Connection Successful</br>';
	}
	else
	{
		echo 'Connection Failure';
	}
	mysql_select_db('health',$con);
	$query='select * from blood_bank';
	$result=mysql_query($query,$con);
	
	print '<table border="1">';
	
	while($row=mysql_fetch_assoc($result))
	{
		print '<tr>';
		foreach($row as $item)
		{
			//print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
			print '<td>';
			if($item !== null )
				print $item;
			else
				print '&nbsp';
			print '</td>';
		}
		
		print '</tr>';
	}
	
	print '</table>';
	mysql_close($con);
}
if(isset($_POST['submitButton3']))
{

	$con=mysql_connect('localhost','root','');
	if($con)
	{
		echo 'Connection Successful</br>';
	}
	else
	{
		echo 'Connection Failure';
	}
	mysql_select_db('health',$con);
	$query='select * from hospital';
	$result=mysql_query($query,$con);
	
	print '<table border="1">';
	
	while($row=mysql_fetch_assoc($result))
	{
		print '<tr>';
		foreach($row as $item)
		{
			//print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
			print '<td>';
			if($item !== null )
				print $item;
			else
				print '&nbsp';
			print '</td>';
		}
		
		print '</tr>';
	}
	
	print '</table>';
	mysql_close($con);
}
if(isset($_POST['submitButton4']))
{

	$con=mysql_connect('localhost','root','');
	if($con)
	{
		echo 'Connection Successful</br>';
	}
	else
	{
		echo 'Connection Failure';
	}
	mysql_select_db('health',$con);
	$query='select * from doctor';
	$result=mysql_query($query,$con);
	
	print '<table border="1">';
	
	while($row=mysql_fetch_assoc($result))
	{
		print '<tr>';
		foreach($row as $item)
		{
			//print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
			print '<td>';
			if($item !== null )
				print $item;
			else
				print '&nbsp';
			print '</td>';
		}
		
		print '</tr>';
	}
	
	print '</table>';
	mysql_close($con);
}
elseif (isset($_POST['location_search'])) 
{
	$con=mysql_connect('localhost','root','');

	if($con)
	{
		echo 'Connection Successful</br>';
	}
	else
	{
		echo 'Connection Failure';
	}

	mysql_select_db('health',$con);
	$loc=$_POST['location_new'];
	$service=$_POST['service_type'];
	//echo $service;
    
    if($service=="Blood Banks"){$bb_query= " select bb.Bbank_name,bb.Bbank_address,bb.Contact_no  from location l join blood_bank bb on (l.Location_id=bb.Location_id) where l.Location_name= '$loc' ";}
	else{$hos_query= " select h.Hospital_name,h.Hospital_address,h.Contact_no  from location l join hospital h on (l.Location_id=h.Location_id) where l.Location_name= '$loc' ";}
	
	//$check = "select * from user where User_name= '$l1' and Password = '$l2' ";
	//$result2 =mysql_query($loc_query,$con);
    //echo $loc;

	if(!mysql_query($bb_query,$con))
	{
		//echo 'Failure in data searching';
	}
	else
		//echo 'seacrhing successfull';
	

	$bb_result =mysql_query($bb_query,$con);
	

	 //echo "Blood Banks in Your location";
	//print '<table border="1">';
	if($bb_result!=null){
		//if ($bb_result->num_rows > 0) 
		//{
     // output data of each row
     while($row=mysql_fetch_assoc($bb_result)){
         echo "<br> ". $row["Bbank_name"]. "  ". $row["Bbank_address"]. " " . $row["Contact_no"] . "<br>";
     }
    // }
	 
	}

	/*while($row=mysql_fetch_assoc($bb_result))
	{
		print '<tr>';
		//print"\n";
		foreach($row as $item)
		{
			//print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
			print '<td>';
			//print"\n";
			if($item !== null )
				{echo PHP_EOL ;
					
					print $item  ;
					
				}
			else
			{
				print '&nbsp';
			    //print"\n";
		        }
			
			print '</td>';
			//print"\n";
		}
		
		print '</tr>';
		//print"\n";
	}
	
	print '</table>';
	}*/
	else{
		$hos_result =mysql_query($hos_query,$con);
	echo "Hospitals in Your location";
	print '<table border="1">';
	while($row=mysql_fetch_assoc($hos_result))
	{
		print '<tr>';
		foreach($row as $item)
		{
			//print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
			print '<td>';
			if($item !== null )
				print $item;
			else
				print '&nbsp';
			print '</td>';
		}
		
		print '</tr>';
	}
	
	print '</table>';
}
		
	mysql_close($con);
}
?>
</body>
</html>