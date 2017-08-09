<!DOCTYPE html>
<?php 
session_start();
require("function.php");
 ?>
<html>
<head>
	<title>Profile Page</title>
	<link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
      <!-- VEGAS STYLE CSS -->
  <link href="assets/scripts/vegas/jquery.vegas.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
  <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<body>
<?php 
  if (isset($_POST['location_search'])) 
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
//  elseif($service="Hospitals"){$hos_query= " select h.Hospital_name,h.Hospital_address,h.Contact_no  from location l join hospital h on (l.Location_id=h.Location_id) where l.Location_name= '$loc' ";}
  
  //$check = "select * from user where User_name= '$l1' and Password = '$l2' ";
  //$result2 =mysql_query($loc_query,$con);
    //echo $loc;

  if(!mysql_query($bb_query,$con))
  {
    //echo 'Failure in data searching';
  }
  else
    {}//echo 'seacrhing successfull';}
  

  $bb_result =mysql_query($bb_query,$con);
//  $hos_result =mysql_query($hos_query,$con);
  

   //echo "Blood Banks in Your location";
  //print '<table border="1">';
 

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
 /* if(  $hos_result !=null){

    
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
}*/
    
  mysql_close($con);
}         
              
?>
<div class="navbar navbar-inverse navbar-fixed-top scrollclass" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HEALTH PLUS</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index_main.php">HOME</a></li>
                    <li><a href="usertype.php">REGISTER</a></li>
                    <li><a href="search.php">SEARCH</a></li>
                     <li><a href="index_main.php">SOCIAL</a></li>
                    
                </ul>
            </div>
           
        </div>
    </div>
        <section class="for-full-back color-bg-one" id="about">
         
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1>Welcome to Emergency Service</h1>
                </div>
                <div class="row text-center">

                    <div class="col-md-8 col-md-offset-2 ">
                        <h5>
                          
                       Find Services avaiable in Your Location
                            
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="for-full-back color-white" id="about-team">

        <div class="container">
        
            <div class="row text-center g-pad-bottom">
                <div class="col-md-8 col-md-offset-2 ">
                    <h3>Service</h3>
                    
                </div>

            </div>
            <div id="add">
            <?php
                         if($bb_result!=null){
    //if ($bb_result->num_rows > 0) 
    //{
     // output data of each row
     while($row=mysql_fetch_assoc($bb_result)){
         echo "<br> <b> Name:  </b>"."   ". $row["Bbank_name"]. "<br> <b> Adress: </b>  ". "   ".$row["Bbank_address"]. " <br> <b> Contact No: </b>" ."   "."   ". $row["Contact_no"] . "<br>"."<br>";
     }
   }
                           /* if($hos_result!=null){
    //if ($bb_result->num_rows > 0) 
    //{
     // output data of each row
     while($row=mysql_fetch_assoc($hos_result)){
         echo "<br> <b> Name:  </b>"."   ". $row["Hospital_name"]. "<br> <b> Adress: </b>  ". "   ".$row["Hosppitals_address"]. " <br> <b> Contact No: </b>" ."   "."   ". $row["Contact_no"] . "<br>"."<br>";
     }
   }*/
     ?>
     
   
  
                         
                
            </div>
           

        </div>
    </section>


	    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>  
    <!-- VEGAS SLIDESHOW SCRIPTS -->
    <script src="assets/plugins/vegas/jquery.vegas.min.js"></script>
     <!-- SCROLL SCRIPTS -->
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>	

</body>
</html>