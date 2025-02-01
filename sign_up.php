<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
    <div class="sign-container">
        <div class="header">
            <img src="img/left-arrow.png" alt="logo">
            <h1>Create Account</h1>
        </div>
        <form class="signUp-form">
            <input type="text" placeholder="Name: (eg. John Doe)" required>
            <input type="text" placeholder="Position" required>
            <input type="text" placeholder="Student No." required pattern="[0-9]{4}-[0-9]{4}" title="The format is Incorrect!">
            <input type="password" placeholder = "Password" required>
            <input type="password" placeholder = "Confirm Password" required>
            <select id="section" name="section">
                    <option value="1A">1A</option>
                    <option value="1B">1B</option>
                    <option value="1C">1C</option>
                    <option value="2A">2A</option>
                    <option value="2B">2B</option>
                    <option value="3A">3A</option>
                    <option value="3B">3B</option>
                    <option value="4A">4A</option>
                    <option value="4B">4B</option>
                </select>
            <input type = "submit" value = "Create Account" style="margin-left:24%; padding: 10px 10px;"> <br>
        </form>

    
    </div>
   
        
    
    
</body>
</html>