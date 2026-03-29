


<?php 
  
  $localhost = "localhost";
  $dbname = "ajout";
  $root = "root";
  $password = "";
  

  try{
     
      $pdo = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8" , $root,$password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      

  }catch(PDOException $e){
        echo "Error" . $e->getMessage();
  }




?>