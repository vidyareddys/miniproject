
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
height:350px;
left:60%;
top:30%;
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
<form action="check.php" method="post">
<b>
<!-- -->
<br>
<p>UserId  :</p>
<input type="text" name="userid" placeholder="userid" required>
<br>
<p>Password:</p>
<input type="password" name="pwd" placeholder="password" required>
<br>
<input type="submit" value="submit" >
</b>
<div class="newuser">
<p id="hello">newuser</p>
<div style="text-align: center">
<a href="newuserclient.php">SIGN UP</a>
</div>
</div>
</form>
</div>
</body>
</html>
