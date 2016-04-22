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
	//$wnm->UpdateSESSION($username);
		$_SESSION['dob'] = $newdata["dob"];
        $_SESSION['gender'] = $newdata["gender"];
        $_SESSION['email'] = $newdata["email"];
        $_SESSION['contact'] = $newdata["contact"];
        $_SESSION['city'] = $newdata["city"];
        $_SESSION['hometown'] = $newdata["hometown"];
        $_SESSION['dept'] = $newdata["department"];
        $_SESSION['year'] = $newdata["year"];
        $_SESSION['batch_from'] = $newdata["batchfrom"];
        $_SESSION['batch_to'] = $newdata["batchto"];

	$wnm->RedirectToURL("about.php");

?>