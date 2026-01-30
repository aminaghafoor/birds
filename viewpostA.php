<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'amna');



$search = isset($_GET['search']) ? "%" . $_GET['search'] . "%" : "%";

$stmt = $conn->prepare("SELECT observations.*, newuser.username FROM observations JOIN newuser ON observations.user_id = newuser.id WHERE comments LIKE ?");
$stmt->bind_param("s", $search);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bird Sightings | CTO</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <div class="header">
        <h1 class="heading center">Centrala Trust for Ornithology</h1>
    <nav class="center">
      <a href="memberA.php">My Profile</a>
      <a href="newpostA.php">New Post</a>
      <a href="viewpostA.php">View Post</a>

      <form action="Logout.php" method="post">
        <button class="exit" type="submit">Logout</button>
      </form>
    </nav>
  </header>

  <h2>All Bird Sightings</h2>

  <form method="get">
       <input type="text" name="search" placeholder="Search comments" />
       <button type="submit">Search</button>
  </form>

  <?php while ($row = $result->fetch_assoc()): ?>
  <div style="border:1px solid #ccc; padding:10px; margin:10px;">
    <h3><?= htmlspecialchars($row['bird']) ?> spotted in <?= htmlspecialchars($row['location']) ?></h3>
    <p><strong>By:</strong> <?= htmlspecialchars($row['username']) ?> | <?= $row['date'] ?> <?= $row['time'] ?></p>
    <p><strong>Activity:</strong> <?= htmlspecialchars($row['activity']) ?> | Duration: <?= $row['duration'] ?> mins</p>
    <p><?= htmlspecialchars($row['comments']) ?></p>

    <?php if ($row['image']): ?>
      <img src="<?= htmlspecialchars($row['image']) ?>" alt="Bird Image" width="200" />
    <?php endif; ?>

  </div>
 <?php endwhile; ?>

  <div class="bottom-footer">
    <p> © 2025 Centrala Trust for Ornithology. <br>
       All Rights Reserved.  <br>
       Developed By Amna</p>
    </div>
</body>
</html>