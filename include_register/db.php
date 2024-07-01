<?php

class Database{
 
  public function connect_db() {
    try {
      $mysql_name = "rico";
      $mysql_pass = "champs";
      $con = new PDO('mysql:host=localhost;dbname=twitter', $mysql_name, $mysql_pass);
      return $con;
    }
    catch (PDOException){
      die("Connection lost");
    }
  }
}