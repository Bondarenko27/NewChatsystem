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
            <label for="comments"> Your last messages</label>
            <textarea id="msg" required class="msg"></textarea>
            </div>   <br>
            <div class="msgArea">
                <label for="comments">Write your message here:</label>
                <textarea id="msg" required class="msg"></textarea>
            </div> <br>
            <button type="submit" name="submit"class="chatBtn">Send</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>