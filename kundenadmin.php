<?php
include "datenbank.php";
echo'<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Produkte</title>
  </head>
  <body>
  <div class="kopfleisteadmin">
    <a href="index.php" target="_blank">Zum Shop</a>
    <a href="#" target="_blank" style="vertical-align: top; margin-left: 89%">Logout</a>
  </div>
  <div class="menuadminaußen">
    <div class="menuadmin">
        <ul>
            <li> <a href="admin.php">Dashboard</a><li>
            <li> <a href="produktadmin.php">Produkte</a></li>
            <li> <a href="bestellungenadmin.php">Bestellungen</a></li>
            <li> <a href="kundenadmin.php">Kunden</a></li>
            <li><a href="system/registrierung/adminlogout.php">Logout</a></li>
        </ul>
    </div>
    
<div class="bodyadmin">
Kunden
<br>



<table class="produktlist">
<tr>
<th>Kundennummer</th>
<th>Username</th>
<th>Name</th>
<th>Anschrift</th>
<th>PLZ</th>
<th>Ort</th>
<th>Email</th>
</tr>';
$select = $db->query("SELECT `kundennummer`, `username`, `name`, `anschrift`, `plz`,`ort`,`email` 
                      FROM `kunden`");
$kunden = $select->fetchAll(PDO::FETCH_OBJ);



foreach ($kunden as $kunde) {
    echo

        '<tr>' .
        '<td>' . $kunde->kundennummer  .'</td>' .
        '<td>' . $kunde->username  .'</td>' .
        '<td>' . $kunde->name . '</td>' .
        '<td>' . $kunde->anschrift . '</td>' .
        '<td>' . $kunde->plz . '</td>'.
        '<td>' . $kunde->ort . '</td>'.
        '<td>' . $kunde->email . '</td>';
}
echo'
</table>
</div>
</div>
</body>';?>