<?php 
include('conn.php');
//table name= team
$query="SELECT MAX(id) FROM team";

$result=  mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
   $user_id = mysqli_fetch_row($result);
   $value=$user_id[0]; 
   }
   for($i=1;$i<=$value;$i++)
   {
$query="SELECT * from team where id='$i'";
 $result=  mysqli_query($link, $query);
     if (mysqli_num_rows($result) > 0) {
   $user_details = mysqli_fetch_array($result);
	echo '<p><img id="img" src="http://127.0.0.1/mvc/public/images/team/'.$user_details['img'].'" class="img-responsive">'.$user_details['name'].'<br>'.$user_details['desig'].'<br><HR>';    
       echo ''.$user_details['descrpt'].'</p>';
     echo "<div style='clear:both'></div><hr>";
	 }
   }
   ?>