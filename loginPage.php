<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Welcome page </title>
</head>
<body>
    
<section class="forms">
    <div class="wrapper">
        <div class="login">
            <h4>LOGIN</h4>
            <form action='login.php' method="post">
            <input type="text"name="user"placeholder="Username"><br> </br>
            <input type="password" name="pwd"placeholder="Password"><br> </br>
            <button type="submit" name="submit">LOGIN</button>
            </form>
            <a href="signup_page.php">Not register yet?Sign Up here!</a>
        </div>
    </div>
</section>
</body>
</html>