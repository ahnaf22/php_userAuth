<?php 
session_start();


if(!empty($_SESSION['loginuserinfo']))
{
	session_unset();
    $_SESSION['Msglogin']="Logged out" ;
    
    header("location:login.php");
}






 ?>