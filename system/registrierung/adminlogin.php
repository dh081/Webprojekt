<?php
session_start();
include_once("../../datenbank.php");
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    //Den Usernamen in der Datenbank Suchen
    $statement = $db->prepare("SELECT * FROM admin WHERE username = :username");
    $statement->bindParam(":username", $username, PDO::PARAM_STR);
    $statement->execute();
    $result=$statement->fetch(PDO::FETCH_ASSOC);
    //Passwort prüfen
    if ($username !== false && password_verify($password, $result['password'])) {
        $_SESSION['id'] = $result['id'];
        header("Location: ../../admin.php");
        echo "Als Admin eingeloggt";


    } else {
        echo "Anmeldung fehlgeschlagen! Du bist nicht als Admin angemeldet!";
        echo "<br> <a href='https://mars.iuk.hdm-stuttgart.de/~dh081/index.php'>Zurück</a>";

    }
?>

<!--
/*
include_once("datenbankverbindung.php");
$db = new PDO($dsn, $dbuser, $dbpass);
$username = $_POST['name'];
//Läd Adminusername in die Datenbank hoch
if (!empty($username)) {
    try {
        $statement = $db->prepare("INSERT INTO admins (username) VALUES (:username)");
        $statement->execute(array('username' => $username));
        $db = null;
        header('Location: ../../index.php');
    } catch (PDOException $e) {
        echo "Error!";
        die();
    }
}
else {
    echo ("Bitte einen Username eintragen");
}
?>