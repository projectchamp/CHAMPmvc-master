 <?php
 class view{
	
	function __construct(){
	//echo "we are in View <br>";
	}
	public function render($name){
		require 'views/'.$name.'/'.$name.'.php';
	}
 }