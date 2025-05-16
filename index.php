<?php
     $db_server = "localhost";
     $db_user = "root";
     $db_pass = "mysql687290@$";
     $db_name = "user_information";

     $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
     if($conn->connect_error){
         die("Error connecting to database" . $conn->connect_error);
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <style>
    
    .container{
        width: 70%;
        margin:  5rem auto;
        font-family: sans-serif;
    }
    table {
        font-family: sans-serif;
        border: 1px solid black;
        text-align: center;
        
        border-collapse: collapse;
        width: 100%;
    }
    th,td{
        border: 1px solid black;
        padding: 10px;
    }
    tr:nth-child(even){
        background-color: #f2f2f2;
    }
    .head{
        background-color:gray;
        color: white;
    }
    button{
        color: white;
        border: none;
        border-radius: 5px;
        padding: .5rem 2rem;
        cursor: pointer;
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
        <h1>User Information</h1>
        <button class="btn_add"><a href="add.php">Add New</a></button>
    <table>
        <tr>
            <th class="head">Name</th>
            <th class="head">Age</th>
            <th class="head">Address</th>
            <th class="head">Actions</th>
        </tr>

        <?php 
            $sql = "SELECT * FROM users_info";
            $result = $conn->query($sql);

            if(!$result){
                die("Error getting user information");

            }
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[age]</td>
                        <td>$row[address]</td>
                        <td>
                            <button class='btn_edit'><a href='./edit.php?id=$row[id]'>Edit</a></button>
                            <button class='btn_delete'><a href='./delete.php?id=$row[id]'>Delete</a></button>
                        </td>
                    </tr>

                ";
            }
        ?>

        
    </table>
    </div>
</body>
</html>