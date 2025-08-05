<!DOCTYPE html>
<html>

<head>
    <title>My Grocery Store</title>
    <link rel="stylesheet" href="serllr.css">
</head>

<body>
    <header>
        <nav>
            <button class="menu-toggle" aria-label="Toggle navigation">&#9776;</button>
            <div class="logo">My Grocery Store</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="pr.php">Products</a></li>
                <li><a href="serllr.php">Sell</a></li>
                <li><a href="contant.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="profail.php">Your Account</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="order.php">Your Order</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Become a seller on Grocery.in</h1>
                <p>Sell on Grocery, India's most visited shopping destination and get a chance to get benefits worth ₹25,000*</p>
                <a href="sellfrom.php" class="hero-button">Start Selling</a>
            </div>
            <img src="image\New_PRO.webp" class="hero-image" alt="Seller">
        </section>
        <!-- New Image Gallery Section -->
        <section class="image-gallery">
            <h2></h2>
            <div class="gallery-images">
                <img src="image/Grocery.in.png" alt="Image 1">

            </div>
              <!-- New Seller Boxes Section -->
        <section class="seller-section">
            <h2>Why Become a Seller on Grocery.in</h2>
            <div class="seller-boxes">
                <div class="seller-box">
                    <h3>Wide Reach</h3>
                    <p>Access millions of customers across India and boost your sales with our extensive reach.</p>
                </div>
                <div class="seller-box">
                    <h3>Support</h3>
                    <p>Get dedicated support and guidance to help you grow your business on our platform.</p>
                </div>
                <div class="seller-box">
                    <h3>Easy Setup</h3>
                    <p>Quick and easy setup process to get you started on selling your products right away.</p>
                </div>
            </div>
        </section>
        </section>
        <section class="info-section">
            <h2>Additional Information</h2>
            <p>Here you can add any additional information about your business, selling policies, FAQs, or anything else you think your customers should know.</p>
            <p>This section can be used to provide detailed insights, contact details, and other valuable information.</p>
        </section>
        <div class="testimonials-section">
            <h2>Here's What Grocery.in Sellers Are Saying:</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <img src="image\virat.jpg" alt="Virat Kohli">
                    <p>"Selling on Grocery.in has greatly increased my customer base. The setup was easy and the support is excellent."</p>
                    <h3>– Virat Kohli</h3>
                </div>
                <div class="testimonial">
                    <img src="image\kkk.avif" alt="Kareena Kapoor">
                    <p>"The platform is user-friendly and the reach is fantastic. My sales have gone up significantly."</p>
                    <h3>– Kareena Kapoor</h3>
                </div>
                <div class="testimonial">
                    <img src="images/testimonial3.jpg" alt="Michael Lee">
                    <p>"I love the flexibility and the customer support. Grocery.in has made selling online so much easier for me."</p>
                    <h3>– Michael Lee</h3>
                </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>We are a leading e-commerce platform offering a wide range of products at unbeatable prices. Our mission is to provide the best shopping experience to our customers.</p>
            </div>
            <div class="footer-section links">
                <h2>Useful Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: support@myecommercesite.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 E-commerce St, Shop City, SC 12345</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 My E-commerce Site | All Rights Reserved</p>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');

            menuToggle.addEventListener('click', function () {
                navLinks.classList.toggle('active');
            });
        });
    </script>
</body>

</html>
