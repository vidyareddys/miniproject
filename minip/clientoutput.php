<html> 
<style>
body{
background:url('judge.jpg');
background-size:100% 100%;
margin-top:15%;
margin-left:50%
}
p{
font-size:22px;
font-weight:bold;
color:yellow;
}
input,textarea{width:250px}
textarea{height:100px}
input[type=submit]{width:250px;
font-size:22px;
color:blue;}
</style>
<body> 
<form action="cstatus.php" method="post">
<p>Appointment Subject</p>
<textarea placeholder="Enter description" name="description" ></textarea>
<?php 
@ $attorid=$_POST["pls"];
 $cuser=$_COOKIE["cuserid"];?>
<input type="hidden" name="attorid" value="<?php echo $attorid;?>">
<input type="hidden" name="clientid" value="<?php echo $cuser;?>">
<br>
<input type="submit" value="submit">

</form>
</body>
</html>