<?php

class Model {

    function __construct() {
try{      
	  $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
	  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
	}
  }

}