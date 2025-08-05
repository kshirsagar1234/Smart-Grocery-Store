<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Grocery Store - Product Page</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Navigation Bar Styling */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items vertically centered */
            background-color: #2e8b57;
            padding: 15px 20px;
        }

        .logo {
            color: white;
            font-size: 24px; /* Adjust font size as needed */
            font-weight: bold; /* Makes the text bold */
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        /* Product Section Styling */
        .product-container {
            display: flex;
            padding: 20px;
        }

        .image-gallery {
            width: 40%;
        }

        #main-image {
            width: 100%;
        }

        .thumbnail-images {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .thumbnail-images img {
            width: 60px;
            cursor: pointer;
        }

        .product-details {
            width: 60%;
            padding-left: 20px;
        }

        .product-details h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .price-section {
            margin-top: 20px;
        }

        .price {
            font-size: 22px;
            font-weight: bold;
            color: #B12704;
        }

        .mrp del {
            font-size: 16px;
            color: grey;
        }

        .discount {
            color: #B12704;
            font-weight: bold;
        }

        .inclusive-taxes {
            margin-bottom: 10px;
        }

        .product-description {
            margin-bottom: 20px;
        }

        /* Icons Section Styling */
        .icons-section {
            display: flex;
            gap: 15px;
            margin: 20px 0;
        }

        .icon-item {
            text-align: center;
        }

        .icon-item img {
            width: 40px;
        }

        .icon-item p {
            font-size: 12px;
        }

        .product-buttons {
            margin-top: 20px;
        }

        .product-buttons button {
            padding: 12px 25px;
            margin-right: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #f9a825, #f57f17);
            color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-buttons button:hover {
            background: linear-gradient(135deg, #f57f17, #f9a825);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        .buy-now {
            background: linear-gradient(135deg, #f0c14b, #ffa41b);
        }

        .buy-now:hover {
            background: linear-gradient(135deg, #ffa41b, #f0c14b);
        }

        /* Related Products Section */
        .related-products {
            margin-top: 50px;
            padding: 20px;
        }

        .related-products h2 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        .related-items {
            display: flex;
            gap: 20px;
        }

        .related-items img {
            width: 150px;
        }

        .related-item {
            text-align: center;
        }

        .related-item p {
            margin-top: 10px;
        }

        .related-item {
            display: block; /* Make the entire div behave like a block element */
            text-decoration: none; /* Remove underline from text */
            color: inherit; /* Inherit text color */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        /* Optional: Add hover effects */
        .related-item:hover {
            opacity: 0.8; /* Change opacity on hover for a subtle effect */
        }

    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="logo">Smart Grocery Store</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="pr.php">Products</a></li>
            <li><a href="serllr.php">Sell</a></li>
            <li><a href="contant.php">Contact</a></li>
            <li><a href="">Services</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>

    <!-- Product Section -->
    <div class="product-container">
        <!-- Product Image Gallery -->
        <div class="image-gallery">
            <img src="breakfast pr/pr.1.jpg" alt="Main Product Image" id="main-image">
            <div class="thumbnail-images">
                <img src="breakfast pr/breakcregrowpr/pr.1.jpg" alt="Thumbnail 1">
                <img src="breakfast pr/breakcregrowpr/pr.2.jpg" alt="Thumbnail 2">
                <img src="breakfast pr/breakcregrowpr/pr.3.jpg" alt="Thumbnail 3">
                <img src="breakfast pr/breakcregrowpr/pr.4.jpg" alt="Thumbnail 4">
                <img src="breakfast pr/breakcregrowpr/pr.5.jpg" alt="Thumbnail 5">
            </div>
        </div>

        <!-- Product Details -->
        <div class="product-details">
            <h1>CEREGROW Kids Cereal with Multigrain, Milk & Fruits | Rich in Iron, Calcium & Protein | NO Added Colours & Flavours | 17 Nutrients | 300g, Bag-In-Box Pack.</h1>

            <!-- Product Description -->
            <p class="product-description">
                Ceregrow is a cereal designed for kids with a blend of grains like ragi, mixed fruits, and ghee, which provides nutrition and taste. It’s packed with essential vitamins and minerals to support your child's growth and development.
            </p>

            <!-- Icons Section -->
            <div class="icons-section">
                <div class="icon-item">
                    <img src="https://m.media-amazon.com/images/G/31/A2I-Convert/mobile/IconFarm/trust_icon_free_shipping_81px._CB562549966_.png" alt="Free Delivery Icon">
                    <p>Free Delivery</p>
                </div>
                <div class="icon-item">
                    <img src="https://m.media-amazon.com/images/G/31/A2I-Convert/mobile/IconFarm/icon-returns._CB562506492_.png" alt="Non-Returnable Icon">
                    <p>Non-Returnable</p>
                </div>
                <div class="icon-item">
                    <img src="https://m.media-amazon.com/images/G/31/A2I-Convert/mobile/IconFarm/icon-cod._CB562506657_.png" alt="Cash on Delivery Icon">
                    <p>Cash on Delivery</p>
                </div>
                <div class="icon-item">
                    <img src="https://m.media-amazon.com/images/G/31/A2I-Convert/mobile/IconFarm/Secure-payment._CB650126890_.png" alt="Secure Transaction Icon">
                    <p>Secure Transaction</p>
                </div>
            </div>

           

            <!-- Price Section (Moved below buttons) -->
            <div class="price-section">
                <p><span class="price">₹269</span> <span class="mrp">M.R.P: <del>₹599</del></span></p>
                <p class="discount">-55% OFF</p>
                <p class="inclusive-taxes"></p>
            </div>

             <!-- Buy Now and Add to Cart Buttons -->
             <div class="product-buttons">
    <button class="buy-now" onclick="location.href='Payment.php'">Buy Now</button>
    <button class="add-to-cart" onclick="location.href='cart.php'">Add to Cart</button>
</div>


        </div>
    </div>

    <!-- Related Products Section -->
    <div class="related-products">
        <h2>Related Products</h2>
        <div class="related-items">
            <div class="related-item">
                <a href="breakfast.php" class="related-item">
                    <img src="breakfast pr/pr.3.jpg" alt="Related Product 1">
                    <p>CEREGROW Kids Cereal - 300g</p>
                </a>
            </div>
            <div class="related-item">
                <a href="breakfast.php" class="related-item">
                    <img src="breakfast pr/pr.4.jpg" alt="Related Product 2">
                    <p>CEREGROW Kids Cereal - 500g</p>
                </a>
            </div>
            <div class="related-item">
                <a href="breakfast.php" class="related-item">
                    <img src="breakfast pr/pr.5.jpg" alt="Related Product 3">
                    <p>CEREGROW Kids Cereal - 1kg</p>
                </a>
            </div>
            <div class="related-item">
                <a href="breakfast.php" class="related-item">
                    <img src="breakfast pr/pr.6.jpg" alt="Related Product 4">
                    <p>CEREGROW Kids Cereal - 2kg</p>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
