<?PHP
require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
	$wnm->RedirectToURL("login.php");
}

		$post = array(
        'title'     => 'What is MongoDB',
        'content'   => 'MongoDB is a document database that provides high performance...',
        'saved_at'  => new MongoDate() 
    	);
		$posts = $wnm->db->posts;
		$result = $posts ->insert($post);
  		if($result)
  		{
  			echo "Inserted Post";
  		}  
 
		$newDocID = $post['_id'];
		echo $newDocID;
  		// all records
    	/*$result = $posts->find();
    	print_r($result);
    	$id = '5715f2fbf8bf0ec02800002a';
    	$results = $posts->findOne(array('_id' => new MongoId($id)));
    	echo "This is single";
    	print_r($results);*/
?>