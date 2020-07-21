<html>
<style>
body
{
background:url('judge.jpg');
background-size:100% 100%;
}
input[type="button"]
{
width:25%;
outline:none;
border:none;
background:rgb(50,205,50);
cursor:pointer;
font-size:20px;
padding:10px 20px;
color:white;
border-radius:15px;
margin-top:40px;
}
 input[type="button"]:hover
{
background:rgb(0,128,0);
color:white;
}
p
{
font-weight:bold;
font-size:22px;
padding:20px;
margin-bottom:10px;
color:red;
}
</style>
<body>
<script> 
function fn()
{
	window.location('clientreq.php');
}
</script>
<?php 
$dis=$_POST["description"];
$clientid=$_POST["clientid"];
$attorid=$_POST["attorid"];
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    @ $q1=mysqli_query($db,"insert into appointments values('$clientid','$attorid','$dis',' ')");
    if($q1)
    {
        echo "<center><p><b>Appointment requested!!</b></p></center>";
     }
    else {
        echo "query problem";
    }
}
else {
    echo "db conn problem";
}
?>
           <center><input type="button" value="HOME" onclick="fn()"></center>
           </body>

</html>