<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 14.11.2017
 * Time: 10:56
 */
echo ' <!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Produkte bearbeiten</title>
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
            <li> <a href="kategorieadmin.php">Kategorien</a><li>
            <li> <a href="produktadmin.php">Produkte</a></li>
            <li> <a href="bestellungenadmin.php">Bestellungen</a></li>
            
        </ul>
    </div>
  <div class="bodyadmin">Produkte
  <br>
<div class="produktupload">
   <form method="post" action="produktupload.php">
    <input type="text"  name="produktbild" placeholder="Bild einfügen"><br><br>
    <input type="text"  name="produktname" placeholder="Titel"><br><br>
    <textarea  name="produktbeschreibung" placeholder="Beschreibung einfügen"rows="10" cols="50"></textarea><br><br>
    <input type="text"  name="produktean" placeholder="EAN einfügen"><br><br>
    <input type="text"  name="produktpreis" placeholder="Preis einfügen"><br><br>
    <input type="submit" value="Einfügen">
   </form>
</div>
<table class="produktlist">
<tr>
<th>Name</th>
<th>Beschreibung</th>
<th>EAN</th>
<th>Preis</th>
<th>Bearbeiten</th>
</tr>';


include "datenbank.php";
/*
if (isset($_POST[submit_bearbeiten])) {
    $select = $db->prepare("UPDATE produkte SET produktname='$_POST[produktname]',produktbeschreibung='$_POST[produktbeschreibung]',produktpreis='$_POST[produktpreis]'
             WHERE produktean=$_POST[produktean]");
    $select->execute();
echo'<table class="produktlist">
<tr>
<th>Name</th>
<th>Beschreibung</th>
<th>EAN</th>
<th>Preis</th>
<th>Bearbeiten</th>
</tr>';
$select = $db->query("SELECT `produktname`, `produktbeschreibung`, `produktean`, `produktpreis` 
                      FROM `produkte`");
$produkte = $select->fetchAll(PDO::FETCH_OBJ);



foreach ($produkte as $produkt) {
    echo

        '<tr>' .
        '<td>' . $produkt->produktname  .'</td>' .
        '<td>' . $produkt->produktbeschreibung . '</td>' .
        '<td>' . $produkt->produktean . '</td>' .
        '<td>' . $produkt->produktpreis . '</td>' .
        '<td><a href="produktbearbeiten.php">Bearbeiten</td></tr></table>';



}}

else */
$select = $db->query("SELECT `produktname`, `produktbeschreibung`, `produktean`, `produktpreis` 
                      FROM `produkte`");
$produkte = $select->fetchAll(PDO::FETCH_OBJ);



foreach ($produkte as $produkt) {
    echo

'<tr>' .
'<td>' . $produkt->produktname  .'</td>' .
'<td>' . $produkt->produktbeschreibung . '</td>' .
'<td>' . $produkt->produktean . '</td>' .
'<td>' . $produkt->produktpreis . '</td>' .
'<td><a href="produktbearbeiten.php">Bearbeiten</td></tr>';
}
?>
</table>

</div>
</div>

  </body>

';