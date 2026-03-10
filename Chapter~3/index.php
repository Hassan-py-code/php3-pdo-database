


<?php 

   require "connection.php";

   try{
       
      $stmt = $pdo->prepare("INSERT INTO students ( name , email ) values 
         (:name , :email) ");

      $stmt->execute([
         
          "name"=>"hom",
          "email"=>"ben@fg.com"
      ]);

      // echo "Utilisateur ajouté avec succès.";
      $stmt = $pdo->prepare("UPDATE students SET email = :email where id = :id ");
      $stmt->execute([
            
         "email"=> "hassan.com",
         "id" => 3

      ]);
     
       echo "user update";
   

      $stmt =$pdo->prepare("DELETE FROM students where id = :id");
      $stmt->execute(["id" => 3]);

      echo "Delete Studenst";

      echo $stmt->rowCount();


   }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
   }

   
   

?>

