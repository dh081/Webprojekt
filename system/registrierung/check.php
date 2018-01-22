
<?php
//Überprüft ob User eingeloggt ist
if(!isset($_SESSION['kundennummer'])) {
    echo "<span class='#'>";
    die('Bitte zuerst anmelden');
    echo "</span>";
}
?>