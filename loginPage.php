<?php
session_start();
?>

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
            </form></br>
            <a href="signupPage.php">Not register yet?Sign Up here!</a>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"]== "empty_input") {
                echo"<p> Fill in all fields please!</p>";
            }
            elseif ($_GET["error"]== "invalidUname") {
                echo"<p> User name is invalid!</p>";
            }
        
        }
        ?>
    </div>
</section>
</body>
</html>