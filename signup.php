<?php

if(isset($_POST["submit"])){
   $uname=$_POST["user"];
   $user_pwd=$_POST["pwd"];
   $pwd_repeat=$_POST["pwdrepeat"];
   require_once'connectDB.php';
   require_once'functions.php';
   if (emptyInputSingup($uname,$user_pwd, $pwd_repeat)!== false) {
       header ("location:/NewChat/signupPage.php?error=empty_input");
       exit();
    };
    if (invalidUname($uname)!== false) {
        header ("location:/NewChat/signupPage.php?error=invalidUname");
        exit();
     };
     if (invalidPassword($user_pwd,$pwd_repeat)!== false) {
        header ("location:/NewChat/signupPage.php?error=Passwordsdontmatch");
        exit();
     };
     if (existingUser($conn,$uname)!== false) {
        header ("location:/NewChat/signupPage.php?error=unameTaken");
        exit();
     };
     createUser($conn,$uname,$user_pwd,);
     
     
}
else {
    header("location:/NewChat/loginPage.php");
    exit();
};

?>