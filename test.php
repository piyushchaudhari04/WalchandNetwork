<?PHP
require_once("./include/membership_config.php");

echo "We are connected";

if(isset($_POST['submit']))
{
if(isset($_POST['username'])&&isset($_POST['password']))
{ 

  $username = $_POST['username'];
  $password = $_POST['password'];
  $user_encry_pass=crypt(strval($password), $wnm->salt);
  $query = array("user_id"=>$username);
  $result = $wnm->db->users->findOne($query);
  $pass=$result["password"];
  echo $pass;
  echo "harshal";
  echo $user_encry_pass;
 /* if(!strcmp($user_encry_pass,$pass))
   {
   	session_start();
   	$_SESSION["prn"]=$username;
    header("Location: index.php");}
  else
    header("Location: login.php?attempt=false");
}*/
}}
?>