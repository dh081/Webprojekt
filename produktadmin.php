<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 14.11.2017
 * Time: 10:56
 */
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
Produkte
<br>
<div class="produktoption">
<a href="produktneu.php">Neues Produkt anlegen</a>

</div>
<br>

Gesamtprodukte
<table class="produktlist">
<tr>
<th>ID</th>
<th>Name</th>
<th>Beschreibung</th>
<th>EAN</th>
<th>Preis</th>
<th>Bearbeiten</th>
</tr>';
$id=$_GET['id'];
$select = $db->query("SELECT `id`, `produktname`, `produktbeschreibung`, `produktean`, `produktpreis` 
                      FROM `produkte` ORDER BY `id` ASC");
$produkte = $select->fetchAll(PDO::FETCH_OBJ);



foreach ($produkte as $produkt) {
    echo

        '<tr>' .
        '<td>' . $produkt->id  .'</td>' .
        '<td>' . $produkt->produktname  .'</td>' .
        '<td>' . $produkt->produktbeschreibung . '</td>' .
        '<td>' . $produkt->produktean . '</td>' .
        '<td>' . $produkt->produktpreis . '</td>'.
        '<td><a href="produktbearbeiten.php?id='.$produkte['id'].' ">bearbeiten</a></td></tr>';
}
echo'
</table>
</div>
</div>
</body>';