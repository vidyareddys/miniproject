<html>
<style>
*
{
margin:0;
padding:0;
}
body
{
background:url("Judge.jpg");
background-size:100% 100%;
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
.form
{
margin-top:100px;
margin-left:500px;
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
select {
  width: 40%;
  padding: 16px 20px;
  border: 1px solid black;
  border-radius: 4px;
  cursor:pointer;
  font-size:16px;
}

p
{
font-weight:bold;
font-size:20px;
padding:20px;
margin-bottom:10px;
}
</style>
</body>
<div class="navigation">
<nav>
<ul>
<li><a href=clientreq.php >HOME</a></li>
<li><a href=clientnav1.php>Requested-Appointments</a></li>
<li><a href=clientnav2.php>Confirmed-Appointments</a></li>
</ul>
</nav>
</div>
<div class="form">
<form method="post" action="clientfinalpage.php">
<p>Select city:</p>
<select name="city">
<option value="hyderabad">hyderabad</option>
<option value="karimnagar">karimnagar</option>
<option value="warangal">warangal</option>

</select>
<p>Experience:</p>
<select name="exp">
<option value="1">1&above</option>
<option value="2">2&above</option>
<option value="3">3&above</option>
<option value="4">4&above</option>
</select>
<br>
<input type="submit" value="submit">
</form>
</div>
</body>
</html>