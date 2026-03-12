



<?php 
 
  $localhost = "localhost";
  $root = "root";
  $dbname = "san";
  $password = "";

  try{
      
      $pdo = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8", $root , $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
      echo "Connexion is succsesfully $dbname";

  }catch( PDOException $e){ 
       echo  "You have error: " . $e->getMessage();
  }



?>