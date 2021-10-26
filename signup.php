<?php

if(isset($_POST["submit"])){
   $uname=$_POST["user"];
   $user_pwd=$_POST["pwd"];
   $pwd_repeat=$_POST["pwdrepeat"];
   require_once'connectDB.php';
   require_once'functions.php';
   if (emptyInputSingup($uname,$user_pwd, $pwd_repeat)!== false) {
       header ("location:/Login_chat/signup_page.php?error=empty_input");
       exit();
    };
    if (invalidUname($uname)!== false) {
        header ("location:/Login_chat/signup_page.php?error=invalidUname");
        exit();
     };
     if (invalidPassword($user_pwd,$pwd_repeat)!== false) {
        header ("location:/Login_chat/signup_page.php?error=Passwordsdontmatch");
        exit();
     };
     if (existingUser($conn,$uname)!== false) {
        header ("location:/Login_chat/signup_page.php?error=unameTaken");
        exit();
     };
     createUser($conn,$uname,$user_pwd,);
     
     
}
else {
    header("location:/Login_chat/signup_page.php");
    exit();
};

?>