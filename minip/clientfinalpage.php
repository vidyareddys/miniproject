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
body
{
background:url('judge.jpg');
background-size:100% 100%;
}
p
{
font-weight:bold;
font-size:20px;
padding:20px;
margin-bottom:10px;
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
select {
  width: 40%;
  padding: 16px 20px;
  border: 1px solid black;
  border-radius: 4px;
  cursor:pointer;
  font-size:16px;
}
</style>
<body>
<?php 
$city=$_POST["city"];
$exp=$_POST["exp"];
$db=mysqli_connect("localhost","root","","test");
echo "<center><h2>Attorney profile list</h2></center>";
if($db)
{
    $q1=mysqli_query($db,"select * from profile where city='$city' and experience >='$exp' ");
    if($q1)
    {
       $count=mysqli_num_rows($q1);
       if($count>=1){
        while( $q2=mysqli_fetch_assoc($q1))
        {
            $userid=$q2['userid'];
            $name=$q2['name'];
            $email=$q2['email'];
            display($userid,$name,$email);
        }}
        else
        {
            echo "<p>no results found<p>";
        }
    }
    else{
        echo "query prob";
    }
    
}
else {
    echo "db prob";
}
function display($userid,$name,$email)
{
   echo "</br><br><br><br><br><br><br><div class='class1'><b>Userid:</b>$userid<br>
         <b>Name:</b>$name<br>
         <b>Email:</b>$email";?>
         <form action="clientoutput.php" method="post"> 
           <input type="hidden" name="pls" value="<?php echo $userid;?>">
           <input type="submit" value="makeappointment">
         </form> 
          </div>      
<?php 
}?>
           <center><input type="button" value="HOME" onclick='clientreq.php'></center>

 </body>
</html>