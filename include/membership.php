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

    }
       function InitDB($database,$tablename)
    {
    	$m = new MongoClient();
   		// select a database
   		$this->db = $m->$database;
   		$this->tablename=$tablename;
    }
    function setWebsiteName($website)
    {
        $this->sitename = $website;
    }
    function setSalt($salt)
    {
    	$this->salt=$salt;
    }
     function GetSelfScript()
    {
        return htmlentities($_SERVER['PHP_SELF']);
    }   
    function Login()
    {
        if(empty($_POST['username']))
        {
            $this->HandleError("UserName is empty!");
            return false;
        }
        
        if(empty($_POST['password']))
        {
            $this->HandleError("Password is empty!");
            return false;
        }
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if(!isset($_SESSION)){ session_start(); }
        if(!$this->CheckLoginInDB($username,$password))
        {
            return false;
        }
        
        $_SESSION[$this->GetLoginSessionVar()] = $username;
        
        return true;
    }


     function CheckLoginInDB($username,$password)
    {         

		$user_encry_pass=crypt(strval($password), $this->salt);
  		$query = array("_id"=>$username);
  		$result = $this->db->users->findOne($query);
  		$pass=$result["password"];
        
        if(strcmp($user_encry_pass,$pass))
        {
            $this->HandleError("Error logging in. The username or password does not match");
            return false;
        }

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $pass;
        $_SESSION['prn'] = $result["_id"];
       // $_SESSION['fullname']=$result["FName"]." ".$result["LName"]; 
        //$_SESSION['fname'] = $result["FName"];
        //$_SESSION['lname'] = $result["LName"];
        $_SESSION['dob'] = $result["dob"];
        $_SESSION['gender'] = $result["gender"];
        $_SESSION['email'] = $result["email"];
        $_SESSION['contact'] = $result["contact"];
        $_SESSION['city'] = $result["city"];
        $_SESSION['hometown'] = $result["hometown"];
        $_SESSION['dept'] = $result["department"];
        $_SESSION['year'] = $result["year"];
        $_SESSION['batch_from'] = $result["batchfrom"];
        $_SESSION['batch_to'] = $result["batchto"];

        //here we will add the user values to the session
 	/*
        $_SESSION['name_of_user']  = $row['name'];
        $_SESSION['email_of_user'] = $row['email'];
     */   
        return true;
    }
    function UpdateSESSION($prn)
    {
        session_destroy();
        session_start();
        $query = array("_id"=>$prn);
        $result = $this->db->users->findOne($query);
        
        $_SESSION['username'] = $prn;
         $_SESSION['prn'] = $result["_id"];
       // $_SESSION['fullname']=$result["FName"]." ".$result["LName"]; 
        //$_SESSION['fname'] = $result["FName"];
        //$_SESSION['lname'] = $result["LName"];
        $_SESSION['dob'] = $result["dob"];
        $_SESSION['gender'] = $result["gender"];
        $_SESSION['email'] = $result["email"];
        $_SESSION['contact'] = $result["contact"];
        $_SESSION['city'] = $result["city"];
        $_SESSION['hometown'] = $result["hometown"];
        $_SESSION['dept'] = $result["department"];
        $_SESSION['year'] = $result["year"];
        $_SESSION['batch_from'] = $result["batchfrom"];
        $_SESSION['batch_to'] = $result["batchto"];

    }


    //the following function will help us to retrieve user information from the session variables

    function Username()
    {
        return isset($_SESSION['username'])?$_SESSION['username']:'';
    }
    function Password()
    {
        return isset($_SESSION['password'])?$_SESSION['password']:'';
    }
    function UserPRN()
    {
        return isset($_SESSION['prn'])?$_SESSION['prn']:'';   
    }

    function UserFullName()
    {
        return isset($_SESSION['fullname'])?$_SESSION['fullname']:'';   
    }
    function UserFName()
    {
        return isset($_SESSION['fname'])?$_SESSION['fname']:'';   
    }
    function UserLName()
    {
        return isset($_SESSION['lname'])?$_SESSION['lname']:'';   
    }
    function UserGender()
    {
        return isset($_SESSION['gender'])?$_SESSION['gender']:'';   
    }
    function UserEmail()
    {
        return isset($_SESSION['email'])?$_SESSION['email']:'';   
    }
    function UserContact()
    {
        return isset($_SESSION['contact'])?$_SESSION['contact']:'';   
    }
    function UserDOB()
    {
        return isset($_SESSION['dob'])?$_SESSION['dob']:'';   
    }
    function UserCity()
    {
        return isset($_SESSION['city'])?$_SESSION['city']:'';   
    }
    function UserHometown()
    {
        return isset($_SESSION['hometown'])?$_SESSION['hometown']:'';   
    }
    function UserDept()
    {
        return isset($_SESSION['dept'])?$_SESSION['dept']:'';   
    }
    function UserYear()
    {
        return isset($_SESSION['year'])?$_SESSION['year']:'';   
    }
    function UserBatchFrom()
    {
        return isset($_SESSION['batch_from'])?$_SESSION['batch_from']:'';   
    }
    function UserBatchTo()
    {
        return isset($_SESSION['batch_to'])?$_SESSION['batch_to']:'';   
    }
	function GetLoginSessionVar()
    {
        $retvar = md5($this->salt);
        $retvar = 'usr_'.substr($retvar,0,10);
        return $retvar;
    }
    function HandleError($err)
    {
        $this->error_message .= $err."\r\n";
    }

    function CheckLogin()
    {
         if(!isset($_SESSION)){ session_start(); }

         $sessionvar = $this->GetLoginSessionVar();
         
         if(empty($_SESSION[$sessionvar]))
         {
            return false;
         }
         return true;
    }
    function LogOut()
    {
        session_start();
        
        $sessionvar = $this->GetLoginSessionVar();
        
        $_SESSION[$sessionvar]=NULL;
        
        unset($_SESSION[$sessionvar]);
    }
     function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }
    function GetErrorMessage()
    {
        if(empty($this->error_message))
        {
            return '';
        }
        $errormsg = nl2br(htmlentities($this->error_message));
        return $errormsg;
    }
    function SafeDisplay($value_name)
    {
        if(empty($_POST[$value_name]))
        {
            return'';
        }
        return htmlentities($_POST[$value_name]);
    }
       
}
?>