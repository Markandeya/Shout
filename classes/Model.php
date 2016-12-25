<?php
  abstract class Model{
    protected $dbh;
    protected $stmt;

    public function __construct(){
      $this->dbh = new PDO('mysql:host='.DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    }

    public function query($query){
      $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($params, $value, $type=null){
      if(is_null($type)){
        switch (true) {
          case is_int($value):
            $type = PDO::PARAM_INT;
            break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
          case is_bool($value):
              $type = PDO::PARAM_BOOL;
              break;
          default:
            $type = PDO::PARAM_STR;
            break;
        }
      }
      $this->stmt->bindValue($params, $value, $type);
    }

    public function execute(){
      $this->stmt->execute();
    }

    public function resultSet(){
      //echo 'this is resultset';
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }

 ?>