<?php
  class ShoutModel extends Model{
    public function index(){
      if($this->query("SELECT * FROM shouts ORDER BY create_date DESC")) echo 'hey';
      $ar = $this->resultSet();
      return $ar;
      //print_r($ar);
    }
    public function add(){
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if($post['submit']){
        if($post['title']==''||$post['body']==''||$post['link']==''){
          Messages::setMsg('Please fill in all fields', 'error');
          return;
        }
        $this->query("INSERT INTO shouts(title, body, link, user_id) VALUES(:title, :body, :link, :user_id);");
        $this->bind(':title', $post['title']);
        $this->bind(':body', $post['body']);
        $this->bind(':link', $post['link']);
        $this->bind(':user_id', 1);
        $this->execute();
        //Verify and redirect
        if($this->dbh->lastInsertId()){
          header('Location: '.ROOT_URL.'shouts/');
        }else{
          echo 'Whoops! Something went wrong!';
        }
      }
      return;
    }
  }
 ?>
