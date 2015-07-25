<?php

class contact_model extends Model{
 
   public function __construct(){
	parent::__construct();

	}	

	    public function run($name,$email,$mob,$msg)
    {
        $sth = $this->db->prepare("INSERT INTO feedback(name,email,phone,feed) VALUES( :name , :email , :mobnum , :msg)");
        $sth->execute(array(
            ':name' =>$name,
            ':email' => $email,
			':mobnum' => $mob,
			':msg' => $msg
			//':password' => //Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
       
		)); 
		
		 return 1;
    }
 
 } 