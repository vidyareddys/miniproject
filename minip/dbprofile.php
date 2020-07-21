<?php 
session_start();
$userid=$_SESSION["userid"];
$name=$_POST["name"];
$email=$_POST["email"];
$exp=$_POST["exp"];
$city=$_POST["city"];
$db=mysqli_connect("localhost","root","","test");
if($db)
{
   $q=mysqli_query($db,"insert into profile values('$userid','$name','$email','$exp','$city')");
   if($q)
   {
       header('Location:attlogin.php');
       
   }
   else 
   {
       echo "query";
   }
}
else 
    echo "db";
?>