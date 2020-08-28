<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include 'head.html';
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
?>

<body>
    <?php
     require "database.php";
     ?>

<form method='post' action="reserveren.php">
    <div class="row flex-container flex-row d-flex">
        <div class="col-sm 4">
            <h1> bowlen + eten en drinken </h1>
            <p class="des d-block"> 1 uur Bowlen. Inclusief eten en drinken <br> voor €27 p.p.,-</p>
            <input type="submit" name="reserveren" value="reserveren1">
        </div>

        <div class="col-sm 4">
            <h1> bowlen + eten en drinken </h1>
            <p class="des d-block"> 1 uur Bowlen. exclusief eten en drinken <br> voor €20 p.p.,-</p>
            <input type="submit" name="reserveren" value="reserveren2">
        </div>


        <div class="col-sm 4">
            <h1> bowlen </h1>
            <p class="des d-block"> 2 uur Bowlen. exclusief eten en drinken <br> voor €25 p.p.,-</p>
            <input type="submit" name="reserveren" value="reserveren3">
        </div>
    </div>
    <div class="row flex-container flex-row d-flex">
        <div class="col-sm 4">
            <h1> bowlen + eten en drinken</h1>
            <br>
            <p class="des d-block"> 2 uur Bowlen. Inclusief eten en drinken <br> voor €32 p.p.,-</p>
            <input type="submit" name="reserveren" value="reserveren4">
            <a>wordt aangeraden voor kinderfeestjes </a>
        </div>

        <div class="col-sm 4">
            <h1> bowlen + eten en drinken</h1>
            <br>
            <p class="des d-block"> 4 uur Bowlen. Inclusief eten en drinken <br> voor €40 p.p.,-</p>
            <input type="submit" name="reserveren" value="reserveren5">
            <a>Idiaal voor grote groeps evenementen</a>
        </div>

        <div class="col-sm 4">
            <h1> discobowlen + eten en drinken </h1>
            <br>
            <p class="des d-block"> 4 uur Bowlen. Inclusief eten en drinken <br> voor €50 p.p.,-</p>
            <input type="submit" name="reserveren" value="reserveren6">
            <a>Idiaal voor grote groeps evenementen</a>
        </div>
    </div>

    <div class="row flex-container flex-row">
        <div class="col-sm 4">
            <h1> extra uren</h1>
            <br>
            <p class="des d-block"> Is het zo gezellig dat u besluit langer the blijven? Geen probleem u betaald €5 per extra uur!</p>
            <script src="web.js"></script>
        </div>
    </div>
</form>

    <footer>
        <p class="snel">sneltoetsen</p>
        <a href="res.html">Reserveren</a><br>
        <a href="over.html">over ons</a><br>
        <a href="contact.html">contacten</a>
        <h1>social media:</h1>
        <a href="https://www.instagram.com/bowlingcentrumspijkenisse/" target="blank"> <img class="insta" src="insta.png" alt=""> </a>
        <a href="https://www.facebook.com/pages/category/Company/Party-Bowlingcentrum-Spijkenisse-426692404139577/" target="blank"> <img class="fb" src="fbs.png" alt=""> </a>
    </footer>
    <?php
    if(isset($_POST['uitloggen'])){
        session_destroy();
    }
    ?>

</body>

</html>