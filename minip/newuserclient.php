<html>
<style>
 body{
  background:url('picture1.jpg');
  background-repeat:no-repeat;
  background-size:cover;
 }
.newclass{
width:320px;
height:200px;
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
</style>

<body>
<div class="newclass">
<form action="newcheckclient.php" method="post" >
Userid          : <input type="text" name="nuserid" placeholder="Enter userid" required><br>
Password        : <input type="password" name="npassword" placeholder="Enter password" required><br>
Confirm-password: <input type="password" name="cpassword" placeholder="Re-enter password" required><br>
<input type="submit" value="submit">
</form>
</div>
</body>
</html>