<?php
echo ' <!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Stone Shop</title>
  </head>';
include ("system/widgets/header.php");
include "datenbank.php";
$produkt = $_GET['id'];

echo '
<div>
<div class="produktseitebilddd"></div>
<div class="produktseitetext">
<div style="border-bottom: 1px solid #EEEEEE;">
<h1>';
$sqlabfrage= "SELECT produktname FROM produkte WHERE id=$produkt";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktname'];
}
echo '</h1>
<br>
</div>
<h2>';
$sqlabfrage= "SELECT produktpreis FROM produkte WHERE id=$produkt";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktpreis'];
}
echo '€';
echo '</h2>
<button>Jetzt kaufen</button>
<p>Unsere ';
$sqlabfrage= "SELECT produktname FROM produkte WHERE id=$produkt";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktname'];
}
echo ' stammen aus dem familieneigenen Steinbruch. Sie sind steinhart und werden schnell geliefert!<br>
Gratis Lieferung!
<br>
<br>
<br>
<br>
<br>
</p>
</div>
</div>
<h2 style=" margin-left: 3%; margin-right: 3%;">Produktbeschreibung</h2>

<div class="produktseitebeschreibung">
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 
</div>
<h2 style=" margin-left: 3%; margin-right: 3%;">Technische Daten</h2>
<div class="produktseitebeschreibung">
';


$sqlabfrage= "SELECT * FROM produkte WHERE id=$produkt";
foreach ($db->query($sqlabfrage) as $row) {
    echo "Name: " . $row['produktname'] . "<br>";
    echo "Preis: " . $row["produktpreis"]. "€" . "<br>";
    echo "EAN: " . $row["produktean"] . "<br>";
    echo "Eigenschaften: " . $row["produktbeschreibung"] . "<br>". "<br>";
}

echo '</div>';