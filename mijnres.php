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
<body>

    <table>
        <thead>
            <td>klant_id</td>
            <td>voornaam</td>
            <td>tussenvoegsel</td>
            <td>achternaam</td>
            <td>aantalpersonen</td>
            <td>datum</td>
            <td>tijd</td>
        </thead>
        <form method="post">
            <td><input class="form-control" type="text" name="klantid" value="<?php echo $_SESSION['klantid'] ?>" readonly></td>
            <td><input class="form-control" type="text" name="voornaam" value="<?php echo $_SESSION['voornaam'] ?>"></td>
            <td><input class="form-control" type="text" name="tussenvoegsel" value="<?php echo $_SESSION['tussenvoegsel'] ?>"></td>
            <td><input class="form-control" type="text" name="achternaam" value="<?php echo $_SESSION['achternaam'] ?>"></td>
            <td><input class="form-control" type="text" name="email" value="<?php echo $_SESSION['aantalpersonen'] ?>"></td>
            <td><input class="form-control" type="text" name="telefoon" value="<?php echo $_SESSION['datum']?>"></td>
            <td><input class="form-control" type="text" name="geboortedatum" value="<?php echo $_SESSION['tijd'] ?>"></td>
        </form>
    </table>
</body>
</html>