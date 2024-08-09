<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.875em;
        }

        .form-container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
    </style>
    <script>
        function validateForm() {
            const mobile = document.getElementById('mobile').value;
            const mobilePattern = /^\d{10}$/; 
            const minMobileNumber = 6000000000;
            const maxMobileNumber = 9999999999;
            const mobileNumber = parseInt(mobile, 10);
            
            const password = document.getElementById('password').value;
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}$/;

            document.getElementById('error-message').textContent = '';

            // Mobile number validation
            if (!mobilePattern.test(mobile)) {
                document.getElementById('error-message').textContent = 'Please enter exactly 10 digits.';
                return false; 
            }

            if (mobileNumber < minMobileNumber || mobileNumber > maxMobileNumber) {
                document.getElementById('error-message').textContent = 'Please enter a number between 6000000000 and 9999999999.';
                return false; 
            }

            // Password validation
            if (!passwordPattern.test(password)) {
                document.getElementById('error-message').textContent = 'Password must be at least 8 characters long, contain an uppercase letter, a lowercase letter, a digit, and a special character.';
                return false;
            }

            return true; 
        }

        function restrictInputToDigits(event) {
            const input = event.target;
            const value = input.value;
            input.value = value.replace(/\D/g, ''); 
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h1>Register</h1>
        <form action="register.php" method="post" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" required oninput="restrictInputToDigits(event)"><br>
            
            <span id="error-message" class="error"></span><br>

            <input type="submit" value="Register" id="df">
        </form>
    </div>
</body>
</html>
