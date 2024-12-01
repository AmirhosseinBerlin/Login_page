<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
</head>
<body>
    <div class="box">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <label for="password">password:</label>
            <input type="password" id="password" name="password" minlength="6" maxlength="15" required><br>
            <br>
            <label for="phone">phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
            <br>
            <input type="reset"><br>
            <input type="submit">
        </form>
    </div>
</body>
</html>