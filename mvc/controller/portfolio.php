<?php
 class portfolio extends controller{
	
	function __construct(){
	//echo "we are in portfolio controller<br>";
	$viewing=new view();
	$viewing->render('portfolio');
	}
 
 }