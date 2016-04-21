<?php
	require_once("./include/membership_config.php");
	if(!$wnm->CheckLogin())
{
  $wnm->RedirectToURL("login.php");
}
	$password=$wnm->Password();
	$newdata=array("dob"=>$_GET['dob'],"gender"=>$_GET['gender'],"city"=>$_GET['city'],"hometown"=>$_GET['hometown'],"email"=>$_GET['email'],"contact"=>$_GET['contact'],"department"=>$_GET['dept'],"year"=>$_GET['year'],"batchto"=>$_GET['batchto'],"batchfrom"=>$_GET['batchfrom'],"password"=>$password);
	$username=$wnm->UserPRN();


	$wnm->db->users->update(array("_id"=>$username),$newdata);
	$wnm->UpdateSESSION($username);
	$wnm->RedirectToURL("about.php");

?>