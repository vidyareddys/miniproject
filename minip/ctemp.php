<style> 
body{
margin:0;
}
ul{
list-style-type:none;
margin:0;
padding:0;
width:25%;
background-color:#f1f1f1;
position:fixed;
height:100%;
overflow:auto;
}
li a{
diaplay:block;
color:#000;
padding:8px 8px;
text-decoration:none;
}
li a.active{
background-color:#4caf50;
color:white;
}
li a:hover:not(.active){
background-color:#555;
color:white;
}
</style>
<body>
<ul> 
<li><a class="active" href="clientreq.php">Home</a></li>
<li><a class="active" href="ctemp.php">confirmed appointments</a></li>
<li><a class="active" href="rtemp.php">requested appointments</a></li>
</ul>
<div style ="margin-left:25%;padding:1px 16px;height:1000px;">