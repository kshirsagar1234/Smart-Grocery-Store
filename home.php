<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Grocery Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/bck1.jpg'); /* Corrected Background image URL */
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: space-between; /* Space out the logo and links */
            align-items: center; /* Aligns items vertically */
            background-color: #333;
            padding: 10px; /* Adds padding to the nav for better spacing */
        }
        nav h1 {
            color: white; /* Color for the store name */
            margin: 0; /* Remove default margin */
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 50px;
            flex: 1;
            align-items: center; /* Ensure both content and photo are vertically aligned */
        }
        .content {
            text-align: center;
            width: 60%;
        }
        .content h2 {
            font-size: 2rem;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            margin: 10px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .side-photo {
            width: 30%;
            text-align: center;
            margin-left: 20px; /* Adds spacing between content and photo */
        }
        .side-photo img {
            width: 100%; /* Ensures the image fills its container */
            max-width: 400px; /* Prevents the image from being too large */
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow for depth */
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Stack the content and photo vertically */
                text-align: center;
            }
            .side-photo {
                margin-left: 0;
                margin-top: 20px;
                width: 80%;
            }
        }
    </style>
</head>
<body>
   
    <nav>
        <h1>Smart Grocery Store</h1> <!-- Store name in the navigation -->
        <div>
            <a href="home.php">Home</a>
            <a href="contant.php">Contact</a>
            <a href="Ragister.php">Create Account</a>
            <a href="about.php">About Us</a>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            <h2>Welcome to Smart Grocery Store</h2>
            <p>Your one-stop shop for all your grocery needs.</p>
            <a href="Ragister.php" class="btn">Start</a>
            <a href="about.php" class="btn">About</a>
        </div>
        <div class="side-photo">
            <img src="images/Picture1.png" alt="Grocery Store Products"> <!-- Adjusted Side photo -->
        </div>
    </div>
    <footer>
        &copy; 2024 Smart Grocery Store. All rights reserved.
    </footer>
</body>
</html>
