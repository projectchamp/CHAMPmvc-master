<?php 
//include('http://127.0.0.1/mvc/public/php/conn.php');
include('conn.php');
//table name= details
$query="SELECT MAX(id) FROM testimonial";

$result=  mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
   $user_id = mysqli_fetch_row($result);
   $value=$user_id[0]; 
   }
   ?>
 <div id="sliding">
<?php   for($i=1;$i<=$value;$i++)
   {
  $query="SELECT * from testimonial where id='$i'";
  $result=  mysqli_query($link, $query);
     if (mysqli_num_rows($result) > 0) {
         $testimonial = mysqli_fetch_array($result);
			echo '<p>'.$testimonial['msg'].'<br>';
			echo 'by '.$testimonial['by'].'</p>';    

   
     }
   }
   echo "</div>";
   ?>