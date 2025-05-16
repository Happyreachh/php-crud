<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "mysql687290@$";
$db_name = "user_information";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Error connecting to database: " . $conn->connect_error);
}

$name = $age = $address = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $address = trim($_POST["address"]);

    if ($name === "" || $age === "" || $address === "") {
        $error = "Please fill in all fields.";
    } else {
        $sql = "INSERT INTO users_info (name, age, address) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $name, $age, $address);
        $result = $stmt->execute();

        if (!$result) {
            die("Error saving user information.");
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
  <title>Add User</title>
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

    .error {
      color: red;
      text-align: center;
      margin-bottom: 1rem;
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
    <h1>Add User</h1>
    <?php if ($error): ?>
      <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form action="" method="post">
      <label for="name">Name</label>
      <input id="name" name="name" type="text" placeholder="Enter name..." value="<?php echo htmlspecialchars($name); ?>" required />

      <label for="age">Age</label>
      <input id="age" name="age" type="number" placeholder="Enter age..." value="<?php echo htmlspecialchars($age); ?>" required />

      <label for="address">Address</label>
      <input id="address" name="address" type="text" placeholder="Enter address..." value="<?php echo htmlspecialchars($address); ?>" required />

      <button type="submit">Add</button>
    </form>
  </div>

</body>
</html>
