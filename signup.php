<?php
// Handle form submission for signup
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simple validation
    if (!empty($username) && !empty($email) && !empty($password)) {
        // In a real application, you should store the user data in a database
        header("Location: login.php"); // Redirect to login after successful signup
        exit;
    } else {
        $error_message = "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novaris University - Sign Up</title>
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
    input[type="email"],
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

    .login-link {
      margin-top: 15px;
      color: white;
    }

    .login-link a {
      color: #5a7e9e;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://www.example.com/novaris-university-logo.png" alt="Novaris University Logo" class="logo">
    <div class="form-container">
      <h2>Sign Up to Novaris University</h2>
      <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
      <form action="signup.php" method="POST">
        <input type="text" name="username" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Sign Up</button>
      </form>
      <div class="login-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>
