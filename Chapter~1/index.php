




<?php  

    $host = "localhost";
    $dbname = "solicode_Tn";
    $root = "root";
    $password = "";

    
    try{

       $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $root, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

       echo "Connexion is succsesfully $dbname";
       
    }catch (PDOException $e){
         echo "Error you connected" . $e->getMessage();
    }


?>