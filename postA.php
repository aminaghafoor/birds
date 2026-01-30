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

    <nav class="navbar">
       <h1 class="heading center">Centrala Trust for Ornithology</h1>
    <div class="logo">CTO</div>
    <div class="hamburger" id="hamburger">&#9776;</div>
    <ul class="nav-links" id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="ViewPosts.php">view posts</a></li>
        <li><a href="RegisterA.php">Register</a></li>
        <li><a href="LoginN.php">Login</a></li>
    </ul>
</nav>

<script>       
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>
 
  <form method="get">
       <input type="text" name="search" placeholder="Search comments" />
       <button type="submit">Search</button>
  </form>

<section class="viewpost-section">
  <?php while ($row = $result->fetch_assoc()): ?>
  <div style="border:1px solid #ccc; padding:10px; margin:10px;">
    <h3><?= htmlspecialchars($row['bird']) ?> spotted in <?= htmlspecialchars($row['location']) ?></h3>
    <p><strong>By:</strong> <?= htmlspecialchars($row['username']) ?> | <?= $row['date'] ?> <?= $row['time'] ?></p>
    <p><strong>Activity:</strong> <?= htmlspecialchars($row['activity']) ?> | Duration: <?= $row['duration'] ?> mins</p>
    <p><?= htmlspecialchars($row['comments']) ?></p>
    
  <div class="post-image">
  <?php if ($row['image']): ?>
    <img 
      src="<?= htmlspecialchars($row['image']) ?>" 
      alt="Bird Image"
      class="fade-img"
      onclick="openModal(this)"
    />
    <p class="caption"><?= htmlspecialchars($row['bird']) ?> in <?= htmlspecialchars($row['location']) ?></p>
  <?php endif; ?>
</div>


  </div>
 <?php endwhile; ?>

    </section>

  <div class="bottom-footer">
    <p> © 2025 Centrala Trust for Ornithology. <br>
       All Rights Reserved.  <br>
       Developed By Amna</p>
    </div>

    <!-- Image Modal -->
<div id="imgModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImg">
</div>

<script>
function openModal(img) {
  document.getElementById("imgModal").style.display = "flex";
  document.getElementById("modalImg").src = img.src;
}

function closeModal() {
  document.getElementById("imgModal").style.display = "none";
}
</script>

</body>
</html>

<style>
    /* Center image */
.post-image {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 10px;
}

/* Image styling */
.fade-img {
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
  max-width: 180px;   /* Controls image size */
   height: 160px;
  object-fit: cover;   /* prevents stretching */;
  cursor: pointer;

  /* Fade-in animation */
  animation: fadeIn 1s ease-in;
}

/* Caption */
.caption {
  margin-top: 6px;
  font-size: 14px;
  color: #333;
  font-style: italic;
}

/* Fade animation */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

</style>

<style>
    .modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.8);
  justify-content: center;
  align-items: center;
}

.modal-content {
  max-width: 90%;
  max-height: 90%;
  border-radius: 10px;
}

.close {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 35px;
  color: white;
  cursor: pointer;
}

</style>

<style>
    .viewpost-section {
  background-color: #f4f6f8;
  padding: 20px;
}

.viewpost-section > div {
  background-color: #ffffff;
  border-radius: 12px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: transform 0.2s ease;
}

.viewpost-section > div:hover {
  transform: translateY(-3px);
}

</style>