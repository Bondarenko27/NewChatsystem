<?php

if(isset($_POST["submit"])){
   $uname=stripslashes($_POST["user"]);
   $user_pwd=stripslashes($_POST["pwd"]);
   require_once'connectDB.php';
   require_once'functions.php';
   if (emptyInputlogin($uname,$user_pwd)!== false) {
       header ("location:/NewChat/loginPage.php?error=empty_input");
       exit();
    };
    loginUser($conn,$uname,$user_pwd);
}
else {
   
    header("location:/NewChat/chatPage.php");
    exit();
      };
    

?>