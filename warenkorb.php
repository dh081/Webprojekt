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
include ("datenbank.php");

session_start();

$produkt = $_GET['id'];
echo"<div class='warenkorb'>";
if(isset($produkt)) {
    /*
    Neuen Artikel in den
    Warenkorb hinzufügen
    */
    $count = count($_SESSION['warenkorb']);
    $id = $count + 1;
    $_SESSION['warenkorb'][$id] = $produkt;

}

else {
    echo 'Ihr Warenkorb ist leer';
    $produkt = 100;
}
echo '<h1> Ihr Warenkorb </h1>';
echo '<br>';
echo '<b> Im Warenkorb befinden sich folgende Produkte:</b>';
echo '<br><br>';
echo'<p><u>Aktuelles Produkt</u></p>';
echo '<br>';
$sqlabfrage= "SELECT produktname FROM produkte WHERE id=$produkt";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktname'];
}
echo '<br>';
$sqlabfrage= "SELECT produktpreis FROM produkte WHERE id=$produkt";
foreach ($db->query($sqlabfrage) as $row) {
    echo $row['produktpreis'];
}
echo' €';
echo '<br><br>';
echo'<p>Gespeicherte Produkte</p>';
echo '<br>';
//print_r($_SESSION['warenkorb']);
if (isset($_SESSION['warenkorb'])) {
    $warenkorb = $_SESSION['warenkorb'];

    foreach ($warenkorb as &$value) {
       echo "$value ";
       $sqlabfrage= "SELECT produktname FROM produkte WHERE id=$value";
            foreach ($db->query($sqlabfrage) as $row) {
                  echo $row['produktname'] . '<br>' ;
    } ;
}}
    else {
        echo 'Keine Produkte ausgewählt';
}

echo "</div>";
include ("system/widgets/footer.php");
echo "</body></html>";
?>