<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Welcome page </title>
</head>
<body>
    <header>
        <nav>
            <div>
                <h3> Menu</h3>
                <ul class="menu-member">
                    <li>Options</li>
                    <li>Hello User</li>
                </ul>
            </div>
        </nav>
    <header>
<section class="forms">
    <div class="wrapper">
        <div class="chat">
            <form action='chat.php' method="post">
            <div class="receivedMsg">
            <textarea id="msg" required class="msg"></textarea>
            </div>   <br>
            <div class="msgArea">
                <label for="comments">Write your message here:</label>
                <textarea id="msg" required class="msg"></textarea>
            </div>
            <button type="submit" name="submit">Sent</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>