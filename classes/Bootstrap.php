<?php
  class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
      //Grab the url controller
      if($request['controller'] == ''){
         $this->controller = 'home';
      }else {
         $this->controller = $request['controller'];
      }

      //Grab the url action
      if($request['action'] == ''){
        $this->action = 'index';
      }else {
        $this->action = $request['action'];
      }
      echo 'Bootstrap class created';
    }
    public function createController(){
      //Check newController class exists
      if(class_exists($this->controller)){
        $parents = class_parents($this->controller);
        //Check extends baseController
        if(in_array('Controller', $parents)){
          //Check specified method exists in newController
          if(method_exists($this->controller, $this->action)){
            return new $this->controller($this->action, $this->request);
          } else{
            echo '<h1>Method doesn\'t exist</h1>';
            return;
          }
        }
      } else{
        echo '<h1>Base Controller not found</h1>';
        return;
      }
    }
}
 ?>
