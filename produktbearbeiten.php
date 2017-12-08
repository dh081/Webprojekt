<?php
/**
 * Created by PhpStorm.
 * User: maltebitzenhofer
 * Date: 07.12.17
 * Time: 14:41
 */
/*
include_once ("datenbank.php");

$select =$db->prepare("SELECT * FROM produkte WHERE produktean =$_GET[produktean]");
$produkte = $select->fetchAll(PDOException::FETCH_OBJ);

if ($produkt= $produkte->fetch(PDO::FETCH_NUM)) {

    echo'<div class="produktupload">
   <form method="post" action="produktadmin.php.php">
    <input type="text"  name="produktbild" placeholder="Bild einfügen"><br><br>
    <input type="text"  name="produktname" placeholder="Titel"><br><br>
    <textarea  name="produktbeschreibung" placeholder="Beschreibung einfügen"rows="10" cols="50"></textarea><br><br>
    <input type="text"  name="produktean" placeholder="EAN einfügen"><br><br>
    <input type="text"  name="produktpreis" placeholder="Preis einfügen"><br><br>
    <input type="submit" name="submit_bearbeiten" value="Bearbeiten">
   </form>';
}
else
    echo 'Fehler: EAN $_GET[produktean] nicht vorhanden.';
