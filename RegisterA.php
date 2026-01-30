<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | CTO</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="page">
     
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
    
    <section class="form-section">

   <div class="form">

<div class="input-group">
    <h2>User Registration:</h2>
    <form action="RegisterA.php" method="post">
</div>

<div class="input-group">
    <label>Username:</label><br>
    <input type="text" name="username" placeholder="" required><br><br>
</div>

<div class="input-group">
    <label>Email:</label><br>
    <input type="email" name="email" placeholder="" required><br><br>
</div>

<div class="input-group">
    <label>Password:</label><br>
    <input type="password" name="password" placeholder="" required><br>
    <br>
</div>
  
    <button type="Submit">Register</button>
    
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

</section>
     
  </footer>
   <div class="bottom-footer">
    <p> © 2025 Centrala Trust for Ornithology. <br>
       All Rights Reserved.  <br>
       Developed By Amna</p>
    </div>

   

</body>
</html>

<?php
$conn = new mysqli('localhost', 'root', '', 'amna');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO newuser (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        echo "Registered successfully. <a href='LoginA.php'>Login</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>