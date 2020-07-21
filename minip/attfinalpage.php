<html>
<style>
*
{
margin:0;
padding:0;
}
.class1{
width:400px;
height:125px;
position:absolute;
background:rgba(0,0,0,0.6);
box-sizing:border-box;
font-size:20px;
translate:transform(-50%,-50%);
color:yellow;
padding:30px 10px;
}
.class2
{
width:400px;
height:100px;
background:rgb(0,128,0);
box-sizing:border-box;
font-size:22px;
}
}
body
{
background:url("Judge.jpg");
background-size:100% 100%;
}

.form input[type="submit"]
{
width:40%;
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
.form input[type="submit"]:hover
{
background:rgb(0,128,0);
color:white;
}
nav
{
width:100%;
height:60px;
background-color:rgba(0,0,0,0.3);
line-height:60px;
}
nav ul li
{
list-style-type:none;
display:inline-block;
transition:0.5s all;
}
nav ul
{
float:right;
margin-right:30px;
}
nav ul li a
{
text-decoration:none;
padding:30px;
color:#FFF;
}
nav ul li:hover
{
background-color:#FF9900;
}



p
{
font-weight:bold;
font-size:20px;
padding:20px;
margin-bottom:10px;
}
</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href=attfinalpage.php>HOME</a></li>
<li><a href=attnav1.php>Confirmed-Appointments</a></li>
</ul>
</nav>
</div>

<?php 
session_start();
@ $attorid=$_SESSION['attorneyid'];
setcookie("attorid","$attorid");
echo "<center><h2>welcome<h2></center>";
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $q1=mysqli_query($db,"select * from appointments where attorid='$attorid'and status='0'");
    if($q1){
        $count=mysqli_num_rows($q1);
        if($count>=1){
    while($q2=mysqli_fetch_assoc($q1))
    {
        echo "<div class='class1'>Clientid:".$q2['clientid']."<br>Discription:".$q2['description'];
        ?>
        <form action="attfinal2.php" method="post">
        <input type="hidden" name="clientid" value="<?php echo $q2['clientid']?>">
        <input type="hidden" name="attorid" value="<?php echo $attorid?>">
        <input type="submit" value="CONFIRM" >
        </div>
        </form> 
        <?php 
        echo "<br><br><br><br><br><br>";
    }
    }
    else {
        echo "<p>No New Appointments</p>";
    }
    }
    else {
        echo "query prob";
    }
}
else {
    echo "db prob";
}
?>
</body>
</html>