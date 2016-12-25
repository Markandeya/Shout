<?php
  class ShoutModel extends Model{
    public function index(){
      if($this->query("SELECT * FROM shouts ")) echo 'hey';
      $ar = $this->resultSet();
      return $ar;
      //print_r($ar);
    }
  }
 ?>
