



<?php  


   require "connection.php";

   if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars(trim($_POST['name']));

        $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);

        if(!$email){
             die("Email is not valid !");
        }

        echo "your name is: " . $name;
        echo "And Email is :" . $email;

       try{
             $stmt = $pdo->prepare("INSERT INTO  users (Name , Email) values (:Name , :Email)");
       
        $stmt->execute([
             "Name" => $name,
             "Email" => $email
        ]);

       } catch(PDOException $e){
          file_put_contents("error.log",$e->getMessage() . "\n" , FILE_APPEND);
          echo "Une erreur est survenue. Contactez l'administrateur.";
       }

   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <input type="text" name="name">
        <input type="email"  name="email">
        <button type="submit">Add</button>

    </form>
    
</body>
</html>