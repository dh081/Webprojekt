<?php
$_SESSION['prevprevurl'] =  $_SERVER['HTTP_REFERER'];
?>

<div class="#">
    <h1>Als Admin anmelden</h1>
    <form action="adminlogin.php" method="post">
        <input type="text" size="40" maxlength="250" name="username" placeholder="Login"><br>

        <input type="password" size="40"  maxlength="250" name="password" placeholder="Dein Passwort"><br>

        <input type="submit" value="Abschicken">
    </form>
</div>



<!--
 <?php
/*include_once ("./functions/users/admincheck.php") //Da nur Admins neue Admins hinzufügen dürfen*/
?>

<form action="./functions/users/admincreate_do.php" method="post">

    <input type="text" name="name" placeholder="Username" /><br>

    <input type="submit" value="Submit"/>

</form>-->