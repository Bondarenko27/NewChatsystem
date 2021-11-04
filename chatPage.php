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
    <div class="wrapper" id="wrapper">
        <div class="chat" id="chat">
        <button id="fetch"> last messages
        </div>
        <div class="msgArea">
        <label for="comments">Write your message here:</label>
        <textarea id="msg" name="msg" required class="msgA"></textarea>
        </div> <br>
        <button type="submit" id="send"name="Sendsubmit"class="chatBtn">Send</button>
        </div>   <br>
    </div>
</section>
</body>
<script>
    document.getElementById("fetch").addEventListener("click",function() {
        const divmain = document.getElementById("chat");
        const xml = new XMLHttpRequest();
        xml.open("GET","fetchMsg.php");
        xml.send();
        xml.onload = function() {
            if(xml.status==200){
              var data = JSON.parse(xml.response);
                for (var i = 0; i < data.length; i++) {
                    var div = document.createElement("div");
                    div.innerHTML = 'Name: ' + data[i].uname + ' ' + '<br>'+ 'Message: ' + data[i].message;
                     divmain.appendChild(div);
                  
                }
            
            }
        }
    });
    
    


   
 </script>

</html>