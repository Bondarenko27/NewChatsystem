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
    <header>
        <nav>
            <div>
                <h3> Menu</h3>
                <ul class="menu-member">
                    <?php
                    if (isset($_SESSION["user"])) {
                    echo "<li>Hello ".$_SESSION["user"]."</li>";
                    echo"<li><a href='logout.php'>Log out</a></li>";
                    }
                  ?>
                   
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
            <textarea id="chat" class="msgB"></textarea>
            </div>   <br>
            <div class="msgArea">
                <label for="comments">Write your message here:</label>
               <!-- <input type="hidden" name="date" value="date('Y-M-d H:i:s')">-->
                <textarea id="msg" name="msg" required class="msgA"></textarea>
            </div> <br>
            <button type="submit" id="send"name="Sendsubmit"class="chatBtn">Send</button>
            </form>
        </div>
    </div>
</section>
</body>
<script>
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var msg=document.getElementbyId("msg");
        document.getElementbyId("send").addEventListener("click",SendMsg());
       document.getElementById("chat").innerHTML = xhttp.responseText;
    }
};
xhttp.open("POST","chat.php",true);
xhttp.send();

 
function SendMsg((params) {
    
}

 </script>

</html>