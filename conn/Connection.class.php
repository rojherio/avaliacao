<?php

class Connection extends PDO {

  private static $instance;

  public function Connection($dsn, $username = "", $password = "") {
    // O construtro abaixo é o do PDO
    parent::__construct($dsn, $username, $password, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
    																												PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    																												PDO::ATTR_ERRMODE, 
    																												PDO::ERRMODE_EXCEPTION, 
    																												PDO::ATTR_ORACLE_NULLS, 
    																												PDO::NULL_EMPTY_STRING));
  }

  public static function getInstance() {
    // Se o a instancia não existe eu faço uma
    if(!isset( self::$instancia )){
      try {
        self::$instance = new Connection(DB.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
      } catch ( PDOException $e ) {
        $e->getMessage();  
      }
    }
    // Se já existe instancia na memória eu retorno ela
    return self::$instance;
  }

}
?>