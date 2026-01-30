<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Post | CTO</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="page">

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

  <h2>Submit a Bird Observation</h2>

  <form class="form-container" action="submitpostA.php" method="post" enctype="multipart/form-data">

    <label>Location:
      <select name="location" required>
        <option value="">Select</option>
        <option>Erean</option><option>Brunad</option><option>Bylyn</option>
        <option>Docia</option><option>Marend</option><option>Pryn</option>
        <option>Zord</option><option>Yaean</option><option>Frestin</option>
        <option>Stonyam</option><option>Ryall</option><option>Ruril</option>
        <option>Keivia</option><option>Tallan</option><option>Adohad</option>
        <option>Obelyn</option><option>Holmer</option><option>Vertwall</option>
      </select>
    </label><br><br>

    <label>Date: <input type="date" name="date" required></label><br><br>

    <label>Time: <input type="time" name="time" required></label><br><br>

    <label>Bird Species:
      <select name="bird" required>
        <option>Wood Pigeon</option><option>House Sparrow</option>
        <option>Starling</option><option>Blue Tit</option>
        <option>Blackbird</option><option>Robin</option>
        <option>Goldfinch</option><option>Magpie</option>
        <option>Other/Unknown</option>
      </select>
    </label><br><br>

    <label>Primary Activity:
      <select name="activity" required>
        <option>Visit</option><option>Feeding</option>
        <option>Nesting</option><option>Other</option>
      </select>
    </label><br><br>

    <label>Duration (minutes): <input type="number" name="duration" min="1" required></label><br><br>

    <label>Comments:<br>
      <textarea name="comments" rows="4"></textarea>
    </label><br><br>

    <label>Image (optional): <input type="file" name="image" accept=".jpg, .jpeg, .png"></label>

    <button type="submit">Submit Post</button>

  </form>

<div class="bottom-footer">
    <p> © 2025 Centrala Trust for Ornithology. <br>
       All Rights Reserved.  <br>
       Developed By Amna</p>
    </div>
</body>
</html>