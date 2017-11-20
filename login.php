<?php
/**Created by PhpStorm ... */
echo '
<html lang="en">
<head>
  <title>Login</title> 
</head> 
<body>


<div class= "login">
<h2>Login</h2>
<form action= "index.php?login=1" method="post">
    <input type= "text" name="adminname" placeholder="Username">
    <br>
    <input type="password"  name="passwort" placeholder="Passwort">
    <br>
    <input type="submit" value="Login">
</form></div>
';

