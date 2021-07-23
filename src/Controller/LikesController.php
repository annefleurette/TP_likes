<?php
namespace AnneFleurMarchat\Epizode\Controller;

require_once('src/Model/LikesManager.php');

use AnneFleurMarchat\Epizode\Model\LikesManager;

class LikesController {

    public function getLikes()
    {
        $likesManager = new LikesManager();
        $getLikes = $likesManager->getLikes();
        require('./src/View/pageView.php');
    }

    public function addLike()
    {
        $likesManager = new LikesManager();
        $updateLikes = $likesManager->addLike();
        $getLikes = $likesManager->getLikes();
        //require('./src/View/pageView.php');
        echo json_encode($getLikes);
       
    }

}