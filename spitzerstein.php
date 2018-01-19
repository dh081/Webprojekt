<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 12.11.2017
 * Time: 15:53
 */
echo ' <!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Stone Shop</title>
  </head>';
include ("system/widgets/header.php");
echo '

<div>
<div class="produktseitebild"></div>
<div class="produktseitetext">
<div style="border-bottom: 1px solid #EEEEEE;">
<h1>Spitzer Stein</h1>
<br>
</div>
<h2>50 €</h2>
<button>Jetzt kaufen</button>
<p>Unsere Spitzen Steine stammen aus dem familieneigenen Steinbruch. Sie sind steinhart und werden schnell geliefert!<br>
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
';
?>
<?php
include "datenbank.php";
echo '
<div class="produktseitebeschreibung">
<b>EAN-Code:        </b>';
$sqlabfrage= "SELECT produktean FROM produkte WHERE id=2";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktean'];
}
echo '<br>
<b>Preis in Euro:         </b>';
$sqlabfrage= "SELECT produktpreis FROM produkte WHERE id=2";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktpreis'];
}
echo '<br>
<b>Eigenschaften:         </b>';
$sqlabfrage= "SELECT produktbeschreibung FROM produkte WHERE id=2";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktbeschreibung'];
}
echo '<br>
<b>Lieferung:       </b>Gratis Premium Versand<br>
</div>
';