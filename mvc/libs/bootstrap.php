<?php
class bootstrap{
	
	function __construct(){
		$url=isset($_GET['url']) ? $_GET['url'] : 'index';
		$url=explode('/',$url);
		//print_r($url);
		//print_r($url);
		//print_r($url);
		
		$file='controller/'.$url[0].'.php';
		//
	if(file_exists($file)){
		require $file;
	}
	else{
	require'controller/error.php';
	$controller = new error();
	return false;
	//throw new Exception('the file '.$file.'does not exist');
	}
	
$controller = new $url[0];
if(isset($url[2])){
$controller->{$url[1]}(($url[2]));
}
else if(isset($url[1])){ 
$controller->{$url[1]}();
}

	}
	
 }
