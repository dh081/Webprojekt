<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 14.11.2017
 * Time: 10:56
 */
include "datenbank.php";
echo ' <!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Bestellungen bearbeiten</title>
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
  <h1>Bestellungen</h1>
  <br>';

  $sqlabfrage= "SELECT * FROM bestellung";
foreach ($db->query($sqlabfrage) as $row) {
    echo "Bestellungsnummer: " . $row["id"] . "<br>";
    echo "Kundennummer: " . $row["kundennummer"] . "<br>";
    echo "Produkt IDs: " . $row["produktids"]. "<br>";
    echo "Datum: " . $row["datum"] . "<br><br><br>";
}

echo '
  </div>
</div>
  </body>
  </html>
';