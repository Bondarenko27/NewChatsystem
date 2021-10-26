<?php

if(isset($_POST["submit"])){
   $uname=stripslashes($_POST["user"]);
   $user_pwd=stripslashes($_POST["pwd"]);
   require_once'connectDB.php';
   require_once'functions.php';
   if (emptyInputlogin($uname,$user_pwd)!== false) {
       header ("location:/Login_chat/index.php?error=empty_input");
       exit();
    };
    if(loginUser($conn,$uname,$user_pwd)!==false){
        header ("location:/Login_chat/index.php?error=empty_input");
       exit();
    };
}
   
else {
    header("location:/Login_chat/chatPage.php");
    exit();
};


   

?>