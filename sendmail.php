<?php
$email_von = "mb280@hdm-stuttgart.de"; //Falls kein Absender eingetragen wurde
$sendermail_antwort = true; //true-> Mail Adresse aus Formular wird verwendet
$name_von_emailfeld = "Email"; //Name des Feldes im Formular

$empfaenger = "mb280@hdm-stuttgart.de"; //Ziel Adresse des Formulars
$betreff = "Neue Kontaktanfrage";

$url_ok = "https://mars.iuk.hdm-stuttgart.de/~mb280/ok.php"; //Bei Mailversand -> Zielseite
$url_fehler = "https://mars.iuk.hdm-stuttgart.de/~mb280/fehler.php"; //Mail nicht versendet->Zielseite

$nicht_ausgeben = array('submit');//Submit soll nicht in der Mail stehen

//Kontaktanfrage Datum
$name_tag = array();
$name_tag[0] = "Sonntag";
$name_tag[1] = "Montag";
$name_tag[2] = "Dienstag";
$name_tag[3] = "Mittwoch";
$name_tag[4] = "Donnerstag";
$name_tag[5] = "Freitag";
$name_tag[6] = "Samstag";
$num_tag = date("w");
$tag = $name_tag[$num_tag];
$jahr = date("Y");
$n = date("d");
$monat = date("m");
$time = date("H:i");

//Beginn der Mail
$msg = "Gesendet am $tag, den $n.$monat.$jahr - $time Uhr \n\n";

//Eingabefelder abfragen
while (list($name,$value) = each($_POST)) {
    if (in_array($name, $nicht_ausgeben)) {
        continue;
    }
    $msg .= "$name:\n$value\n\n";
}

//Mail Adresse des Anfragers als Absender (Prüfen ob Variable existiert und eine valide Adresse ist)
if ($sendermail_antwort and isset($_POST[$name_von_emailfeld]) and filter_var($_POST[$name_von_emailfeld], FILTER_VALIDATE_EMAIL)) {
    $email_from = $_POST[$name_von_emailfeld];
}

$header="From: $email_von";



$mail_senden = mail($empfaenger,$betreff,$msg,$header);


//Weiterleitung nach absenden der Nachricht
if($mail_senden){
    header("Location: ".$url_ok); //Versendet
    exit();
} else{
    header("Location: ".$url_fehler); //Nicht versendet
    exit();}