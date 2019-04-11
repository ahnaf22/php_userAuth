<?php 

session_start();
include("auth.php");
if(empty($_SESSION['loginuserinfo']))
{
    $_SESSION['Msglogin']="Please login first!";
    header("location:login.php");
}

/*
print_r($_POST);
echo "<br/>";
echo $_POST["name"];
*/


$object = new auth();
$object->setdata($_POST)->store();











 ?>