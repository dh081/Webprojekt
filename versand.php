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
    <li>
    <p><span>Standardversand (3-5 Werktage)</span></p></li>
</ul>
</div>
<div class="Zahlung">
Unsere Zahlungsmöglichkeiten:
<ul>
    <li>
    <p> <span>Auf Rechnung</span></p></li>
   <br>
</ul>

</div>
</div>';
include ("system/widgets/footer.php");
echo "</body>";