<?php
include("TeamRegister.php"); 
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<style>
.Register{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
input[type=button]{
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body background="https://wallpapercave.com/wp/ozClj1m.jpg">
<form action="LoginAdmin.php" style="text-align: right;">
<input type="button" onclick="location.href='LoginAdmin.php';" value="Login As Admin" /></form>


<div class="Register">
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Team Name" id="nameteam" name="nameteam"><br/><br/>
<input type="submit" value="Register" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</body>
</html>