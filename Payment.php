<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Information Customer </title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .confirmation {
            margin-top: 20px;
            text-align: center;
            color: #28a745;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Basic Information</h1>
        <form id="basicForm">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="address">Billing Address:</label>
                <input type="text" id="address" placeholder="Street Address" required>
                <input type="text" id="city" placeholder="City" required>
                <input type="text" id="state" placeholder="State" required>
                <input type="text" id="zip" placeholder="Pincode" required>
            </div>
            <button type="submit">Next</button>
        </form>
        <div id="confirmationMessage" class="confirmation" style="display: none;"></div>
    </div>

    <script>
        document.getElementById('basicForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.getElementById('fullName').value;

            const confirmationMessage = document.getElementById('confirmationMessage');
            confirmationMessage.style.display = 'block';
            confirmationMessage.innerHTML = `Thank you, ${fullName}! Your information has been submitted.`;
            
            // Redirect to next page (for example, "payment.html")
            window.location.href = "pay.php";
        });
    </script>
</body>
</html>
