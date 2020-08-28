<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("head.html");
    ?>
</head>

<body>
<div class=" d-none d-md-block  backgrfull col-lg-12 "></div>

<form class = "formst  text-lowercase text-center position-absolute d-md-none d-lg-block" action="inlogverwerk.php" method="POST">
  E-mail:<br>
  <input type="email" name="email" id="email"><br>
  Wachtwoord:<br>
  <input type="password" name="wachtwoord1"><br><br>
  <input class = "subm"  type="submit" name='inlog' value="Submit" >
  <br>
  <br>
  <small>Heeft nog geen account? <a href="registratie.php">Meld je nu aan!</a></small>
</form>


</body>

</html>