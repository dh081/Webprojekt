<?php
/**
 * Created by PhpStorm.
 * User: maltebitzenhofer
 * Date: 21.01.18
 * Time: 13:55
 */
include ("datenbank.php");

$produktid = $_POST ["id"];
$produktname = $_POST ["produktname"];
$produktbeschreibung = $_POST ["produktbeschreibung"];
$produktean = $_POST ["produktean"];
$produktpreis = $_POST ["produktpreis"];

if (!empty($produktname) && !empty($produktbeschreibung) && !empty($produktean) && !empty($produktpreis)) {
    $statement = $db->query("UPDATE produkte SET produktname= :produktname, :produktbeschreibung, :produktean, :produktpreis WHERE id =:id");
    $statement->execute();
    header("Location: produktadmin.php");
}
else {
    echo "Bitte jedes Feld ausfüllen.";
}