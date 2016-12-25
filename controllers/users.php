<?php
  class Users extends Controller{
    protected function login(){
      $viewmodel = new UserModel();//user model object
      $this->returnView($viewmodel->login(), true);//$viewmodel->index() returns
    }
  }
 ?>
