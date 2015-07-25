<?php
 class about extends controller{
	
	function __construct(){
	//echo "we are in about controller<br>";
	$viewing=new view();
	$viewing->render('about');
	}
 
 }