<?PHP
require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
	$wnm->RedirectToURL("login.php");
}

		$status = $_POST['status'];
		$prn = $wnm->UserPRN();		
		$query = array("PRN"=>$prn,"Status"=>$status);
  		$result = $wnm->db->posts->insert($query);
  		if($result)
  		{
  			echo "Inserted Post";
  		}
?>