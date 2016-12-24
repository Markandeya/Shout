<?php
  require 'config.php';
  require 'classes/Bootstrap.php';
  require 'classes/Controller.php';
  require 'controllers/home.php';
  require 'controllers/shouts.php';
  require 'controllers/users.php';

  $bootstrap = new Bootstrap($_GET);
   $controller = $bootstrap->createController();
  if($controller){
    echo $controller->executeAction();
  }
 ?>
