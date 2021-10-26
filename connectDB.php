<?php
$server="localhost";
$DBuser="root";
$DBpass="";
$DBname="Signup_system";
$conn = mysqli_connect($server,$DBuser,$DBpass,$DBname);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
