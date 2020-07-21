<html>
<head>
</head>
<style>
body {
  background:url('picture1.jpg');
  background-repeat:no-repeat;
  background-size:cover;
}
.class1{
width:320px;
height:390px;
left:60%;
top:10%;
position:absolute;
background:rgba(0,0,0,0.7);
box-sizing:border-box;
font-size:20px;
translate:transform(-50%,-50%);
color:#fff;
padding:30px 10px;
}
#hello
{
text-align:center;
}
</style>
<body>
<div class="class1">
<form action="dbprofile.php" method="post">
<b>

<p>userid :</p>
<?php session_start();
//echo $_SESSION["userid"];?>
<!-- input type="text" name="userid" value="<?php// $_SESSION["userid"]?>" default--> 
<p>Name  :</p>
<input type="text" name="name" placeholder="Enter name" required>
<p>E-Mail  :</p>
<input type="email" name="email" placeholder="Enter email" required>
<p>Experience  :</p>
<input type="number" name="exp" placeholder="Enter experience" required>
<p>City :</p>
<input type="text" name="city" placeholder="Enter city" required>
<br>
<input type="submit" value="submit" >
</b>
</form>
</div>
</body>
</html>
