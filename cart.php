<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .navbar {
            background-color: rgba(51, 51, 51, 0.8); /* Translucent background */
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .logo {
            float: left;
            font-size: 22px;
            font-weight: bold;
            color: white;
            padding: 10px 20px;
        }

        .cart-container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
        }

        .cart-items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-items th, .cart-items td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        .cart-items th {
            background-color: #f8f8f8;
        }

        .product-image {
            width: 50px;
        }

        .quantity {
            width: 60px;
            padding: 5px;
            text-align: center;
        }

        .remove-btn {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background-color: #ff1a1a;
        }

        .cart-summary {
            text-align: right;
            margin-top: 20px;
        }

        .checkout-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .checkout-btn:hover {
            background-color: #45a049;
        }

        .currency-toggle {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navigation bar with translucent background -->
    <div class="navbar">
        <div class="logo">Smart Grocery Store</div>
        <a href="index.php">Home</a>
        <a href="pr.php">Products</a>
        <a href="cart.php">Cart</a>
        <a href="contant.php">Contact</a>
    </div>

    <!-- Currency toggle -->
    <div class="currency-toggle">
        <label for="currency">Choose Currency: </label>
        <select id="currency">
            <option value="INR">₹ INR</option>
            <option value="USD">$ USD</option>
        </select>
    </div>

    <!-- Shopping Cart Container -->
    <div class="cart-container">
        <h1>Shopping Cart</h1>
        <table class="cart-items">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="cart-items-body">
                <tr>
                    <td>Quaker Oats</td>
                    <td><img src="https://m.media-amazon.com/images/I/61SHF0RYZDL._SX342_SY445_.jpg" alt="Quaker Oats" class="product-image"></td>
                    <td><input type="number" value="1" min="1" class="quantity"></td>
                    <td class="price" data-price="10">$10</td>
                    <td class="total">$10</td>
                    <td><button class="remove-btn">Remove</button></td>
                </tr>
                <tr>
                    <td>Mixed Fruit</td>
                    <td><img src="http://localhost/smart%20Grocery%20store/breakfast%20pr/pr.1.jpg" alt="Mixed Fruit" class="product-image"></td>
                    <td><input type="number" value="1" min="1" class="quantity"></td>
                    <td class="price" data-price="5">$5</td>
                    <td class="total">$5</td>
                    <td><button class="remove-btn">Remove</button></td>
                </tr>
            </tbody>
        </table>

        <div class="cart-summary">
            <h2>Cart Summary</h2>
            <p>Subtotal: <span id="subtotal">$30.00</span></p>
            <button class="checkout-btn">Checkout </button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cartItemsBody = document.getElementById("cart-items-body");
            const subtotalElement = document.getElementById("subtotal");
            const currencySelect = document.getElementById("currency");

            // Update subtotal when quantity is changed
            cartItemsBody.addEventListener("change", function(event) {
                if (event.target.classList.contains("quantity")) {
                    updateCartTotal();
                }
            });

            // Remove item from cart
            cartItemsBody.addEventListener("click", function(event) {
                if (event.target.classList.contains("remove-btn")) {
                    event.target.closest("tr").remove();
                    updateCartTotal();
                }
            });

            // Currency change event
            currencySelect.addEventListener("change", function() {
                updateCartTotal();
            });

            // Function to update the cart total
            function updateCartTotal() {
                let subtotal = 0;
                const rows = cartItemsBody.querySelectorAll("tr");
                const currency = currencySelect.value;
                const currencySymbol = currency === "INR" ? "₹" : "$";
                const conversionRate = currency === "INR" ? 80 : 1;

                rows.forEach(function(row) {
                    const quantity = row.querySelector(".quantity").value;
                    const basePrice = parseFloat(row.querySelector(".price").getAttribute("data-price"));
                    const price = basePrice * conversionRate;
                    const total = price * quantity;
                    row.querySelector(".price").textContent = `${currencySymbol}${price.toFixed(2)}`;
                    row.querySelector(".total").textContent = `${currencySymbol}${total.toFixed(2)}`;
                    subtotal += total;
                });

                subtotalElement.textContent = `${currencySymbol}${subtotal.toFixed(2)}`;
            }

            updateCartTotal(); // Initial call to update totals
        });
    </script>
</body>
</html>
