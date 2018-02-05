<?php
session_start();
include_once("datenbankverbindung.php");
    $error = false;
    $lname = htmlspecialchars($_POST['lname']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
    $anschrift = htmlspecialchars($_POST['anschrift']);
    $plz = htmlspecialchars($_POST['plz']);
    $ort = htmlspecialchars($_POST['ort']);
    //Überprüft ob beide eingebenen Passwörter übereinstimmen
    if(strlen($password) == 0) {
        echo 'Passwort eingeben<br>';
        $error = true;
    }
    if($password != $password2) {
        echo 'Die Passwörter stimmen nicht überein!<br>';
        $error = true;
    }
    //Überprüft ob Username schon vergeben ist
    if(!$error) {
        $statement = $db->prepare("SELECT * FROM kunden WHERE username = :username");
        $statement->bindParam(":username", $username, PDO::PARAM_STR);
        $statement->execute();
        $user = $statement->fetch();
        if($user !== false) {
            echo 'Dieser Login ist schon vergeben<br>';
            $error = true;
        }
    }
    //neuer Nutzer wird in Datenbank gespeichert
    if(!$error) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT); //passwort wird verschlüsselt
        $statement = $db->prepare("INSERT INTO kunden (kundennummer, lname, username, anschrift, plz, ort, email, password) VALUES (:kundennummer, :username, :lname, :anschrift, :plz, :ort, :email, :password)");
        $varNull = null;
        $statement->bindParam(":kundennummer", $varNull, PDO::PARAM_NULL);
        $statement->bindParam(":lname", $lname, PDO::PARAM_STR);
        $statement->bindParam(":username", $username, PDO::PARAM_STR);
        $statement->bindParam(":anschrift", $anschrift, PDO::PARAM_STR);
        $statement->bindParam(":plz", $plz, PDO::PARAM_INT);
        $statement->bindParam(":ort", $ort, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":password", $password_hash, PDO::PARAM_STR);
        $statement->execute();
        /*$result = $statement->execute(array(':username' => $username, ':password' => $password_hash, ':email' => $email, ':lname' => $lname, ':ort' => $ort, ':plz' => $plz, ':anschrift' => $anschrift));*/
        $db = null;
        if($statement) {
            echo 'Registrierung erfolgreich! <a href="../../index.php">zurück</a>';
            /*$sqlabfrage = "SELECT kundennummer FROM kunden ORDER BY kundennummer DESC LIMIT 1";
            foreach ($db->query($sqlabfrage) as $row) {
                $kundennummer = $row["kundennummer"];
            }
            echo '<a href="../../email.php?kundennummer=$kundennummer">zurück</a>';*/

        } else {
            echo 'Beim Abspeichern ist ein Fehler aufgetreten<br>';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrierung</title>
</head>
<body>
</body>
</html>