<?PHP
require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
	$wnm->RedirectToURL("login.php");
}

		$status = $_POST['status'];
		$prn = $wnm->UserPRN();		
		$query = array("PRN"=>$prn,"Status"=>$status,"post_date"=> new MongoDate(),"status_flag"=>"1","image_flag"=>"0");
  		$result = $wnm->db->posts->insert($query);
  		if($result)
  		{
  			echo "Inserted Post";
  		}
  		
?>
<a href="#add" onclick="addComment(<?php echo $row['_id'];?>">Add Comment</a>