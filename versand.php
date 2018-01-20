<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 30.10.2017
 * Time: 13:02
 */
echo ' 

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Stone Shop</title>
  </head>
  <body>';
include ("system/widgets/header.php");
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
include ("system/widgets/footer.php");
echo "</body>";