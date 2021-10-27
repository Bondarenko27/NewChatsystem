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
        <div class="signup">
            <h4>SIGN UP</h4>
            <form action="signup.php" method="post">
            <input type="text" name="user" placeholder="Username"><br></br>
            <input type="password" name="pwd" placeholder="Password"><br> </br>
            <input type="password" name="pwdrepeat" placeholder="Repeat Password"><br> </br>
            <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"]== "empty_input") {
                echo"<p> Fill in all fields please!</p>";
            }
            elseif ($_GET["error"]== "invalidUname") {
                echo"<p> User name is invalid!</p>";
            }
            elseif ($_GET["error"]== "Passwordsdontmatch") {
                echo"<p> Passwords don't match!</p>";
            }
            elseif ($_GET["error"]== "unameTaken") {
                echo"<p> User name already exists!</p>";
            }
        }
        ?>

    </div>
    
        
</section>


<body>
</html>