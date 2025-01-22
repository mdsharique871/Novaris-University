<?php
// Initialize session for user login persistence
session_start();

// Dummy credentials for the example (for testing purposes)
$valid_username = "student";
$valid_password = "password123"; // You should hash passwords in production.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if ($username == $valid_username && $password == $valid_password) {
        // Login success
        $_SESSION['username'] = $username;
        header("Location: welcome.php");  // Redirect to welcome page
        exit;
    } else {
        $error_message = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novaris University - Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      height: 100vh;
      background: url('https://www.example.com/your-university-image.jpg') no-repeat center center fixed;
      background-size: cover;
      filter: blur(8px);
      position: relative;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
    }

    .logo {
      width: 100px;
      margin-bottom: 20px;
    }

    .form-container {
      background: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 10px;
      width: 300px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    h2 {
      color: white;
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ddd;
      background: #fff;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #5a7e9e;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #3e5a72;
    }

    .signup-link {
      margin-top: 15px;
      color: white;
    }

    .signup-link a {
      color: #5a7e9e;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://www.example.com/novaris-university-logo.png" alt="Novaris University Logo" class="logo">
    <div class="form-container">
      <h2>Login to Novaris University</h2>
      <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
      <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
      <div class="signup-link">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
    </div>
  </div>
</body>
</html>
