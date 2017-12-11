<?php
session_start();
$prevprev_url  = $_SESSION["prevprevurl"];
include_once("datenbankverbindung.php");
$db = new PDO($dsn, $dbuser, $dbpass);
if(isset($_GET['login'])) {
    $username = $_POST['user'];
    $password = $_POST['passwort'];
    //Den Usernamen in der Datenbank Suchen
    $statement = $db->prepare("SELECT * FROM kunden WHERE user = :user");
    $result = $statement->execute(array('user' => $username));
    $user = $statement->fetch();
    //Passwort prüfen
    if ($user !== false && password_verify($password, $user['passwort'])) {
        $_SESSION['kundennummer'] = $user['user']; //Setzt die userid = username (Datenbank: User)
        header("Location: $prevprev_url");
    } else {
        $errorMessage = "Login oder Passwort war ungültig<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

</body>
</html>
