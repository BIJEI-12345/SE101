<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="icons.css">
    <script>
        function validateLogin(event) {
            event.preventDefault(); 

            
            const username = document.querySelector('input[type="email"]').value;
            const password = document.querySelector('input[type="password"]').value;

            const validUsername = "admin@gmail.com";
            const validPassword = "12345";

            if (username === validUsername && password === validPassword) {
                window.location.href = "admin.php";
            } else {
                alert("Failed to login. Please check your username and password.");
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="illustration">
            <img src="img/logo.jpg" alt="Logo">
        </div>
        <div class="form-container">
            <h1>ICONnect</h1>
            <p>ICONS Management System</p>
            <form onsubmit="validateLogin(event)">
                <input type="email" placeholder="Email Address" required>
                <input type="password" placeholder="Password" required>
                <a href="#">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
