<?php
echo ' <!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Stone Shop</title>
  </head>
  <body>';
include ("system/widgets/header.php");
session_start;
include_once ("datenbank.php");

$kundennummer = $_POST ["kundennummer"] ;
$produktids = $_POST ["produktids"];
$datum = date ("Y.m.d");
if (isset ($kundennummer)) {
    $statement = $db->prepare("INSERT INTO bestellung (kundennummer, produktids, datum)
VALUES (:kundennummer, :produktids, :datum)");
    $statement->execute(array('kundennummer' => $kundennummer, 'produktids' => $produktids, 'datum' => $datum));
    echo '
<br>
<div class="Bedingungen">
<h2 style="border-bottom: 1px solid #EEEEEE;">Versand- & Zahlungsbedingungen</h2>
<br>
<div class="Versand">
Unsere Versandoptionen für Sie:
<ul>
    <li><img src="http://aro-smoke.de/mediafiles/Bilder/dhl-logo.gif">
    <p><span>Standardversand</span></p></li>
</ul>
</div>
<div class="Zahlung">
Unsere Zahlungsmöglichkeiten:
<ul>
    <li><img src="https://casinoanbieter.com/wp-content/uploads/2017/08/Lastschrift_Logo.png">
    <p> <span> Per Lastschrift</span></p></li>
   <br>
    <li><img src="http://bastel-loft.de/wp-content/uploads/2017/12/a9ef80d1bcec68e460ac238a893bfd85.png">
    <p> <span>Barzahlung</span></p></li>
    <br>
    <li><img src="http://sparstar.net/wp-content/themes/sparpfote/images/icons/payment/nachnahme.png">
    <p><span>Nachnahme</span></p></li>
</ul>

</div>
</div>';
}
else {
    echo"Keine Bestellung getätigt. <br>";
    echo"<b><a href='collection.php'>Weiter Shoppen!</a></b><br><br><br><br><br><br><br><br>";
}
include ("system/widgets/footer.php");
echo "</body></html>";
?>