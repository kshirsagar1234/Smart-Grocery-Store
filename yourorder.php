<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders - Smart Grocery Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #4CAF50;
            padding: 1rem;
        }

        nav h1 {
            display: inline-block;
            color: white;
            margin: 0;
        }

        nav ul {
            list-style: none;
            float: right;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .order-container {
            width: 80%;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .order {
            border-bottom: 1px solid #ddd;
            padding: 1rem 0;
        }

        .product {
            display: flex;
            align-items: center;
        }

        .product img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .product-details {
            margin-left: 1rem;
        }

        .track-order {
            display: inline-block;
            margin-top: 1rem;
            color: #4CAF50;
            text-decoration: none;
            cursor: pointer;
        }

        .download-invoice {
            display: block;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Smart Grocery Store</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pr.php">Products</a></li>
            <li><a href="profail.php">Your Account</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="yourorder.php">Your Orders</a></li>
        </ul>
    </nav>
    
    <div class="order-container">
        <h2>Your Orders</h2>

        <!-- First Order -->
        <div class="order" id="order1">
            <h3>Order #123456</h3>
            <p><strong>Order Date:</strong> October 9, 2024</p>

            <div class="product">
                <img src="breakfast pr/pr.1.jpg" alt="Mixed Fruit Ghee">
                <div class="product-details">
                    <h4>Mixed Fruit Ghee</h4>
                    <p>Quantity: 1</p>
                    <p>Price: ₹500</p>
                    <a href="#" class="track-order">Track Order</a>
                </div>
            </div>

            <button class="download-invoice">Download Invoice</button>
        </div>

        <!-- Second Order -->
        <div class="order" id="order2">
            <h3>Order #789101</h3>
            <p><strong>Order Date:</strong> October 10, 2024</p>

            <div class="product">
                <img src="breakfast pr/pr.3.jpg" alt="Almond Honey Butter">
                <div class="product-details">
                    <h4>Almond Honey Butter</h4>
                    <p>Quantity: 10</p>
                    <p>Price: ₹700</p>
                    <a href="#" class="track-order">Track Order</a>
                </div>
            </div>

            <button class="download-invoice">Download Invoice</button>
        </div>
    </div>

    <script>
        // Invoice download alert
        document.querySelectorAll('.download-invoice').forEach(function(button) {
            button.addEventListener('click', function() {
                alert("Invoice Downloading...");
                // Add code to handle actual download functionality
            });
        });
    </script>
</body>
</html>
