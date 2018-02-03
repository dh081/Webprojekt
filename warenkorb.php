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
if (isset ($_SESSION['kundennummer'])) {
    $produkt = $_GET['id'];
    echo "<div class='warenkorb'>";
    if (isset($produkt)) {
        /*
        Neuen Artikel in den
        Warenkorb hinzufügen
        */
        $count = count($_SESSION['warenkorb']);
        $id = $count + 1;
        $_SESSION['warenkorb'][$id] = $produkt;

    } else {
        echo "*Sie haben aktuell kein Produkt ausgewählt ";
        echo "<br><br>";
        $produkt = 100;
    }
    echo '<h1> Ihr Warenkorb </h1>';
    echo '<br>';
    echo '<b> Im Warenkorb befinden sich folgende Produkte:</b>';
    echo '<br><br>';
    echo '<p><u>Aktuelles Produkt</u></p>';
    echo '<br>';
    $sqlabfrage = "SELECT produktname FROM produkte WHERE id=$produkt";
    foreach ($db->query($sqlabfrage) as $row) {
        echo $row['produktname'];
    }
    echo '<br>';
    $sqlabfrage = "SELECT produktpreis FROM produkte WHERE id=$produkt";
    foreach ($db->query($sqlabfrage) as $row) {
        echo $row['produktpreis'];
    }
    echo ' €';
    echo '<br><br>';
    echo '<p><u>Gespeicherte Produkte</u></p>';
    echo '<br>';
//print_r($_SESSION['warenkorb']);
    if (isset($_SESSION['warenkorb'])) {
        $warenkorb = $_SESSION['warenkorb'];

        foreach ($warenkorb as $value) {
            echo "Produkt ID: " . "$value " . "<br>";
            $sqlabfrage = "SELECT produktname, produktpreis FROM produkte WHERE id=$value";
            foreach ($db->query($sqlabfrage) as $row) {
                echo $row['produktname'] . '<br>';
                echo "Preis: " . $row["produktpreis"] . "€" . "<br> <br>";

            };
        }
    } else {
        echo 'Keine Produkte ausgewählt';
    }

    echo '
<br>
<br>
<div class="produktupload">
    <h3>Jetzt bestellen</h3>
    <br>
   <form method="post" action="bestellung.php">
    <input type="text"  name="kundennummer" placeholder="Kundennummer einfügen"><br><br>
    <input type="text"  name="produktids" placeholder="Produkt IDs einfügen"><br><br>
    <input type="submit" value="Bestellen">
   </form>
</div>
<br><br><br><br>
';
    echo '*Prdoukt IDs bitte durch EIN LEERZEICHEN trennen.<br>Ihre Kundennummer finden Sie in Ihrer Registrierungsbestätigung. <br><br>';
    echo "<b><a href='collection.php'>Weiter Shoppen!</a></b><br>";
    echo "<b><a href='system/registrierung/logout.php'>Warenkorb löschen</a></b>";
    echo "</div>";
}
else {
    echo "Bitte zuerst anmelden";
    echo"<br>";
    echo"<br>";
    echo"<ahref='system/registrierung/loginformular.php'>Login</a>";
}
include ("system/widgets/footer.php");
echo "</body></html>";
?>