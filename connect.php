<?php

class connect {
    public function connection(){

      $user = "root";
      $password = "";
      $pdo = "mysql:host=localhost;dbname=project";

      try{
        $conn = new PDO($pdo, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected Successfully';
        return $conn;
      }
      catch (PDOException $e){
        echo 'Connection failed: ' . $e->getMessage();
      }
    }
}

?>