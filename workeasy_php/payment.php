<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            background-image: url(wp2916561-working-farm-wallpapers.jpg);
            background-position: center;
            background-size: cover;
        }

        .payment-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: auto;
            margin-top: 60px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h1>Payment Form</h1>
        
        <!-- Payment form -->
        <form id="paymentForm">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" placeholder="Enter card number" required>
            
            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" placeholder="MM/YY" required>
            
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" placeholder="CVV" required>
            
            <!-- Call the JavaScript function on button click -->
            <button type="button" onclick="submitPayment()">Submit Payment</button>
        </form>
    </div>

    <!-- Script to handle payment processing -->
    <script>
        function submitPayment() {
            // Check if all fields are filled
            var cardNumber = document.getElementById('cardNumber').value;
            var expiryDate = document.getElementById('expiryDate').value;
            var cvv = document.getElementById('cvv').value;

            if (cardNumber.trim() !== '' && expiryDate.trim() !== '' && cvv.trim() !== '') {
                // All fields are filled, redirect to another page
                window.location.href = 'http://localhost/crud/paysuc.php';
            } else {
                // Display an alert or error message indicating fields are missing
                alert('Please fill in all required fields.');
            }
        }
    </script>
</body>
</html>
