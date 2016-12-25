<?php
  class Home extends Controller{
    protected function index(){
      $viewmodel = new HomeModel();//home model object
      $this->returnView($viewmodel->index(), true);//$viewmodel->index() returns 
    }
  }
 ?>
