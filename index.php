<?php
//start session
session_start();
//include config
require('config.php');
//include Lib
require('Lib/Bootstrap.php');
require('Lib/Controller.php');
require('Lib/Model.php');
//include Controller
require('Controllers/home.php');
require('Controllers/Solutions.php');
require('Controllers/Contact.php');
require('Controllers/About.php');
require('Controllers/Posts.php');
require('Controllers/Admin.php');
require('Controllers/language.php');

//include Models
require('Models/home.php');
require('Models/Solution.php');
require('Models/Contact.php');
require('Models/About.php');
require('Models/Post.php');
require('Models/Admin.php');
require('Models/language.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if ($controller) {
  $controller->executeAction();

}

?>
