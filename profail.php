<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account</title>
    <link rel="stylesheet" href="Profail.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">My Grocery Store</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contant.php">Contact</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="profail.php">Your Account</a></li>
          
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <ul>
                <li><a href="#overview">Dashboard Overview</a></li>
                <li><a href="#order-history">Order History</a></li>
                <li><a href="#profile">Profile Information</a></li>
                <li><a href="#payment-methods">Payment Methods</a></li>
                <li><a href="#wishlist">Wishlist</a></li>
                <li><a href="#settings">Settings</a></li>
                <li><a href="#support">Support</a></li>
            </ul>
        </aside>

        <!-- Content Area -->
        <main class="content">
            <section id="overview">
                <h2>Dashboard Overview</h2>
                <!-- Overview content here -->
            </section>
            <section id="order-history">
                <h2>Order History</h2>
                <!-- Order history content here -->
            </section>
            <section id="profile">
                <h2>Profile Information</h2>
                <!-- Profile form here -->
            </section>
            <section id="payment-methods">
                <h2>Payment Methods</h2>
                <!-- Payment methods content here -->
            </section>
            <section id="wishlist">
                <h2>Wishlist</h2>
                <!-- Wishlist content here -->
            </section>
            <section id="settings">
                <h2>Settings</h2>
                <!-- Settings content here -->
            </section>
            <section id="support">
                <h2>Support</h2>
                <!-- Support content here -->
            </section>
        </main>
    </div>

    <script>
        document.querySelectorAll('.sidebar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

    </script>
</body>
</html>
