<?php 
session_start();
$user=$_POST["userid"];
$pass=$_POST["pwd"];
$_SESSION["attorneyid"]=$_POST["userid"];
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $res=mysqli_query($db,"select * from attorney where userid='$user' and password='$pass'");
    if($res)
    {
        header('location:attfinalpage.php');
    }
    else 
    {
        echo "wrong details";
    }
}
?>