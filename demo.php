<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CTO Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Navbar Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #2c3e50;
            color: white;
            position: relative;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .nav-links li a:hover {
            background-color: #34495e;
            border-radius: 5px;
        }

        .hamburger {
            display: none;
            font-size: 30px;
            cursor: pointer;
        }

        /* Responsive Mobile Menu */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 20px;
                width: 200px;
                background-color: #34495e;
                border-radius: 5px;
                padding: 10px 0;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                text-align: center;
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="logo">CTO</div>
    <div class="hamburger" id="hamburger">&#9776;</div>
    <ul class="nav-links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<!-- Page Content -->
<div style="padding: 20px;">
    <h1>Welcome to CTO Website</h1>
    <p>This is a demo page with a responsive hamburger menu.</p>
</div>

<script>
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>

</body>
</html>
