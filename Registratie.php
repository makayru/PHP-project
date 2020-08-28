<!DOCTYPE html>
<html lang="en">


<?php
    include("head.html");
    ?>

<body>

<div class=" d-none d-md-block  backgrfull col-lg-12 ">

<form class = "formst  text-lowercase text-center position-absolute d-block" action="regverwerk.php" method="POST">
 Voornaam:<br>
  <input type="text" name="voornaam" required><br><br>  

 Tussenvoegsel:<br>
  <input type="text" name="tussenvoegsel"><br><br>
 
  Achternaam:<br>
  <input type="text" name="achternaam" required><br><br>

E-mail:<br>
  <input type="email" name="email" id="email" required><br><br>

mobiele telefoon nummer:<br>
  <input type="tel" id="telefoon" name="telefoon"
       pattern="[0-9]{2}[0-9]{4}[0-9]{4}"
       required>
    <br>
    <small>Voorbeeld: (06)-1234-5678</small>
    <br><br>

    Geboortedatum:<br>
    <input type="date" name="geboortedatum" required pattern="\d{4}-\d{2}-\d{2}"
    required>
    <br>
    <br>

    Wachtwoord:<br>
  <input type="password" name="wachtwoord1" required><br><br>  
  Herhaal Wachtwoord:<br>
  <input type="password" name="wachtwoord2" required><br><br> 
 
  <input class = "subm" name="registreer" type="submit" value="Submit">
  <br>
  <small>Heeft u al een account? <a href="inlog.php">log nu in!</a></small>

</form>






</body>

</html>