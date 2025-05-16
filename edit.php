<?php
 $db_server = "localhost";
 $db_user = "root";
 $db_pass = "mysql687290@$";
 $db_name = "user_information";

 $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
 if($conn->connect_error){
     die("Error connecting to database" . $conn->connect_error);
 }

    $name = "";
    $age = "";
    $address = "";
    $id ="";
    

    if($_SERVER["REQUEST_METHOD"] == "GET"){

        if(!isset($_GET['id'])){
            header('location:./index.php');
            exit();
        }

        $id = $_GET['id'];


        $sql = "SELECT * FROM users_info WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(!$row){
            die("Error getting user information");
            header('location:./index.php');
        }

        $name = $row['name'];
        $age = $row['age'];
        $address = $row['address'];

      
   }
   else{
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $id = $_POST['id'];

        
        if($name == "" || $age == "" || $address == ""){
            echo "Please enter your information";
            die();
   
        }

        $sql = "UPDATE users_info SET name='$name', age='$age', address='$address' WHERE id=$id";
        $result = $conn->query($sql);
        if(!$result){
            die("Error updating user information");
           
        }
        header('location:./index.php');
        exit();

   }
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    
    .container{
        width: 70%;
        margin:  5rem auto;
        font-family: sans-serif;
    }
    button{
        color: white;
        border: none;
        border-radius: 5px;
        padding: .5rem 2rem;
        cursor: pointer;
    }
    .head{
        background-color:gray;
        color: white;
    }
    .btn_add{
        background-color: green;
        margin-bottom: 10px;
    }
    .btn_edit{
        background-color: blue;
       
    }
    .btn_delete{
        background-color: red;
        
    }
    a{
        text-decoration: none;
        color: white;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 30rem;
        margin: auto;
    }
    input{
        padding: .5rem 2rem;
        margin-bottom: .5rem;
    }
</style>
</head>

<body>
    
<div class="container">
    <h1>Edit User</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input placeholder="Name..." type="text" name="name" value="<?php echo $name?>">
        <input placeholder="Age..." type="text" name="age" value="<?php echo  $age?>">
        <input placeholder="Address..." type="text" name="address" value="<?php echo $address?>">
        <button class="btn_edit" type="submit">Edit</button>
    </form>
</div>
</body>
</html>