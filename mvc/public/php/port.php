<?php 

include('conn.php');//include('http://127.0.0.1/mvc/public/php/conn.php');

$query="SELECT MAX(id) FROM portfolio";

$result=  mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
   $user_id = mysqli_fetch_row($result);
   $value=$user_id[0]; 
   }
   for($i=1;$i<=$value;$i++)
   {
 $query="SELECT * from portfolio where id='$i'";
 $result=  mysqli_query($link, $query);
     if (mysqli_num_rows($result) > 0) {
   $user_details = mysqli_fetch_array($result);
echo '<div class="col-xs-6 col-lg-4">';
echo '<h1>'.$user_details['name'].'</h1>';
echo '<p><img id="img" src="http://127.0.0.1/mvc/public/images/team/'.$user_details['imgurl'].'" class="img-responsive"><br><HR>';    
  echo ''.$user_details['descrpt'].'</p></div><!--/.col-xs-6.col-lg-4-->';
	
     }
   }
   ?>
