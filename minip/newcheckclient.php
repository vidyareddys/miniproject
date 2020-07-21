<?php 
$user=$_POST["nuserid"];
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
        if(mysqli_query($db,"insert into client values('$user','$pass')"))
        {
            header('location:clientlogin.php');
        }
    }
}

?>