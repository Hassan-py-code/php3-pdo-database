




<?php  

//    include connection 
   require "connection.php";

   $stmt = $pdo->prepare("INSERT INTO users (
f_name  , l_name  , email ) values  (:f_name ,  :l_name , :email)");

   $stmt->execute([
       
        "f_name" =>"fat",
        "l_name" => "kouma",
        "email" => "mot@gmail.com"
         
   ]);

   echo  "Users accept";


   $name = "faf";
   $lname ="koubai";
   $email = "bb@test.com";
   $stmt = $pdo->prepare("INSERT INTO users (f_name , l_name , email) values  (:f_name , :l_name , :email)" );
   $stmt -> bindParam(":f_name" , $name);
   $stmt -> bindParam("l_name" , $lname );
   $stmt -> bindParam("email" , $email);
   $stmt->execute();


   $stmt = $pdo ->prepare("SELECT * FROM users id=?");
   $stmt->execute([1]);



?>