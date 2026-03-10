

<?php  

 require "connection.php";

 try{
     
   $sql = "SELECT * FROM users";
   $stmt = $pdo->query($sql);
   
   $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
   foreach($users as $us){
      echo "ID :" . $us["id"] . " - name" . "- email:" . $us["email"] . "<br>";

      echo "<table>";
        echo "<th>";
            echo  "<tr>";
        echo "</th>";
      echo "</table>";
   }
 }catch(PDOException $e){
      
     echo "Error:" . $e->getMessage();
 }


?>


