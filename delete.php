<?php 
   $db_server = "localhost";
   $db_user = "root";
   $db_pass = "mysql687290@$";
   $db_name = "user_information";
  
   $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
   if($conn->connect_error){
       die("Error connecting to database" . $conn->connect_error);
   }
   if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM users_info WHERE id = $id";
    $conn -> query($sql);
   }
   header('location:./index.php');
   exit();
?>