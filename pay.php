<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .payment-container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .payment-option {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .payment-option:hover {
            background-color: #f0f0f0;
        }

        .payment-option input[type="radio"] {
            margin-right: 15px;
        }

        .payment-option img {
            width: 40px;
            height: auto;
            margin-right: 15px;
        }

        .payment-option label {
            font-size: 16px;
            font-weight: 600;
        }

        .pay-now-btn {
            background-color: #f90;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .pay-now-btn:hover {
            background-color: #e88e00;
        }

        .payment-details {
            display: none;
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #f9f9f9;
        }

        .payment-details label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .payment-details input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .verify-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .verify-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="payment-container">
        <h2>Select Payment Method</h2>

        <div class="payment-option">
            <input type="radio" name="payment" id="card" onclick="showPaymentDetails('card')" />
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa">
            <label for="card">Credit/Debit Card</label>
        </div>

        <div class="payment-option">
            <input type="radio" name="payment" id="upi" onclick="showPaymentDetails('upi')" />
                 <label for="upi">UPI</label>
        </div>

        <div class="payment-option">
            <input type="radio" name="payment" id="netbanking" onclick="showPaymentDetails('netbanking')" />
            
            <label for="netbanking">Net Banking</label>
        </div>

        <div class="payment-option">
            <input type="radio" name="payment" id="amazonpay" onclick="showPaymentDetails('amazonpay')" />
                        <label for="amazonpay">Amazon Pay</label>
        </div>

        <div class="payment-option">
            <input type="radio" name="payment" id="cod" onclick="showPaymentDetails('cod')" />
        
            <label for="cod">Cash on Delivery</label>
        </div>

        <div id="card-details" class="payment-details">
            <h3>Enter Credit Card Details</h3>
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" required>

            <label for="expiry-date">Expiry Date:</label>
            <input type="text" id="expiry-date" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" required>

            <button class="verify-btn" onclick="verifyCard()">Verify</button>
        </div>

        <div id="netbanking-details" class="payment-details">
            <h3>Enter Net Banking Details</h3>
            <label for="bank-name">Bank Name:</label>
            <input type="text" id="bank-name" required>

            <label for="user-id">User ID:</label>
            <input type="text" id="user-id" required>

            <button class="verify-btn" onclick="verifyNetBanking()">Verify</button>
        </div>

        <div id="upi-details" class="payment-details">
            <h3>Enter UPI ID</h3>
            <label for="upi-id">UPI ID:</label>
            <input type="text" id="upi-id" required>

            <button class="verify-btn" onclick="verifyUPI()">Verify</button>
        </div>

        <div id="amazonpay-details" class="payment-details">
            <h3>Enter Amazon Pay Details</h3>
            <label for="amazon-email">Email:</label>
            <input type="email" id="amazon-email" required>

            <label for="amazon-mobile">Mobile Number:</label>
            <input type="text" id="amazon-mobile" required>

            <button class="verify-btn" onclick="verifyAmazonPay()">Verify</button>
        </div>

        <div id="cod-details" class="payment-details">
            <h3>Cash on Delivery</h3>
            <p>No additional details required. Just confirm your order.</p>
            <button class="verify-btn" onclick="confirmCOD()">Confirm</button>
        </div>

        <button class="pay-now-btn">Pay Now</button>
    </div>

    <script>
        function showPaymentDetails(paymentType) {
            // Hide all payment details sections
            document.getElementById('card-details').style.display = 'none';
            document.getElementById('netbanking-details').style.display = 'none';
            document.getElementById('upi-details').style.display = 'none';
            document.getElementById('amazonpay-details').style.display = 'none';
            document.getElementById('cod-details').style.display = 'none';

            // Show the relevant payment details section
            if (paymentType === 'card') {
                document.getElementById('card-details').style.display = 'block';
            } else if (paymentType === 'netbanking') {
                document.getElementById('netbanking-details').style.display = 'block';
            } else if (paymentType === 'upi') {
                document.getElementById('upi-details').style.display = 'block';
            } else if (paymentType === 'amazonpay') {
                document.getElementById('amazonpay-details').style.display = 'block';
            } else if (paymentType === 'cod') {
                document.getElementById('cod-details').style.display = 'block';
            }
        }

        function verifyCard() {
            const cardNumber = document.getElementById('card-number').value;
            const expiryDate = document.getElementById('expiry-date').value;
            const cvv = document.getElementById('cvv').value;

            // Add validation logic as needed
            alert(`Verifying Card:\nCard Number: ${cardNumber}\nExpiry Date: ${expiryDate}\nCVV: ${cvv}`);
        }

        function verifyNetBanking() {
            const bankName = document.getElementById('bank-name').value;
            const userId = document.getElementById('user-id').value;

            // Add validation logic as needed
            alert(`Verifying Net Banking:\nBank Name: ${bankName}\nUser ID: ${userId}`);
        }

        function verifyUPI() {
            const upiId = document.getElementById('upi-id').value;

            // Add validation logic as needed
            alert(`Verifying UPI:\nUPI ID: ${upiId}`);
        }

        function verifyAmazonPay() {
            const email = document.getElementById('amazon-email').value;
            const mobile = document.getElementById('amazon-mobile').value;

            // Add validation logic as needed
            alert(`Verifying Amazon Pay:\nEmail: ${email}\nMobile: ${mobile}`);
        }

        function confirmCOD() {
            alert('Cash on Delivery confirmed!');
        }
    </script>
</body>
</html>
