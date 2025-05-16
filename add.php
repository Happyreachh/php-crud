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
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name= $_POST["name"];
        $age= $_POST["age"];
        $address= $_POST["address"];


        if($name == "" || $age == "" || $address == ""){
            echo "Please enter your information";
   
        }

        $sql = "INSERT INTO users_info (name,age,address) VALUES  ('$name','$age','$address' )";
        $result = $conn->query($sql);

        if(!$result){
            die("Error getting user information");

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
    <h1>Add User</h1>
    <form action="" method="post">
        <input placeholder="Name..." type="text" name="name" value="">
        <input placeholder="Age..." type="text" name="age" value="">
        <input placeholder="Address..." type="text" name="address" value="">
        <button class="btn_add" type="submit">Add</button>
    </form>
</div>
</body>
</html>