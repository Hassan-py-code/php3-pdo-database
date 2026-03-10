



<?php   
   

   $localhost = "localhost";
   $dbname = "oomdb";
   $password = "";
   $root = "root";


   try{
       $pdo = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8" , $root , $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
       echo "Connection";
     
   }catch(PDOException $e){
        
      echo  $e->getMessage();
   }
   
   





?>