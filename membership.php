<?php 
require_once("class.phpmailer.php");

class Membership
{
	var $admin_email;
    var $from_address;
    
    var $username;
    var $pwd;
    var $database;
    var $tablename;
    var $connection;
    var $salt;
    var $db;
    var $error_message;

      //-----Initialization -------
    function Membership()
    {
        $this->sitename = 'walchandnetwork.com';
        $this->salt = '2000$1013889036$0yhs2npQquj7051cmgoEmT4CgvqBz1b0xVxSVvOIkT1';
    }
       function InitDB($database)
    {
    	$m = new MongoClient();
   		// select a database
   		$this->db = $m->$database;
    }
}
?>