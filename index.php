<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
   
    <section class="section">

    <div class="section-text">
      <h1>Join Us at the<br>Centrala Trust<br>for Ornithology</h1>
      <p>
        Together, let's embark on a lifelong journey to enjoy,
        understand, and protect birds and the natural world
      </p>
    </div>

    <div class="section-image">
      <img src="https://images.pexels.com/photos/110812/pexels-photo-110812.jpeg" alt="Bird">
    </div>
  </section>

    <section class="about-join">
    <div class="about">
      <i class="fa-solid fa-leaf card-icon"></i>
    <h3>Our Mission</h3>
  <p>Our mission is to inspire a beautiful and deeper connnection between nature, birds and people.
    To promote the understanding of bird life and inspire communities to protect natural habitats for future generations.
  </p>
  </div>


    <div class="join">
       <i class="fa-solid fa-dove card-icon"></i>
      <h3>Join Us</h3>
    <p>Join us and help to create a future where birds, nature and people can thrive.
      Join CTO- help us conserve nature, protect birds and inspire change.
      Your involvement matters!
    </p>  
    </div>
      
  </section>

<section class="section-gallery">
  <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/46409501-480px.jpg" alt="blue tit">
      <h3>Blue Tit</h3>
  </div>


  <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/242173971-480px.jpg" alt="wood pigeon">
      <h3>Wood Pigeon</h3>
    </div>

    <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/306710541-480px.jpg" alt="goldfinch">
      <h3>Goldfinch</h3>
    </div>
   

    <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/63742431-480px.jpg" alt="house sparrow">
      <h3>House Sparrrow</h3> 
    </div>


    <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/303441381-480px.jpg" alt="robin">
      <h3>Robin</h3>
    </div>
    

  <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/303929131-480px.jpg" alt="starling">
      <h3>Starling</h3> 
    </div> 

  
  <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/610797544-480px.jpg" alt="magpie">
      <h3>Magpie</h3> 
    </div> 


  <div class="gallery">
      <img class="image" src="https://www.allaboutbirds.org/guide/assets/photo/67375011-480px.jpg" alt="blackbird">
      <h3>black bird</h3> 
    </div> 
  
</section><br><br>

<?php include("dbconnection.php");?>


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

