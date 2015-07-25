<?php
$host="127.0.0.1";//host name
$user="root";//username
$password="";//password
$database="champmvc";//database name

$link=mysqli_connect($host, $user, $password, $database);
//Just for refernce as at very beginning i used its a problem but shall be rectified in near future..ENJOY
$link1=mysql_connect($host, $user, $password) or die ('could not connect to MYSQL');
$db=mysql_select_db('champmvc',$link1) or die('could not connect to database');
if(!$link1)
echo 'no';
else
echo '';
?>    
