<?php
namespace AnneFleurMarchat\Epizode\Model;
require_once('Manager.php');
class LikesManager extends Manager
{
    public function getLikes()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM likes WHERE postid = 1');
	    $getLikes = $req->fetch();
	    $req->closeCursor();
	    return $getLikes;
	}

	public function addLike(){
		 $likes = $this->getLikes();
		 $db = $this->dbConnect();
		 $updateLikes = $db->prepare('UPDATE likes SET likes = :newLike WHERE postid = 1');
		 $updateLikes->execute(array(
			'newLike' => $likes['likes']+1,
		));
		return $updateLikes;
	}

}