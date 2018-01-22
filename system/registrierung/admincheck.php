<?php
session_start();
if(!isset($_SESSION['id'])){
    echo "<span class='#'>";
    echo "Bitte zuerst als Admin anmelden!";
    echo "<br>";
    echo " <a href='system/registrierung/adminformular.php'>Zur Anmeldung</a>";
    echo "</span>";
    exit();
}

