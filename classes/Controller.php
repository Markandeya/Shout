<?php
  abstract class Controller{
    private $action;

    public function __construct($action){
      $this->action = $action;
    }
    public function executeAction(){
      return $this->{$this->action}();
    }
    public function returnView($viewmodel, $fullview){
      $view = 'views/'.get_class($this).'/'.$this->action.'.php';
      if($fullview){
        require 'views/main.php';
      } else {
        require $view;
      }
    }
  }
 ?>
