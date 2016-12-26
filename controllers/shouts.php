<?php
  class Shouts extends Controller{
    protected function index(){
      $viewmodel = new ShoutModel();
      $this->returnView($viewmodel->index(), true);
    }

    protected function add(){
      if(!$_SESSION['is_logged_in']){
        header('Location: '.ROOT_URL.'users/login');
      }
      $viewmodel = new ShoutModel();
      $this->returnView($viewmodel->add(), true);
    }
  }
 ?>
