<?php

 class controller{
	
	function __construct(){
	//echo "we are in main controller<br>";
	$this->view= new View();
	}
	
	public function loadModel($model) {
		
        
        $path = 'model/'.$model.'/'. $model.'.php';
        if (file_exists($path)) {
		require $path;
		    // $modelName = $name . '_Model';
            //$this->model = new $modelName();
		}   
      else
	  {  header('location:http://127.0.0.1/mvc/');
	     exit;
	  }		
	  $model=$model.'_model';
      return new $model();
	}
 
 }