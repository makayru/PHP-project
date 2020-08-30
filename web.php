
<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
if(isset($_SESSION['blogin'])){
    include("bnav.php");
}elseif(isset($_SESSION['klogin'])){
    include("knav.php");
}else{
    include("nav.html");
}
require 'database.php';
?>
    
<?php
    include("head.html");
?>
</head>

<body>


    <div class=" d-none d-md-block  hero-image col-lg-12 ">
        <div class=" container  text-lowercase text-center position-absolute d-md-none d-lg-block">
            <h1><span> welkom bij </span></h1>
            <span class="des d-block">bowlingcentrum Spijkenisse.</span>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12 ">
            <div class="body-tekst">
                2000 vierkante meter sport, spel en plezier met 16 volautomatische bowlingbanen! De medewerkers van Party- & Bowlingcentrum Spijkenisse bieden u een gastvrij en enthousiast onthaal. De gezellige ambiance, de goede bereikbaarheid en ruime parkeergelegenheid
                zorgen voor een perfecte locatie voor familie- en zakelijke bijeenkomsten.
            </div>
        </div>
    </div>

    <script src="web.js"></script>

    <footer>
        <p class="snel">sneltoetsen</p>
        <a href="res.html">Reserveren</a><br>
        <a href="over.html">over ons</a><br>
        <a href="contact.html">contacten</a>
        <br>
        <br>
        <h1>social media:</h1>
        <a href="https://www.instagram.com/bowlingcentrumspijkenisse/" target="blank"> <img class="insta" src="insta.png" alt=""> </a>
        <a href="https://www.facebook.com/pages/category/Company/Party-Bowlingcentrum-Spijkenisse-426692404139577/" target="blank"> <img class="fb" src="fbs.png" alt=""> </a>
    </footer>

</body>

</html>