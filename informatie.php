<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include 'head.html';
    include 'database.php';
    ?>
</head>

<body>
    <?php
    include 'knav.php';
    ?>
    <table>
        <thead>
            <td>klant_id</td>
            <td>voornaam</td>
            <td>tussenvoegsel</td>
            <td>achternaam</td>
            <td>email</td>
            <td>telefoon</td>
            <td>geboortedatum</td>
        </thead>
        <form method="post">
            <td><input class="form-control" type="text" name="klantid" value="<?php echo $_SESSION['klantid'] ?>" readonly></td>
            <td><input class="form-control" type="text" name="voornaam" value="<?php echo $_SESSION['voornaam'] ?>"></td>
            <td><input class="form-control" type="text" name="tussenvoegsel" value="<?php echo $_SESSION['tussenvoegsel'] ?>"></td>
            <td><input class="form-control" type="text" name="achternaam" value="<?php echo $_SESSION['achternaam'] ?>"></td>
            <td><input class="form-control" type="text" name="email" value="<?php echo $_SESSION['email'] ?>"></td>
            <td><input class="form-control" type="text" name="telefoon" value="<?php echo $_SESSION['telefoon'] ?>"></td>
            <td><input class="form-control" type="text" name="geboortedatum" value="<?php echo $_SESSION['geboortedatum'] ?>"></td>
            <td><button name=" wijzig">wijzig</button></td>
        </form>

        <?php
$klantid=filter_input(INPUT_POST,'klantid', FILTER_SANITIZE_STRING);
$voornaam=filter_input(INPUT_POST,'voornaam', FILTER_SANITIZE_STRING);
$tussenvoegsel=filter_input(INPUT_POST,'tussenvoegsel', FILTER_SANITIZE_STRING);
$achternaam=filter_input(INPUT_POST,'achternaam', FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
$telefoon=filter_input(INPUT_POST,'telefoon', FILTER_SANITIZE_STRING);
$geboortedatum=filter_input(INPUT_POST,'geboortedatum', FILTER_SANITIZE_STRING);


    if(isset($_POST['wijzig']))
    {
        try
        {
            $squery=$db->prepare("UPDATE klant SET voornaam = :voornaam, tussenvoegsel = :tussenvoegsel, achternaam = :achternaam, email = :email, telefoon = :telefoon, geboortedatum = :geboortedatum WHERE klantid = :klantid");
            $squery->bindValue(':klantid', $klantid);
            $squery->bindValue(':voornaam', $voornaam);
            $squery->bindValue(':tussenvoegsel', $tussenvoegsel);
            $squery->bindValue(':achternaam', $achternaam);
            $squery->bindValue(':email', $email);
            $squery->bindValue(':telefoon', $telefoon);
            $squery->bindValue(':geboortedatum', $geboortedatum);
            $squery->execute();
        }catch(PDOException $e) {
            die("Error!: ". $e->getMessage());
    }

    echo "<div class='alert alert-dark' role='alert'>
    Gelukt. Log opnieuw in op wijzigingen op te slaan. <a href='uitlogverwerk.php' class='alert-link'>uitloggen</a>
  </div>";

}
        ?>
    </table>

</body>

</html>