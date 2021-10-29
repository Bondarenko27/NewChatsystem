<?php

if(isset($_SESSION["user"])&&($_POST["Sendsubmit"]) ){
   
   $uname= $_SESSION["user"];
   $msg=$_POST["msg"];
   require_once'connectDB.php';
   require_once'functions.php';
   $query="INSERT INTO msgs(username,msg,) VALUES ('$uname','$msg')";
   $statement= mysqli_stmt_init($conn);
  
   if (!mysqli_stmt_prepare($statement, $query)) {
       header ("location:/NewChat/chatPage.php?error=failedtosend");
       exit();
   }
   mysqli_stmt_bind_param($statement,"ss",$uname,$msg);
   mysqli_stmt_execute($statement);
   mysqli_stmt_close($statement);
   header ("location:/NewChat/chatPage.php?error=succes");
   exit();

  
   
} 





?>
