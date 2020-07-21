<?php 
$user=$_POST["userid"];
$pass=$_POST["pwd"];
setcookie("cuserid","$user");
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $res=mysqli_query($db,"select * from client where userid='$user' and password='$pass'");
    if($res)
    {
        header('location:clientreq.php');
    }
    else 
    {
        echo "wrong details";
    }
}
?>