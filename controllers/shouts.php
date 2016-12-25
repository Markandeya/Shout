<?php
  class Shouts extends Controller{
    protected function index(){
      $viewmodel = new ShoutModel();
      $this->returnView($viewmodel->index(), true);
    }

    protected function add(){
      $viewmodel = new ShoutModel();
      $this->returnView($viewmodel->add(), true);
    }
  }
 ?>
