<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 30.10.2017
 * Time: 11:55
 */
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

echo '

<div class="banner">
<div class="zumshop">
Zum Shop
</div>
</div>
<br>
<div class="kategorieauswahl">
   <div class="kategorie"><a href="hinkelstein.php"><p>Hinkelstein</p><img src="https://mars.iuk.hdm-stuttgart.de/~dh081/bilder/hinkelstein.jpg"></a> </div>
   <div class="kategorie"><a href="spitzerstein.php"><p>Spitzer Stein</p><img src="https://mars.iuk.hdm-stuttgart.de/~mb280/bilder/spitzerstein.jpg"></a></div>
   <div class="kategorie"><a href="flacherstein.php"><p>Flacher Stein</p><img src="https://mars.iuk.hdm-stuttgart.de/~dh081/bilder/flacherstein.jpg"></a></div>
   <div class="kategorie"><a href="backstein.php"><p>Backstein</p><img src="https://mars.iuk.hdm-stuttgart.de/~dh081/bilder/backstein.jpg"></a></div>
</div>
<br>
<div class="textboxgrau">
<div class="zitat">Auch aus Steinen, die einem in den Weg<br>gelegt werden,kann man Schönes bauen.<br><b>Johann Wolfgang von Goethe</b></div>
</div>
<div class="banner2">
</div>
<div style="padding: 3%; height: 400px;">
<div class="maincontent">
<br>
Herzlich Willkommen im Stone Shop!<br>
Wir bieten Ihnen hier die Möglichkeit aus einer Vielzahl von Steinen aus der ganzen Welt zu wählen.<br>
In unserer Collection haben Sie die Möglichkeit jeden Stein zu betrachten und sich darüber zu Informieren.<br>
Stone Shop bietet Ihnen neben der großen Auswahl und kompetenter Beratung alle Produkte und Dienstleistungen trotz höchster Qualität stets preiswert an.
Alle unsere Steine sind Naturbelassen und können sowohl im Innen- als auch im Außenbereich eingesetzt werden. In unserem Lager in Gallien sind dauerhaft eine große Zahl an Steinen vorrätig und sofort lieferbar.
Wir freuen uns auf Ihre Anfrage. <br>
- In Stone we trust.
</div>


<div class="sidebar">
<a href="hinkelstein.php"><p>Unser Bestseller</p>
<img src="https://mars.iuk.hdm-stuttgart.de/~dh081/bilder/hinkelstein.jpg"> </a>

</div>
</div>
';
include ("system/widgets/footer.php");
echo "</body></html>";
