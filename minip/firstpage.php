<html>
<script>
function clientlogin()
{
	window.location('clientlogin.php');
}
function attlogin()
{
	window.location('attlogin.php');
}

</script>
<style>
body{
background:url('picture1.jpg');
  background-repeat:no-repeat;
  background-size:cover;
}
.div1
{
padding:30px 100px;
}
.button
{
border:none;
outline:none;
height:34px;
color:#fff;
font-size:18px;
background:#a0522d;
cursor:pointer;
border-radius:20px;
width:20%;
}
</style>
<body>
<div class="div1">
<button class="button" onclick="clientlogin()">Client</button><br>
<br>
<button class="button" onclick="attlogin()">Attorney</button>
</div>
</body>

</html>