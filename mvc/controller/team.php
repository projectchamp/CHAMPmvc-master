<?php
 class team extends controller{
	
	function __construct(){
	//echo "we are in index controller<br>";
	$viewing=new view();
	$viewing->render('team');
	}
 
 }