<?php
include('conn.php');
//table name= details
$query="SELECT MAX(id) FROM news";

$result=  mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
   $user_id = mysqli_fetch_row($result);
   $value=$user_id[0]; 
   }
   

   for($i=1;$i<=$value;$i++)
   {
  $query="SELECT * from news where id='$i'";
  $result=  mysqli_query($link, $query);
     if (mysqli_num_rows($result) > 0) {
         $testimonial = mysqli_fetch_array($result);
			echo '<a href="'.$testimonial['link'].'">'.$testimonial['head'].'</a><br><hr>';
     
     }
   }




echo '<br><hr>'
?>