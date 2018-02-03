<?php

    echo'<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Produkt bearbeiten</title>
  </head>
  <body>
  <div class="kopfleisteadmin">
    <a href="index.php" target="_blank">Zum Shop</a>
    <a href="#" target="_blank" style="vertical-align: top; margin-left: 89%">Logout</a>
  </div>
  <div class="menuadminaußen">
    <div class="menuadmin">
        <ul>
            <li> <a href="admin.php">Dashboard</a><li>
            <li> <a href="produktadmin.php">Produkte</a></li>
            <li> <a href="bestellungenadmin.php">Bestellungen</a></li>
            <li> <a href="kundenadmin.php">Kunden</a></li>
            <li><a href="system/registrierung/adminlogout.php">Logout</a></li>
        </ul>
    </div>
    ';
include ("datenbank.php"); //Verbindung zur Datenbank

/*if (isset($_GET["id"])) { //ID Abfrage über $_GET*/
$id=$_GET["id"];
    $statement =$db->query("SELECT `produktname`, `produktbeschreibung`, `produktean`, `produktpreis`  FROM `produkte` WHERE `id` = ".$id ); //Produkt auslesen
    $statement->bindParam(':id',$_GET["id"]);
    $statement->execute();
    $produkte = $statement->fetch();

    foreach ($produkte as $produkt) {

    echo'
     <div class="bodyadmin">Produkte
  <br>
<div class="produktupload">
    <form action="produktchange.php" method="post">
    <input type="hidden" name="produktid" value="'.$id ["id"].'"><br><br>
    <input type="text" name="produktname" placeholder="Bild einfügen" ><br><br>
    <input type="text" name="produktname" value="'.$produkt["produktname"] .'"><br><br>
    <input type="text" name="produktname" value=" '.$produkt ["produktbeschreibung"] .'"><br><br>
    <input type="text" name="produktname" value=" '.$produkt ["produktean"] .'"><br><br>
    <input type="text" name="produktname" value=" '.$produkt ["produktpreis"] .'"><br><br>
    <input type="submit" value="Bearbeiten">
    </form>
   </div>
   </div>
   </div>
   </body>
    ';}


