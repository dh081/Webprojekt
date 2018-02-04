<?php
$empfaenger ="mb280@hdm-stuttgart.de"; /*hier wird die Anfrage hingeschickt*/
$absender = $_POST['Email'];    /*Absender Adresse aus Formular*/
$datum = date("d-m-Y H:i:s");   /*Zeit und Datum angabe*/
$betreffzeile= "Kontaktanfrage"; /*Betreffzeile*/

/*if Abfrage ob Formular ausgefüllt wurde*/
if (($_POST['Name'] != '') &&
    ($_POST['Email'] != '') &&
    ($_POST['Betreff'] != '') &&
    ($_POST['Nachricht'] != ''))

{ /*Zuweisung der Formwerte zu einer Variablen*/
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $betreff=$_POST['Betreff'];
    $nachricht=$_POST['Nachricht'];
    }
    /*Inhalt der Mail bzw. des Formulars*/
$inhalt ="Gesendet am $datum\n
          Name: $name\n
          Email: $email\n
          Betreff: $betreff\n
          Nachricht: $nachricht";



$mailversand = "https://mars.iuk.hdm-stuttgart.de/~mb280/ok.php"; //Bei Mailversand -> Zielseite
$mailfehler = "https://mars.iuk.hdm-stuttgart.de/~mb280/fehler.php"; //Mail nicht versendet->Zielseite

if (filter_var($absender, FILTER_VALIDATE_EMAIL) !== false) {/*Wenn in Mail Feld keine richtige Mailadresse steht
                                                               dann Weiterleitung zu fehler.php*/

    /*Mailversand*/
    if( mail($empfaenger,$betreff,$inhalt,$absender)){
        header("Location: ".$mailversand); //Versendet-> Weiterleitung
    exit();
    } else{
        header("Location: ".$mailfehler); //Nicht versendet->Weiterleitung
    exit();}}

else{
        header("Location: ".$mailfehler); //Nicht versendet->Weiterleitung
        exit();}