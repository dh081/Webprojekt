<?php
$_SESSION['prevprevurl'] =  $_SERVER['HTTP_REFERER'];
echo ' <!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Stone Shop</title>
</head>

<div class="divnav">

    <ul>
        <li class="logoschrift">Stone Shop</li>
    </ul>
    <nav>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../shop.php">Shop</a></li>
            <li><a href="../../collection.php">Collection</a></li>
            <li><a href="../../ueber-uns.php">Über Uns</a></li>
            <li><a href="loginformular.php">Login</a></li>
        </ul>
    </nav>
</div>
<br>

<div class="divformm">
<div class="divform">
    <h2 style="border-bottom: 1px solid #EEEEEE;">Als Admin anmelden</h2>
    <form class="form" action="adminlogin.php" method="post">
        <input type="text" size="40" maxlength="250" name="username" placeholder="Login"><br><br>

        <input type="password" size="40"  maxlength="250" name="password" placeholder="Dein Passwort"><br><br>

        <input type="submit" value="Login">
    </form>
</div>
</div>

<footer id="footer-total">
    <div class="footer-left">
        <span class="footer-ueberschrift">Rechtliches</span>
        <hr>
            <ul>
                <li><a href="../../impressum.php">Impressum</a></li>
                <li><a href="../../datenschutz.php">Datenschutz</a></li>
                <li><a href="../../agb.php">AGB</a></li>
                <li><a href="../../widerrufsrecht.php">Widerrufsrecht & Widerrufsformular</a></li>
                <li><a href="../../versand.php">Versand- & Zahlungsbedingungen</a></li>
                <li><a href="../../kontakt.php">Kontakt</a></li>
                <li><a href="adminformular.php">Admin</a></li>
                <li><a href="registrierungsformular.php">Registrierung</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="../../warenkorb.php">Warenkorb</a></li>
            </ul>   
    </div>  
      
    <div class="footer-center">
       <span class="footer-ueberschrift">Kontakt</span>
       <hr>
            <i class="fa fa-map-marker">
            </i>
            <p> 
                <span>Steinstra&szlig;e 1,</span><br> 
                <span>12345 Steinhausen</span><br> 
                <span>Gallien</span>
                
            </p>
            <br>
            <i class="fa fa-phone">
            </i>
            <p>+0 1234 56789</p>
            <br>
            <i class="fa fa-envelope">
            </i>
            <p>
                <a href="mailto:support@stoneshop.de">support@stoneshop.de</a>
            </p>
         
    </div>
    
    <div class="footer-right">
        <span class="footer-ueberschrift">Follow us on</span>
        <hr>
        <div class="footer-sm-icons">
            <a href="https://www.facebook.com">
                <i class="fa fa-facebook">
                </i>
            </a>
            <a href="https://www.twitter.com">
                <i class="fa fa-twitter">
                </i>
            </a>
            <a href="https://www.instagram.com">
                <i class="fa fa-instagram">
                </i>
            </a>
            <a href="https://www.youtube.com">
                <i class="fa fa-youtube">
                </i>
            </a>       
        </div>
      </div>
      <div class="footer-bottom">
            <div class="copyright">
                © by Obelix GmbH &amp; Co. KG 2017 - In Stone we trust.
            </div>
        </div>
     
</footer>
 
</body>


';
