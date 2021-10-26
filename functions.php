<?php

function emptyInputSingup($uname,$user_pwd, $pwd_repeat){
    $result;
    if (empty($uname)||empty($user_pwd)||empty($pwd_repeat)) {
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;

};

function invalidUname($uname){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
        $result=true;
       }
    else {
        $result=false;
    }
    return $result;
};
function invalidPassword($user_pwd,$pwd_repeat){
    $result;
    if ($user_pwd!==$pwd_repeat) {
        $result=true;   
    }
    else {
        $result=false;
    }
    return $result;
};
function existingUser($conn,$uname){
    $sql="SELECT * FROM users WHERE usersName = ?;";
    $statement= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header ("location:/Login_chat/signup_page.php?error=existingUser");
        exit();
    }
    mysqli_stmt_bind_param($statement,"s",$uname);
    mysqli_stmt_execute($statement);
    $resultData= mysqli_stmt_get_result($statement);
    if ($row=mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result=false;
        return $result;
    }
    mysqli_stmt_close($statement);
}
function createUser($conn,$uname,$user_pwd){
    $sql="INSERT INTO users(usersName,usersPwd) VALUES (?,?)";
    $statement= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header ("location:/Login_chat/signup_page.php?error=statementfailed");
        exit();
    }
    $hashedPwd= password_hash($user_pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($statement,"ss",$uname,$hashedPwd);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header ("location:/Login_chat/index.php?error=none");
    exit();
};


function emptyInputlogin($uname,$user_pwd){
    $result;
    if (empty($uname)||empty($user_pwd)) {
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
 
};
function invalidLoginName($conn,$uname){
    $sql="SELECT * FROM users WHERE usersName = ?;";
    $statement= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        invalidLoginPWD($conn,$user_pwd);
    };
};
function invalidLoginPWD($conn,$user_pwd){
    $sql="SELECT * FROM users WHERE usersPwd = ?;";
    $statement= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header ("location:/Login_chat/chatPage.php?");
        exit();
    };
};




?>