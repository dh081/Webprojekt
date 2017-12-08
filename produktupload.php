<?php
/**
 * Created by PhpStorm.
 * User: maltebitzenhofer
 * Date: 06.12.17
 * Time: 15:13
 */
include_once ("datenbank.php");

$produktname = $_POST ["produktname"];
$produktbeschreibung = $_POST ["produktbeschreibung"];
$produktean = $_POST ["produktean"];
$produktpreis = $_POST ["produktpreis"];

try {
    $statement = $db->prepare("INSERT INTO produkte (produktname, produktbeschreibung, produktean, produktpreis)
VALUES (:produktname, :produktbeschreibung, :produktean, :produktpreis)");
    $statement->execute(array('produktname' => $produktname, 'produktbeschreibung' => $produktbeschreibung, 'produktean' => $produktean, 'produktpreis' => $produktpreis));
$db = null;
    }
    catch (PDOException $e) {
        echo "Error!";
        die();
    }
