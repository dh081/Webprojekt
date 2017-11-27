<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 30.10.2017
 * Time: 13:03
 */
echo'
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Stone Shop</title>
  </head>
  <body>';
include ("system/widgets/header.php");
echo '
<br>
<div class="kontakttotal">
<h2 style="border-bottom: 1px solid #EEEEEE;">Kontakt</h2>
<br>
<div class="kontakttext">
<p>
<span>Sie haben eine Frage zu einem unserer Artikel oder unserem Unternehmen?<br/>
   Melden Sie sich!</span></p>
    <br>
    <i class="fa fa-phone"></i>
    +0 1234 56789
    <i class="fa fa-envelope"></i>
    
       <a href="mailto:support@stoneshop.de">support@stoneshop.de</a>
     
     <br>
</div>
<div class="kontaktform">
<p>Schreiben Sie uns, wir beraten Sie gerne.</p>
<br>
<form method="post" action="#">
<!--<label for="Name"><b>Name:</b></label><br>-->
<input type="text"  name="Name" placeholder="Name"><br><br>
 
<!--<label for="Email"><b>E-Mail:</b></label><br>-->
<input type="text" name="Email" placeholder="Email"><br><br>
 
<!--<label for="Betreff"><b>Betreff:</b></label><br>-->
<input type="text" name="Betreff" placeholder="Betreff"><br><br>
 
<!--<label for="Nachricht"><b>Nachricht:</b></label><br>-->
<textarea name="Nachricht" placeholder="Nachricht" rows="10" cols="50"></textarea> <br><br>
 
<input type="submit" value="Absenden">
</form>
</div>

<div class="kontaktsocial">
<p>Besuchen Sie auch unsere Social Media Kanäle</p>
    <div class="socialicon">
    <a href="https://www.facebook.com">
        <i class="fa fa-facebook"></i>
    </a>
    <a href="https://www.twitter.com">
        <i class="fa fa-twitter"></i>
    </a>
    <a href="https://www.instagram.com">
        <i class="fa fa-instagram"></i>
    </a>
    <a href="https://www.youtube.com">
        <i class="fa fa-youtube"></i>
    </a> 
    </div>
</div>

<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2396.054943949441!2d9.098955802765067!3d48.74196525123917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799dc42026cc05f%3A0xeb88e48af65defde!2sHochschule+der+Medien!5e0!3m2!1sde!2sde!4v1511368559296"
  frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
';
include ("system/widgets/footer.php");

  
  








