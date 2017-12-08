<?php
$email_from = "mb280@hdm-stuttgart.de";
$sendermail_antwort = true;
$name_von_emailfeld = "Email";

$empfaenger = "mb280@hdm-stuttgart.de";
$betreff = "Neue Kontaktanfrage";

$url_ok = "https://mars.iuk.hdm-stuttgart.de/~mb280/ok.php";
$url_fehler = "https://mars.iuk.hdm-stuttgart.de/~mb280/fehler.php";

$ignore_fields = array('submit');


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


$msg = "Gesendet am $tag, den $n.$monat.$jahr - $time Uhr \n\n";


while (list($name,$value) = each($_POST)) {
    if (in_array($name, $ignore_fields)) {
        continue; //Ignore Felder wird nicht in die Mail eingefügt
    }
    $msg .= "$name:\n$value\n\n";
}




if ($sendermail_antwort and isset($_POST[$name_von_emailfeld]) and filter_var($_POST[$name_von_emailfeld], FILTER_VALIDATE_EMAIL)) {
    $email_from = $_POST[$name_von_emailfeld];
}

$header="From: $email_from";

if (!empty($mail_cc)) {
    $header .= "\n";
    $header .= "Cc: $mail_cc";
}


$mail_senden = mail($empfaenger,$betreff,$msg,$header);



if($mail_senden){
    header("Location: ".$url_ok);
    exit();
} else{
    header("Location: ".$url_fehler);
    exit();}