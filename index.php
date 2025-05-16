<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "mysql687290@$";
    $db_name = "user_information";

    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Error connecting to database: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e0f2f1, #ffffff);
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 4rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #00796b;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .btn-add {
            background-color: #43a047;
        }

        .btn-add:hover {
            background-color: #2e7d32;
        }

        .btn-about {
            background-color: #0288d1;
        }

        .btn-about:hover {
            background-color: #01579b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        th, td {
            padding: 1rem;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #00796b;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f1f1f1;
        }

        .action-btn {
            padding: 0.4rem 1rem;
            font-size: 0.9rem;
            border-radius: 20px;
            color: white;
            text-decoration: none;
            margin: 0 5px;
            display: inline-block;
        }

        .btn-edit {
            background-color: #1976d2;
        }

        .btn-edit:hover {
            background-color: #0d47a1;
        }

        .btn-delete {
            background-color: #e53935;
        }

        .btn-delete:hover {
            background-color: #b71c1c;
        }

        @media (max-width: 600px) {
            th, td {
                font-size: 0.85rem;
                padding: 0.5rem;
            }

            .btn, .action-btn {
                padding: 0.4rem 1rem;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Information</h1>

        <a href="add.php" class="btn btn-add">➕ Add New</a>

        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php 
                $sql = "SELECT * FROM users_info";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Error getting user information");
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>{$row['name']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['address']}</td>
                            <td>
                                <a href='edit.php?id={$row['id']}' class='action-btn btn-edit'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='action-btn btn-delete'>Delete</a>
                            </td>
                        </tr>
                    ";
                }
            ?>
        </table>

        <a href="about.php" class="btn btn-about">ℹ️ About Me</a>
    </div>
</body>
</html>
