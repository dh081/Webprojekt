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
echo '<div class="shopvorgeschlageneprodukte">';
$sql = "SELECT * FROM produkte";
foreach ($db->query($sql) as $row){
    $row["id"];
    $id = $row["id"];
    echo "<div class=\"kategorie\">" . $row["produktname"] . "<br>" . "<br>" . "<a href=\"https://mars.iuk.hdm-stuttgart.de/~dh081/produktansicht.php?id=$id\"> Details </a>" . "</div>";
    //echo "Preis: " . $row["produktpreis"]. "€" . "<br>";
    //echo "EAN: " . $row["produktean"] . "<br>";
    //echo "Eigenschaften: " . $row["produktbeschreibung"] . "<br>" . "<a href=\"collection.php&id=1\"> Details </a>". "</div>". "<br>" . "<br>";
}

echo'</div>';


/*
echo '
<div>
    <div class="bannershop">
<div class="zumshop">
Die besten Steine für Klein und Groß!
</div>
</div>
<br>
<h2 style="text-align: center;">Unser Sortiment an handverlesenen Qualitätssteinen</h2>
<br>
<div class="shopvorgeschlageneprodukte">
   <div class="kategorie"><a href="hinkelstein.php">Hinkelstein<a/></div>
   <div class="kategorie"><a href="spitzerstein.php">Spitzer Stein</a></div>
   <div class="kategorie"><a href="flacherstein.php">Flacher Stein</a></div>
   <div class="kategorie"><a href="backstein.php">Backstein</a></div>
</div>
<br>
<div class="shopvorgeschlageneprodukte">
    <div class="produkteshop">
    Bild
    <p>Hinkelstein</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Spitzer Stein</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Flacher Stein</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Backstein</p>
    </div>
</div>
<br>
<br>
<div class="shopvorgeschlageneprodukte">
    <div class="produkteshop">
    Bild
    <p>Hinkelsteine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Spitze Steine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Flache Steine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Backsteine</p>
    </div>
</div>
<br>
<br>
<div class="shopvorgeschlageneprodukte">
    <div class="produkteshop">
    Bild
    <p>Hinkelsteine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Spitze Steine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Flache Steine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Backsteine</p>
    </div>
</div>
<br>
<br>
<div class="shopvorgeschlageneprodukte">
    <div class="produkteshop">
    Bild
    <p>Hinkelsteine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Spitze Steine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Flache Steine</p>
    </div>
    <div class="produkteshop">
    Bild
    <p>Backsteine</p>
    </div>
</div>
<br>
</div>';
*/
include ("system/widgets/footer.php");