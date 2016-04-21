<?php 

require_once('./include/db_config.php');
if(isset($_POST['submit']))
{
if(isset($_POST['username'])&&isset($_POST['password']))
{ 

  $username = $_POST['username'];
  $password = $_POST['password'];
  $user_encry_pass=crypt(strval($password), $salt);
  $query = array("user_id"=>$username);
  $result = $db->users->findOne($query);
  $pass=$result["password"];
  echo $pass;
  echo "harshal";
  echo $user_encry_pass;
  if(strcmp($user_encry_pass,$pass))
    header("Location: index.php");
  else
    header("Location: login.php?attempt=false");
}
}
?>
