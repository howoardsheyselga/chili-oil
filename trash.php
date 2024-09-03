<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isay Chili Oil</title>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            overflow-x: hidden; /* Prevent horizontal overflow */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #333;
            color: white;
            position: relative;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        .navbar .logo a {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            align-items: center; /* Center items vertically */
            width: 100%; /* Ensure full width */
        }

        .nav-links li {
            margin: 0 1rem;
            position: relative;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            display: inline-block;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 2px;
            width: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .menu-toggle .bar {
            height: 3px;
            width: 25px;
            background-color: white;
            margin: 3px 0;
            border-radius: 3px;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .menu-toggle.active .bar:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }

        .menu-toggle.active .bar:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active .bar:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
        }

        .nav-links {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .content {
            padding: 2rem;
        }

        section {
            margin: 2rem 0;
        }

        section h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .nav-links {
                display: flex;
                flex-direction: column;
                width: 100%;
                background-color: #333;
                position: absolute;
                top: 60px;
                left: 0;
                padding: 1rem;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
                transform: translateY(-100%);
                opacity: 0;
                pointer-events: none;
                margin: 0; /* Remove any margin that might push it out */
                box-sizing: border-box; /* Include padding and border in width */
            }

            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
                pointer-events: auto;
            }

            .nav-links li {
                margin: 0.5rem 0;
                text-align: center;
            }

            .menu-toggle {
                display: flex;
            }

            .navbar {
                padding: 1rem; /* Adjust padding for mobile */
            }
        }

        /* Icons and hover effects */
        .icons {
            display: flex;
            align-items: center;
        }

        .icons .icon {
            font-size: 1.5rem;
            color: white;
            margin-left: 1rem;
            cursor: pointer;
            position: relative;
        }

        .icons .icon:hover .dropdown {
            display: flex;
        }

        .dropdown {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #333;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 0.5rem;
            margin-top: 0.5rem;
            z-index: 1000;
        }

        .dropdown a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            display: block;
            text-align: center;
        }

        .dropdown a:hover {
            background-color: #555;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#">MyLogo</a>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="icons">
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
                <div class="dropdown">
                    <a href="form.php?type=login">Log In</a>
                    <a href="form.php?type=signup">Sign Up</a>
                </div>
            </div>
            <div class="menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuToggle = document.querySelector(".menu-toggle");
            const navLinks = document.querySelector(".nav-links");

            menuToggle.addEventListener("click", () => {
                menuToggle.classList.toggle("active");
                navLinks.classList.toggle("active");
            });
        });
    </script>
</body>
</html>
