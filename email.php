<?php

$kundennummer = $_GET["kundenummer"];

$sqlabfrage = "SELECT email FROM kunden WHERE id=$kundennummer";
foreach ($db->query($sqlabfrage) as $row) {
    $empfaengermail = $row["email"];
}

$betreff = "Deine Registrierung";
$from = "From: Stone Support <support@stoneshop.de>";

$text = "Hier ist deine Kundennummer: . $kundennummer";

mail($empfaengermail, $betreff, $text, $from);
?>