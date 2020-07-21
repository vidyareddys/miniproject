<?php
session_start();
$user=$_POST["nuserid"];
$_SESSION["userid"]=$_POST["nuserid"];
$pass=$_POST["npassword"];
$rpass=$_POST["cpassword"];
if($rpass!=$pass)
{
    echo "passwords not matching";
}
else 
{
    $db=mysqli_connect("localhost","root","","test");
    if($db)
    {
        if(mysqli_query($db,"insert into attorney values('$user','$pass')"))
        {
            header('Location:attprofile.php');
        }
    }
}

?>
