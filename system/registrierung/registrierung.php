<?php
session_start();
include_once("datenbankverbindung.php");
$db = new PDO('mysql:host=localhost;dbname=u-mb280', $dbuser, $dbpass);
?>


<?php
$showFormular = true;
if(isset($_GET['register'])) {
    $error = false;
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
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
        $result = $statement->execute(array('user' => $username));
        $user = $statement->fetch();
        if($user !== false) {
            echo 'Dieser Login ist schon vergeben<br>';
            $error = true;
        }
    }
    //neuer Nutzer wird in Datenbank gespeichert
    if(!$error) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT); //passwort wird verschlüsselt
        $statement = $db->prepare("INSERT INTO kunden (user, passwort, mail,) VALUES (:username, :password, :email, :name)");
        $result = $statement->execute(array('user' => $username, 'passwort' => $password_hash, 'mail' => $email, 'name' => $name));
        $db = null;
        if($result) {
            echo 'Registrierung erfolgreich! <a href="../../index.php">zurück</a>';
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist ein Fehler aufgetreten<br>';
        }
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