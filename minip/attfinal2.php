
<html>
<style> 
body
{
background:url('judge.jpg');
background-size:100% 100%;
}
p{
font-weight:bold;
font-size:22px;
padding:20px;
margin-bottom:10px;
color:black;
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
</style>
<script> 
function fn()
{
	window.location('attfinalpage.php');
}
</script>
<body>
<?php 
$clientid=$_POST['clientid'];
$attorid=$_POST['attorid'];
$db=mysqli_connect("localhost","root","","test");
if($db)
{
$q1=mysqli_query($db,"update appointments set status='1' where clientid='$clientid' and attorid='$attorid'" );
if($q1)
{
    echo "<p>appointment confirmed</p>";
}
}?>
<input type="button" value="Home" onclick="fn()">
</body>
</html>