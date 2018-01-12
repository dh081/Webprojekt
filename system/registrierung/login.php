<?php
session_start();
include_once("datenbankverbindung.php");


    $username = $_POST['username'];
    $password = $_POST['password'];
    //Den Usernamen in der Datenbank Suchen
    $statement = $db->prepare("SELECT * FROM kunden WHERE username = :username");
    $statement->bindParam(":username", $username, PDO::PARAM_STR);
    $statement->execute();
    $result=$statement->fetch(PDO::FETCH_ASSOC);
    //Passwort prüfen
    if ($username !== false && password_verify($password, $result['password'])) {
        $_SESSION['kundennummer'] = $result['username'];
        header("Location: ../../index.php");
        echo "Eingeloggt";

    } else {
        echo "Anmeldung fehlgeschlagen!";
        echo "<br> <a href='../../index.php'>Zurück</a>";

}
?>
