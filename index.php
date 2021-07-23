<?php
session_start();
require_once('src/Controller/LikesController.php');

use AnneFleurMarchat\Epizode\Controller\LikesController;

try {
	$likesController = new LikesController();
	
	if(isset($_GET['action']))
	{
		switch($_GET['action'])
		{
			case 'getLikes':
				$likesController->getLikes();
			break;
			case 'addLike':
				$likesController->addLike();
			break;
		}				
	}
}catch(Exception $e){
	$errorMessage = $e->getMessage();
	require('src/View/404error.php');
}