<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("head.html");
  ?>
</head>
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
<body>
    <div class="row">
        <div class="col-lg-4 w-33 col-md-4  body-tekst2">
            <p> Party- & Bowlingcentrum Spijkenisse heeft 16 volautomatische bowlingbanen, allen goedgekeurd door de Nederlandse Bowling Federatie. Wij hebben een "Kleine Bowlingzaal" met 6 bowlingbanen die u kunt afhuren voor feesten en partijen.</p>
        </div>
        <div class="col-lg-4 w-33 col-md-4 body-tekst2 ">
            <p>Het hele weekend verzorgen wij moonlightbowlen met gezellige muziek en videoclips. Ook beschikken onze banen over automatische gootbumpers voor de kinderen, die per persoon kunnen worden ingesteld.</p>
        </div>
        <div class="col-lg-3 w-33 col-md-4 body-tekst2 ">
            <p> Het bowlingcentrum is sinds jaar en dag de thuisbasis van de B.V.S. (Bowling Vereniging Spijkenisse), deze vereniging staat bekend om zijn sportieve en gezellige activiteiten. Voor meer informatie verwijzen wij u naar de site</p>
        </div>
    </div>



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