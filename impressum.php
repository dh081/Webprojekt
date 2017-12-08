<?php
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
<div class="rechtliches">
<div class="rechtliches-text">

<h2 style="border-bottom: 1px solid #EEEEEE;">Impressum</h2>
<br>
<span>Angaben gem&auml;&szlig; &sect; 5 TMG:</span>
 <p>Obelix GmbH &amp; CO. KG        <br/>
    Steinstra&szlig;e 1             <br/> 
    12345 Steinhausen               <br/>
    Gallien
 </p>
 <br>
<span> Vertreten durch:</span>
 <p>Herr Obelix von Gallien         <br/> 
    Herr Asterix zu Gallien
 </p> 
 <br>
<span>Kontakt:</span>
 <p>Telefon: +0 1234 56789           <br/> 
    Telefax: +0 1234 56788           <br/> 
    E-Mail: support@stoneshop.com
 </p>
 <br>
<span>Registereintrag:</span>
 <p>Eintragung im Handelsregister.    <br/> 
    Registergericht:Amtsgericht Rom   <br/> 
    Registernummer: HRB 999999
 </p> 
 <br>
<span> Umsatzsteuer:</span> 
 <p>Umsatzsteuer-Identifikationsnummer gem&auml;&szlig; &sect;27 a Umsatzsteuergesetz: <br/>
    DE 999 999 999
 </p>
 <p> Quelle: <a href="https://www.e-recht24.de">eRecht24</a></p>
</div>
</div>
';
include ("system/widgets/footer.php");
echo "</body>";