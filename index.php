<?php
session_start();
  require 'config.php';

  require 'classes/Messages.php';
  require 'classes/Bootstrap.php';
  require 'classes/Controller.php';

  require 'controllers/home.php';
  require 'controllers/shouts.php';
  require 'controllers/users.php';

  require 'classes/Model.php';
  require 'models/home.php';
  require 'models/shouts.php';
  require 'models/users.php';


  $bootstrap = new Bootstrap($_GET);
  $controller = $bootstrap->createController();//for example home.php
  if($controller){
    echo $controller->executeAction();//for example home->index()
  }
 ?>
<link rel="stylesheet" href='assets/css/style.css'/>
