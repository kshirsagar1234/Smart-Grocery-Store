<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Grocery Store</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<body>
    <!-- Top bar -->
    <div class="top-bar">
        <div class="logo">Smart Grocery Store</div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>
    </div>

    <!-- Navigation bar -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pr.php">Products</a></li>
            <li><a href="serllr.php">Sell</a></li>
            <li><a href="contant.php">Contact</a></li>
            <li><a href="">Services</a></li>
            <li><a href="about.php">About Us</a></li>
           
            <li><a href="profail.php">Your Account</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="yourorder.php">Your Order</a></li>
        </ul>
    </nav>

    <!-- Hero section -->
    <section class="hero">
        <h1>Welcome to Smart Grocery Store</h1>
        <p>Your one-stop shop for all your grocery needs.</p>
        <button id="shopNowBtn">Shop Now</button>
    </section>

   

    <!-- Blog section -->
    <section class="blogs">
        <h2>Our Blog</h2>
        <div class="blog-list">
            <!-- Example blog item -->
            <div class="blog-item">
                <img src="images/blog1.jpg" alt="Blog 1">
                <h3>Blog Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
                <button>Read More</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pr.php">Products</a></li>
                    <li><a href="contant.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: contact@smartgrocery.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for redirect logic -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const shopNowBtn = document.getElementById('shopNowBtn');

            shopNowBtn.addEventListener('click', function() {
                if (sessionStorage.getItem('loggedIn') === 'true') {
                    // User is logged in, redirect to product page
                    window.location.href = 'pr.php';
                } else {
                    // User is not logged in, redirect to registration page
                    window.location.href = 'pr.php';
                }
            });

            // Example function to simulate successful login
            function simulateLogin() {
                // After successful login, set 'loggedIn' flag in sessionStorage
                sessionStorage.setItem('loggedIn', 'true');
            }

            // Example function to simulate logout
            function simulateLogout() {
                // To logout, clear 'loggedIn' flag
                sessionStorage.removeItem('loggedIn');
            }

            // Call simulateLogin() or simulateLogout() based on your login logic
        });
    </script>
</body>
</html>
