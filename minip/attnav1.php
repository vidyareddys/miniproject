<html>
<style> 
body{
background:url('judge.jpg');
background-size:100% 100%;
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
p
{
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
p
{
font-weight:bold;
font-size:22px;
padding:20px;
margin-bottom:10px;
color:black;
}
</style>
<?php
$attorid=$_COOKIE["attorid"];
echo $attorid;
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $q1=mysqli_query($db,"select * from appointments where attorid='$attorid' and status='1'");
    if($q1){
        $count=mysqli_num_rows($q1);
            if($count>=1){
        while( $q=mysqli_fetch_assoc($q1))
        {
            $clientid=$q['clientid'];
            $des=$q['description'];
            display($clientid,$des);
        }
    }
    else {
        echo "<p>no appointments confirmed</p>";
    }
    }
    else {
        echo "query prob";
    }
}
else {
   echo "db probb";
}
function display($clientid,$des){
    echo "<br><br><br><br><br><br><b><div class='class1'>ClientId:</b>".$clientid;
    echo  "<br><b>Description:<b>".$des;
    ?>
           </div>
           <?php 
}?>

?>
</div>
           <center><input type="button" value="HOME" onclick="window.location('attfinalpage.php')"></center>

</html>