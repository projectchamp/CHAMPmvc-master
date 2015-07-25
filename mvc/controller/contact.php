<?php
 class contact extends controller{
	
	function __construct(){
	//echo "we are in contact controller<br>";
	parent::__construct();
	$this->view->render('contact');
	}
 
 
 public function getModel(){
	  $name = $_GET['name'];
      $email = $_GET['email'];
	  $mob = $_GET['mobNum'];
	  $msg = $_GET['msg'];
	  
	$model=$this->loadmodel('contact');
	$check=$model->run($name,$email,$mob,$msg);

		if($check)
			header('location:http://127.0.0.1/mvc/contact?succ=1');
		else
			header('location:http://127.0.0.1/mvc/contact?succ=0');
		}
 }