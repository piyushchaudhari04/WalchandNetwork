<?php
session_start();
if(isset($_SESSION)){
	if(!$_SESSION["prn"])
	{
	header("Location: login.php");		
	}
}
else
{
	header("Location: login.php");
}
?>