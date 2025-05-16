<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PHP CRUD Project - About</title>

<!-- Font Awesome CDN -->



  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome CDN for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #f0f4f8, #e0f7fa);
      color: #333;
    }

    .container {
      max-width: 900px;
      margin: 4rem auto;
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      text-align: center;
    }

    h1 {
      font-size: 2.8rem;
      color: #00796b;
      margin-bottom: 1rem;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
      border: 2px solid #ffffff;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .info-section {
      margin-top: 2rem;
      text-align: left;
    }

    .info-section h2 {
      font-size: 1rem;
      margin: 0.6rem 0;
      color: gray;
      font-weight: 400;
    }
        .info-section h2 strong{
      font-size: 1.2rem;
      margin: 0.6rem 0;
      color: black;
      
    }

    /* .contact-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.1rem;
      margin: 0.5rem 0;
      color: #00796b;
    }

    .contact-item i {
      color: #00796b;
    } */
     .contact-item {
  display: flex;
  align-items: center;
  gap: 15px;
  font-size: 1.1rem;
  margin: 1rem 0;
  color: #333;
}

.icon-circle {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  flex-shrink: 0;
}

/* Different gradient backgrounds for each icon */
.user-icon {
  background: linear-gradient(135deg, #4caf50, #81c784);
}

.grad-icon {
  background: linear-gradient(135deg, #42a5f5, #64b5f6);
}

.email-icon {
  background: linear-gradient(135deg, #ef5350, #e57373);
}

.phone-icon {
  background: linear-gradient(135deg, #ffb74d, #ffca28);
}

.icon-circle i {
  font-size: 18px;
}

/* Hover effect */
.contact-item:hover .icon-circle {
  transform: scale(1.2);
  box-shadow: 0 8px 15px rgba(0,0,0,0.2);
}

.teacher-icon {
  background: linear-gradient(135deg, #8e24aa, #ba68c8); /* Purple */
}

.subject-icon {
  background: linear-gradient(135deg, #f57c00, #ffb74d); /* Orange */
}

.topic-icon {
  background: linear-gradient(135deg, #0288d1, #4fc3f7); /* Blue */
}



    hr {
      border: none;
      height: 1px;
      background-color: #ccc;
      margin: 2rem 0;
    }

    .btn {
      display: inline-block;
      background-color: #00796b;
      color: white;
      padding: 0.6rem 1.5rem;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #004d40;
    }

    .footer {
      margin-top: 2rem;
      font-size: 0.9rem;
      color: #777;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2rem;
      }

      .info-section h2 {
        font-size: 1rem;
      }

      .profile-img {
        width: 120px;
        height: 120px;
      }

      .contact-item {
        font-size: 1rem;
      }


      
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>About This Project</h1>

    <!-- Profile Image -->
    <img src="./image/profile.JPG" alt="Profile" class="profile-img" />

<div class="info-section">
  <div class="contact-item">
    <div class="icon-circle user-icon">
      <i class="fa-solid fa-user"></i>
    </div>
    <span><strong>Name:</strong> Mi Aknureach</span>
  </div>

  <div class="contact-item">
    <div class="icon-circle grad-icon">
      <i class="fa-solid fa-graduation-cap"></i>
    </div>
    <span><strong>Class:</strong> A6 202</span>
  </div>

  <div class="contact-item">
    <div class="icon-circle email-icon">
      <i class="fa-solid fa-envelope"></i>
    </div>
    <span><strong>Email:</strong> Reachzz567@gmail.com</span>
  </div>

  <div class="contact-item">
    <div class="icon-circle phone-icon">
      <i class="fa-solid fa-phone"></i>
    </div>
    <span><strong>Contact:</strong> +855 96 668 0787</span>
  </div>
</div>




    <hr>

<div class="info-section">
  <div class="contact-item">
    <div class="icon-circle teacher-icon">
      <i class="fa-solid fa-chalkboard-user"></i>
    </div>
    <span><strong>Teacher Name:</strong> Meng Hann</span>
  </div>

  <div class="contact-item">
    <div class="icon-circle subject-icon">
      <i class="fa-solid fa-book"></i>
    </div>
    <span><strong>Subject:</strong> Backend Web Development</span>
  </div>
</div>

<hr>

<div class="info-section">
  <div class="contact-item">
    <div class="icon-circle topic-icon">
      <i class="fa-solid fa-layer-group"></i>
    </div>
    <span><strong>Topic:</strong> User Information Management System (CRUD)</span>
  </div>
</div>


    <hr>

    <a href="index.php" class="btn">⬅ Back to Dashboard</a>

    <div class="footer">
      &copy; 2025 Mi Aknureach — All rights reserved.
    </div>
  </div>
</body>
</html>
