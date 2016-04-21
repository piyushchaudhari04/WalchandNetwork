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
  		$query = array("PRN"=>$username);
  		$result = $this->db->users->findOne($query);
  		$pass=$result["Password"];
        
        if(strcmp($user_encry_pass,$pass))
        {
            $this->HandleError("Error logging in. The username or password does not match");
            return false;
        }

        $_SESSION['username'] = $username;
        $_SESSION['prn'] = $result["PRN"];
        $_SESSION['fullname']=$result["FName"]." ".$result["LName"]; 
        $_SESSION['fname'] = $result["FName"];
        $_SESSION['lname'] = $result["LName"];
        $_SESSION['dob'] = $result["DOB"];
        $_SESSION['gender'] = $result["Gender"];
        $_SESSION['email'] = $result["Email"];
        $_SESSION['contact'] = $result["Contact"];
        $_SESSION['city'] = $result["City"];
        $_SESSION['hometown'] = $result["Hometown"];
        $_SESSION['dept'] = $result["Department_ID"];
        $_SESSION['year'] = $result["Year"];
        $_SESSION['batch_from'] = $result["Batch_From"];
        $_SESSION['batch_to'] = $result["Batch_To"];

        //here we will add the user values to the session
 	/*
        $_SESSION['name_of_user']  = $row['name'];
        $_SESSION['email_of_user'] = $row['email'];
     */   
        return true;
    }

    //the following function will help us to retrieve user information from the session variables

    function Username()
    {
        return isset($_SESSION['username'])?$_SESSION['username']:'';
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