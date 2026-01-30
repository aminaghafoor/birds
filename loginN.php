<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'amna');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $selectedRole = trim($_POST['role']);

    $stmt = $conn->prepare("SELECT * FROM newuser WHERE username = ? AND role = ?");
    $stmt->bind_param("ss", $username, $selectedRole);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: memberA.php");
            }
            exit();
        } else {
            echo "❌ Incorrect password.";
        }
    } else {
        echo "❌ No user found with this username and role.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | CTO</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <div class="header">
        <h1 class="heading center">Centrala Trust for Ornithology</h1>
        <nav class="center">
             <a href="index.php">Home</a>
             <a href="ViewPosts.php">View Posts</a>
             <a href="RegisterA.php">Register</a>
             <a href="LoginN.php">Login</a>
             <a href="CTO.php">Learn More</a>
        </nav>
    </div>
  </header>
   

<section class="form-section">

<div class="form">
  
  <h2>Login to CTO Message Board</h2>
  <form method="POST" action="loginN.php">
    <div class="input-group">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>
    </div>

    <div class="input-group">
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    </div>

    <div class="input-group">
    <label>Select Role:</label>
    <select name="role" required>
      <option value="member">Member</option>
      <option value="admin">Admin</option>
    </select><br><br>
    </div>

    <button type="submit">Login</button>

  </form>

  </div>

</section>

 <footer class="footer">
      
    <div class="box-footer">
    <h3>Find More About Birds</h3>
    <p>Explore the birds near you <br>
         and wherever you go and share <br> the latest observations from around the world.</p>
    </div>

    <div class="box-footer nth-child(2)">
    <h3>Key Features</h3>
    <p>The Centrala Trust for Ornithology <br> provides a rich bird species databases, <br> research updates and tools for <br> sharing your bird observations.</p>
    </div>

    <div class="box-footer nth-child(3)">
    <h3>Contact CTO</h3>
    <p>Have a question? <br> Contact the Centrala Trust for Ornithology <br> for assistance with observations, <br> resources and membership. <br> We are always happy to help.</p>
    </div>

    <div class="box-footer nth-child(4)">
      <h3>Quick Links</h3>
      <a href="RegisterA.php">Click Here to Register</a>
      <a href="loginN.php">Already Registered? Click Here to Login</a>
      <a href="ViewPosts.php">Click Here to View Posts</a>
      <a href="CTO.php">Wanna Know more about CTO? Click Here</a>

    </div>

    


</section>
     
  </footer>
   <div class="bottom-footer">
    <p> © 2025 Centrala Trust for Ornithology. <br>
       All Rights Reserved.  <br>
       Developed By Amna</p>
    </div>
</body>
</html>