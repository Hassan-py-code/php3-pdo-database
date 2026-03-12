



<?php  

  // handel error using try & catch
  try{
     
      $pdo = new PDO("mysql:host=localhost;dbname=blogddb",'root','');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo  "connection is successful" . "<br>" ;


  }catch(PDOException $e){
       
     echo "error " + $e->getMessage();
  }


  try {

    $pdo->query("SELECT * FROM users");

  } catch (PDOException $e) {
    echo "Error SQL : " . $e->getMessage();
    file_put_contents('errors.log', $e->getMessage() . "\n", FILE_APPEND);
    echo "An error occurred. Please contact the administrator.";
}


  



 ?>