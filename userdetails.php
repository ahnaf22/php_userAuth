<?php 
session_start();

if(empty($_SESSION['loginuserinfo']))
{
    $_SESSION['Msglogin']="Please login first!";
    header("location:login.php");
}



echo "The user id is: ".$_GET["shontu"];


 ?>