<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "mysql687290@$";
$db_name = "user_information";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Error connecting to database: " . $conn->connect_error);
}

$name = $age = $address = $id = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET['id'])) {
        header('location:./index.php');
        exit();
    }

    $id = intval($_GET['id']);
    $sql = "SELECT * FROM users_info WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        die("User not found.");
    }

    $name = $row['name'];
    $age = $row['age'];
    $address = $row['address'];

} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $address = trim($_POST["address"]);
    $id = intval($_POST["id"]);

    if ($name == "" || $age == "" || $address == "") {
        echo "<script>alert('Please fill in all fields');</script>";
    } else {
        $sql = "UPDATE users_info SET name='$name', age='$age', address='$address' WHERE id=$id";
        $result = $conn->query($sql);
        if (!$result) {
            die("Error updating user information.");
        }
        header('Location: ./index.php');
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit User</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e0f7fa, #f1f8e9);
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 5rem auto;
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #00796b;
      margin-bottom: 1.5rem;
    }

    label {
      font-weight: 600;
      margin-top: 1rem;
      display: block;
      color: #333;
    }

    input {
      width: 100%;
      padding: 0.7rem;
      margin-top: 0.3rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    button {
      width: 100%;
      background-color: #00796b;
      color: white;
      padding: 0.8rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #004d40;
    }

    @media (max-width: 600px) {
      .container {
        margin: 2rem 1rem;
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Edit User</h1>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />
      
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter name" value="<?php echo htmlspecialchars($name); ?>" required />
      
      <label for="age">Age</label>
      <input type="text" id="age" name="age" placeholder="Enter age" value="<?php echo htmlspecialchars($age); ?>" required />
      
      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Enter address" value="<?php echo htmlspecialchars($address); ?>" required />
      
      <button type="submit">Update</button>
    </form>
  </div>

</body>
</html>
