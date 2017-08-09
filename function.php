<?php 
require("dbc.php");
session_start();
//updated............................................
function get_user_data($id,$login_type)
{


	$userdata = array();

	if($login_type=="Patient")//..................................
	{
		$q=mysql_query("select * from user where User_id =".$id);
		while ($r=mysql_fetch_assoc($q)) {
		# code...
		 $userdata['First_name']=$r['First_name'];
		 $userdata['Last_name']=$r['Last_name'];
		 $userdata['Age']=$r['Age'];
		 $userdata['Email_id']=$r['Email_id'];
		 $userdata['Location_id']=$r['Location_id'];
		 $userdata['Password']=$r['Password'];
		 $userdata['User_name']=$r['User_name'];


		 return $userdata;
		}

	}
	elseif ($login_type=="Doctor") {
		# code...
		$q=mysql_query("select * from doctor where User_id =".$id);
		while ($r=mysql_fetch_assoc($q)) {
		# code...
		 $userdata['First_name']=$r['First_name'];
		 $userdata['Last_name']=$r['Last_name'];
		 
		 $userdata['Email_id']=$r['Email_id'];
		 $userdata['Category_id']=$r['Category_id'];
		 $userdata['Password']=$r['Password'];
		 $userdata['User_name']=$r['User_name'];


		 return $userdata;
		}
	}
	

	
} 

function get_id($username,$login_type)
{
	
		//echo $username, $login_type;
     if($login_type=='Patient') 
     {
     	$q=mysql_query("select * from user where User_name = '".$username."' ");
     	while ($r=mysql_fetch_assoc($q))
     	 {
			# code..
			//echo $r['User_id'] ;
			return $r['User_id'];
		}
     } 
     elseif ($login_type=='Doctor')
      {
                	# code...
     	$q=mysql_query("select * from doctor where User_name = '".$username."' ");

     	while ($r=mysql_fetch_assoc($q)) 
     	{
			# code...
			//echo $r['User_id'] ;
			return $r['User_id'];
        } 

    }   

    //echo "string";       
	

	

}

 ?>